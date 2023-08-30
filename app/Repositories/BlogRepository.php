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
        return $this->blog->with(['blogCategory'])->paginate(10);
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

        $slug = str_replace(' ', '-', strtolower($data['title']));
        $isSlugExist = $this->blog->where('slug', $slug)->first();
        if ($isSlugExist) {
            $slug = $slug . '-' . uniqid();
        }

        DB::beginTransaction();
        try {
            $this->blog->create([
                'blog_category_id' => $data['blog_category_id'],
                'thumbnail'        => $fileNameThumbnail,
                'main_image'       => $fileNameMainImage,
                'title'            => $data['title'],
                'author_name'      => $data['author_name'],
                'content'          => $data['content'],
                'published_date'   => date('Y-m-d H:i:s'),
                'tag'              => str_replace(',', ' - ', $data['tag']),
                'meta_description' => substr(strip_tags($data['content']), 0, 160),
                'meta_keyword'     => str_replace(',', '-', $data['tag']),
                'slug'             => $slug
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
        // dd($data);
        $blog = $this->getById($id);

        if (isset($data['thumbnail'])) {
            $fileNameThumbnail = uniqid() . '.' . $data['thumbnail']->extension();
            $data['thumbnail']->storeAs('public/blogs/thumbnail', $fileNameThumbnail);
            Storage::delete('public/blogs/thumbnail/' . $blog->thumbnail);
            $data['thumbnail'] = $fileNameThumbnail;
        }


        if (isset($data['main_image'])) {
            $fileNameMainImage = uniqid() . '.' . $data['main_image']->extension();
            $data['main_image']->storeAs('public/blogs/main-image', $fileNameMainImage);
            Storage::delete('public/blogs/main-image/' . $blog->main_image);
            $data['main_image'] = $fileNameMainImage;
        }

        $slug = str_replace(' ', '-', strtolower($data['title']));

        // check if slug is exist
        $isSlugExist = $this->blog->where('slug', $slug)->first();
        if ($isSlugExist) {
            $slug = $slug . '-' . uniqid();
        }

        $published_date   = date('Y-m-d H:i:s');
        $tag              = str_replace(',', ' - ', $data['tag']);
        $meta_description = substr(strip_tags($data['content']), 0, 160);
        $meta_keyword     = str_replace(',', '-', $data['tag']);


        DB::beginTransaction();
        try {
            $blog->update(array_merge($data, [
                'published_date'   => $published_date,
                'tag'              => $tag,
                'meta_description' => $meta_description,
                'meta_keyword'     => $meta_keyword,
                'slug'             => $slug
            ]));
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

    public function getBySlug($slug)
    {
        return $this->blog->with(['blogCategory'])->where('slug', $slug)->first();
    }

    public function search($data)
    {
        return $this->blog->with(['blogCategory'])
            ->where('title', 'like', '%' . $data->search . '%')
            ->orWhere('content', 'like', '%' . $data->search . '%')
            ->get();
    }

    public function filter($category_id)
    {
        return $this->blog->with(['blogCategory'])->where('blog_category_id', $category_id)->get();
    }

    public function getRelatedBlogs($slug)
    {
        $blog = $this->getBySlug($slug);
        $tags = explode('-', $blog->tag);

        return $this->blog->with(['blogCategory'])
            ->where('blog_category_id', $blog->blog_category_id)
            ->where('id', '!=', $blog->id)
            ->where(function ($query) use ($tags) {
                foreach ($tags as $tag) {
                    $query->orWhere('tag', 'like', '%' . $tag . '%');
                }
            })
            ->limit(3)
            ->get();
    }
}
