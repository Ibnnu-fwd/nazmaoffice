<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\PartnerInterface;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    private $partner;

    public function __construct(PartnerInterface $partner)
    {
        $this->partner = $partner;
    }

    public function index()
    {
        return view('admin.partner.index', [
            'partners' => $this->partner->getAll()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => ['required'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'link'  => ['required']
        ]);

        try {
            $this->partner->store($request->all());
            return redirect()->back()->with('success', 'Partner berhasil dibuat!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Partner gagal dibuat!');
        }
    }

    public function getById(Request $request)
    {
        return response()->json($this->partner->getById($request->id));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name'  => ['required'],
            'image' => ['image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'link'  => ['required']
        ]);

        try {
            $this->partner->update($id, $request->all());
            return redirect()->back()->with('success', 'Partner berhasil diupdate!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Partner gagal diupdate!');
        }
    }

    public function destroy($id)
    {
        try {
            $this->partner->destroy($id);
            return redirect()->back()->with('success', 'Partner berhasil dihapus!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Partner gagal dihapus!');
        }
    }
}
