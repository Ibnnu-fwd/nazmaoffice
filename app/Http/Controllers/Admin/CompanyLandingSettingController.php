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
            'slide_image_1'             => 'required|image|mimes:jpg,jpeg,png',
            'slide_image_2'             => 'required|image|mimes:jpg,jpeg,png',
            'slide_image_3'             => 'required|image|mimes:jpg,jpeg,png',
            'slide_image_4'             => 'required|image|mimes:jpg,jpeg,png',
            'title_slide_image_1'       => 'required',
            'description_slide_image_1' => 'required',
            'title_slide_image_2'       => 'required',
            'description_slide_image_2' => 'required',
            'title_slide_image_3'       => 'required',
            'description_slide_image_3' => 'required',
            'title_slide_image_4'       => 'required',
            'description_slide_image_4' => 'required',
            'about_us'                  => 'required|string',
            'office_phone'              => 'required|string',
            'personal_phone'            => 'required|string',
            'email'                     => 'required|email',
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
            'slide_image_1'             => 'nullable|image|mimes:jpg,jpeg,png',
            'slide_image_2'             => 'nullable|image|mimes:jpg,jpeg,png',
            'slide_image_3'             => 'nullable|image|mimes:jpg,jpeg,png',
            'slide_image_4'             => 'nullable|image|mimes:jpg,jpeg,png',
            'title_slide_image_1'       => 'nullable',
            'description_slide_image_1' => 'nullable',
            'title_slide_image_2'       => 'nullable',
            'description_slide_image_2' => 'nullable',
            'title_slide_image_3'       => 'nullable',
            'description_slide_image_3' => 'nullable',
            'title_slide_image_4'       => 'nullable',
            'description_slide_image_4' => 'nullable',
            'about_us'                  => 'required|string',
            'office_phone'              => 'required|string',
            'personal_phone'            => 'required|string',
            'email'                     => 'required|email',
        ]);

        try {
            $this->companyLandingSetting->update($request->all());
            return redirect()->back()->with('success', 'Pengaturan berhasil disimpan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Pengaturan gagal disimpan');
        }
    }
}
