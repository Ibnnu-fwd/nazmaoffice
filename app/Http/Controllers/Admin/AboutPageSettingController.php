<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\AboutPageSettingInterface;
use Illuminate\Http\Request;

class AboutPageSettingController extends Controller
{
    private $aboutPageSetting;

    public function __construct(AboutPageSettingInterface $aboutPageSetting)
    {
        $this->aboutPageSetting = $aboutPageSetting;
    }

    public function index()
    {
        return view('admin.about_page_setting.index', [
            'aboutPageSetting' => $this->aboutPageSetting->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'slide_image_1' => 'required|image|mimes:jpg,jpeg,png',
            'slide_image_2' => 'required|image|mimes:jpg,jpeg,png',
            'slide_image_3' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        try {
            $this->aboutPageSetting->store($request->all());
            return redirect()->back()->with('success', 'Pengaturan halaman about berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Pengaturan halaman about gagal ditambahkan');
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'slide_image_1' => 'nullable|image|mimes:jpg,jpeg,png',
            'slide_image_2' => 'nullable|image|mimes:jpg,jpeg,png',
            'slide_image_3' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        try {
            $this->aboutPageSetting->update($request->all());
            return redirect()->back()->with('success', 'Pengaturan halaman about berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Pengaturan halaman about gagal diubah');
        }
    }
}
