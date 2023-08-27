<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\CompanySocialMediaInteface;
use Illuminate\Http\Request;

class CompanySocialMediaController extends Controller
{
    private $companySocialMedia;

    public function __construct(CompanySocialMediaInteface $companySocialMedia)
    {
        $this->companySocialMedia = $companySocialMedia;
    }

    public function index()
    {
        return view('admin.company_social_media.index', [
            'companySocialMedias' => $this->companySocialMedia->getAll(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'link' => 'required',
        ]);

        try {
            $this->companySocialMedia->store($request);
            return redirect()->back()->with('success', 'Sosial media berhasil dibuat!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Sosial media gagal dibuat!');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'link' => 'required',
        ]);

        try {
            $this->companySocialMedia->update($request, $id);
            return redirect()->back()->with('success', 'Sosial media berhasil diubah!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Sosial media gagal diubah!');
        }
    }

    public function destroy($id)
    {
        try {
            $this->companySocialMedia->destroy($id);
            return redirect()->back()->with('success', 'Sosial media berhasil dihapus!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Sosial media gagal dihapus!');
        }
    }

    public function getById(Request $request)
    {
        return response()->json($this->companySocialMedia->getById($request->id));
    }
}
