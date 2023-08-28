<?php

namespace App\Repositories;

use App\Interfaces\BlogInterface;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogRepository implements BlogInterface
{
    private $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function getAll()
    {
        return $this->blog->with(['blogCategory'])->paginate(5);
    }

    public function getById($id)
    {
        return $this->blog->with(['blogCategory'])->findOrFail($id);
    }

    public function store($data)
    {
        $fileNameThumbnail = uniqid() . '.' . $data['thumbnail']->extension();
        $data['thumbnail']->storeAs('public/blogs/thumbnail', $fileNameThumbnail);

        $fileNameMainImage = uniqid() . '.' . $data['main_image']->extension();
        $data['main_image']->storeAs('public/blogs/main-image', $fileNameMainImage);

        DB::beginTransaction();
        try {
            $this->blog->create([
                'blog_category_id' => $data['blog_category_id'],
                'thumbnail'        => $fileNameThumbnail,
                'main_image'       => $fileNameMainImage,
                'title'            => $data['title'],
                'author_name'      => $data['author_name'],
                'content'          => $data['content'],
                'published_date'   => date('Y-m-d H:i:s')
            ]);
        } catch (\Throwable $th) {
            throw $th;

            Storage::delete('public/blogs/thumbnail/' . $fileNameThumbnail);
            Storage::delete('public/blogs/main-image/' . $fileNameMainImage);

            DB::rollBack();
        }

        DB::commit();
    }

    public function update($id, $data)
    {
        $blog = $this->getById($id);

        // delete old file
        Storage::delete('public/blogs/thumbnail/' . $blog->thumbnail);
        Storage::delete('public/blogs/main-image/' . $blog->main_image);

        // upload new file
        $fileNameThumbnail = uniqid() . '.' . $data['thumbnail']->extension();
        $data['thumbnail']->storeAs('public/blogs/thumbnail', $fileNameThumbnail);

        $fileNameMainImage = uniqid() . '.' . $data['main_image']->extension();
        $data['main_image']->storeAs('public/blogs/main-image', $fileNameMainImage);

        DB::beginTransaction();
        try {
            $blog->update([
                'blog_category_id' => $data['blog_category_id'],
                'thumbnail'        => $fileNameThumbnail,
                'main_image'       => $fileNameMainImage,
                'title'            => $data['title'],
                'author_name'      => $data['author_name'],
                'content'          => $data['content'],
                'published_date'   => date('Y-m-d H:i:s')
            ]);
        } catch (\Throwable $th) {
            throw $th;

            Storage::delete('public/blogs/thumbnail/' . $fileNameThumbnail);
            Storage::delete('public/blogs/main-image/' . $fileNameMainImage);

            DB::rollBack();
        }

        DB::commit();
    }

    public function destroy($id)
    {
        $blog = $this->getById($id);

        // delete old file
        Storage::delete('public/blogs/thumbnail/' . $blog->thumbnail);
        Storage::delete('public/blogs/main-image/' . $blog->main_image);

        $blog->delete();
    }


    public function countBlog()
    {
        return $this->blog->get()->count();
    }
}
    