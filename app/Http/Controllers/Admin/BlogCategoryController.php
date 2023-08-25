<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\BlogCategoryInterface;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    private $blogCategory;

    public function __construct(BlogCategoryInterface $blogCategory)
    {
        $this->blogCategory = $blogCategory;
    }

    public function index()
    {
        return view('admin.blog_category.index', [
            'blogCategories' => $this->blogCategory->getAll(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'unique:blog_categories,title'],
        ]);

        try {
            $this->blogCategory->store($request->all());
            return redirect()->back()->with('success', 'Kategori berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Kategori gagal ditambahkan');
        }
    }

    public function getById(Request $request)
    {
        return response()->json($this->blogCategory->getById($request->id));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => ['required', 'unique:blog_categories,title'],
        ]);

        try {
            $this->blogCategory->update($id, $request->all());
            return redirect()->back()->with('success', 'Kategori berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Kategori gagal diubah');
        }
    }

    public function destroy($id)
    {
        $this->blogCategory->destroy($id);
        return redirect()->back()->with('success', 'Kategori berhasil dihapus');
    }
}
