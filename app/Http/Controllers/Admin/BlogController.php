<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\BlogCategoryInterface;
use App\Interfaces\BlogInterface;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog;
    private $blogCategory;

    public function __construct(BlogInterface $blog, BlogCategoryInterface $blogCategory)
    {
        $this->blog = $blog;
        $this->blogCategory = $blogCategory;
    }
    public function index()
    {
        return view('admin.blog.index', [
            'blogs'          => $this->blog->getAll(),
            'blogCategories' => $this->blogCategory->getAllWithoutPagination()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_category_id' => ['required', 'exists:blog_categories,id'],
            'thumbnail'        => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'main_image'       => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'title'            => ['required'],
            'author_name'      => ['required'],
            'content'          => ['required'],
            'tag'              => ['nullable'],
        ]);

        try {
            $this->blog->store($request->all());
            return redirect()->back()->with('success', 'Blog berhasil dibuat!');
        } catch (Exception $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Blog gagal dibuat!');
        }
    }

    public function show($id)
    {
        return view('admin.blog.show', [
            'blog' => $this->blog->getById($id)
        ]);
    }

    public function getById(Request $request)
    {
        return response()->json($this->blog->getById($request->id));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'blog_category_id' => ['required', 'exists:blog_categories,id'],
            'thumbnail'        => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'main_image'       => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'title'            => ['required'],
            'author_name'      => ['required'],
            'content'          => ['required'],
            'tag'              => ['nullable'],
        ]);

        try {
            $this->blog->update($id, $request->all());
            return redirect()->back()->with('success', 'Blog berhasil diupdate!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Blog gagal diupdate!');
        }
    }

    public function destroy($id)
    {
        $this->blog->destroy($id);
        return redirect()->back()->with('success', 'Blog berhasil dihapus!');
    }
}
