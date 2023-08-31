<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\GalleryInterface;
use App\Models\Gallery;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class GalleryController extends Controller
{
    private $gallery;

    public function __construct(GalleryInterface $gallery)
    {
        $this->gallery = $gallery;
    }

    public function index()
    {
        return view('admin.gallery.index', [
            'galleries' => $this->gallery->getAll()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'          => ['required'],
            'image'          => ['required', 'image', 'max:2048'],
            'published_date' => ['required']
        ]);

        try {
            $this->gallery->store($request->all());
            return redirect()->back()->with('success', 'Galeri berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Galeri gagal ditambahkan');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title'          => ['required'],
            'image'          => ['nullable', 'image', 'max:2048'],
            'published_date' => ['required']
        ]);

        try {
            $this->gallery->update($request->all(), $id);
            return redirect()->back()->with('success', 'Galeri berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Galeri gagal diubah');
        }
    }

    public function destroy($id)
    {
        try {
            $this->gallery->destroy($id);
            return redirect()->back()->with('success', 'Galeri berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Galeri gagal dihapus');
        }
    }

    public function getById(Request $request)
    {
        return response()->json($this->gallery->getById($request->id));
    }
}
