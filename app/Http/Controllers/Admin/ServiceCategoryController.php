<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ServiceCategoryInterface;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    private $serviceCategory;

    public function __construct(ServiceCategoryInterface $serviceCategory)
    {
        $this->serviceCategory = $serviceCategory;
    }

    public function index()
    {
        return view('admin.service_categories.index', [
            'serviceCategories' => $this->serviceCategory->getAll()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        try {
            $this->serviceCategory->store($request->all());
            return redirect()->back()->with('success', 'Kategori Layanan berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Kategori Layanan gagal ditambahkan');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        try {
            $this->serviceCategory->update($id, $request->all());
            return redirect()->back()->with('success', 'Kategori Layanan berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Kategori Layanan gagal diubah');
        }
    }

    public function destroy($id)
    {
        try {
            $this->serviceCategory->destroy($id);
            return redirect()->back()->with('success', 'Kategori Layanan berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Kategori Layanan gagal dihapus');
        }
    }

    public function getById(Request $request)
    {
        return response()->json($this->serviceCategory->getById($request->id));
    }
}
