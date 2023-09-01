<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\CompanyLandingSettingInterface;
use Illuminate\Http\Request;

class CompanyLandingSettingController extends Controller
{
    private $companyLandingSetting;

    public function __construct(CompanyLandingSettingInterface $companyLandingSetting)
    {
        $this->companyLandingSetting = $companyLandingSetting;
    }

    public function index()
    {
        return view('admin.company_landing_setting.index', [
            'companyLandingSetting' => $this->companyLandingSetting->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'slide_image_1'  => 'required|image|mimes:jpg,jpeg,png',
            'slide_image_2'  => 'required|image|mimes:jpg,jpeg,png',
            'slide_image_3'  => 'required|image|mimes:jpg,jpeg,png',
            'about_us'       => 'required|string',
            'office_phone'   => 'required|string',
            'personal_phone' => 'required|string',
            'email'          => 'required|email',
        ]);

        try {
            $this->companyLandingSetting->store($request->all());
            return redirect()->back()->with('success', 'Pengaturan berhasil disimpan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Pengaturan gagal disimpan');
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'slide_image_1'  => 'nullable|image|mimes:jpg,jpeg,png',
            'slide_image_2'  => 'nullable|image|mimes:jpg,jpeg,png',
            'slide_image_3'  => 'nullable|image|mimes:jpg,jpeg,png',
            'about_us'       => 'required|string',
            'office_phone'   => 'required|string',
            'personal_phone' => 'required|string',
            'email'          => 'required|email',
        ]);

        try {
            $this->companyLandingSetting->update($request->all());
            return redirect()->back()->with('success', 'Pengaturan berhasil disimpan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Pengaturan gagal disimpan');
        }
    }
}
