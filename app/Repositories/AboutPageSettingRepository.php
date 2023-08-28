<?php

namespace App\Repositories;

use App\Interfaces\AboutPageSettingInterface;
use App\Models\AboutPageSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AboutPageSettingRepository implements AboutPageSettingInterface
{
    private $aboutPageSetting;

    public function __construct(AboutPageSetting $aboutPageSetting)
    {
        $this->aboutPageSetting = $aboutPageSetting;
    }

    public function get()
    {
        return $this->aboutPageSetting->first();
    }

    public function store($data)
    {
        $fileNameSlideImage1 = uniqid() . '.' . $data['slide_image_1']->extension();
        $fileNameSlideImage2 = uniqid() . '.' . $data['slide_image_2']->extension();
        $fileNameSlideImage3 = uniqid() . '.' . $data['slide_image_3']->extension();

        $data['slide_image_1']->storeAs('public/about-page-setting', $fileNameSlideImage1);
        $data['slide_image_2']->storeAs('public/about-page-setting', $fileNameSlideImage2);
        $data['slide_image_3']->storeAs('public/about-page-setting', $fileNameSlideImage3);

        $data['slide_image_1'] = $fileNameSlideImage1;
        $data['slide_image_2'] = $fileNameSlideImage2;
        $data['slide_image_3'] = $fileNameSlideImage3;

        DB::beginTransaction();
        try {
            $this->aboutPageSetting->create($data);
            DB::commit();
        } catch (\Throwable $th) {
            Storage::delete([
                'public/about-page-setting/' . $fileNameSlideImage1,
                'public/about-page-setting/' . $fileNameSlideImage2,
                'public/about-page-setting/' . $fileNameSlideImage3
            ]);
            DB::rollBack();
        }
    }

    public function update($data)
    {
        $aboutPageSetting = $this->aboutPageSetting->first();

        if (isset($data['slide_image_1'])) {
            $fileNameSlideImage1 = uniqid() . '.' . $data['slide_image_1']->extension();
            $data['slide_image_1']->storeAs('public/about-page-setting', $fileNameSlideImage1);
            $data['slide_image_1'] = $fileNameSlideImage1;
            Storage::delete('public/about-page-setting/' . $aboutPageSetting->slide_image_1);
        }

        if (isset($data['slide_image_2'])) {
            $fileNameSlideImage2 = uniqid() . '.' . $data['slide_image_2']->extension();
            $data['slide_image_2']->storeAs('public/about-page-setting', $fileNameSlideImage2);
            $data['slide_image_2'] = $fileNameSlideImage2;
            Storage::delete('public/about-page-setting/' . $aboutPageSetting->slide_image_2);
        }

        if (isset($data['slide_image_3'])) {
            $fileNameSlideImage3 = uniqid() . '.' . $data['slide_image_3']->extension();
            $data['slide_image_3']->storeAs('public/about-page-setting', $fileNameSlideImage3);
            $data['slide_image_3'] = $fileNameSlideImage3;
            Storage::delete('public/about-page-setting/' . $aboutPageSetting->slide_image_3);
        }

        DB::beginTransaction();
        try {
            $aboutPageSetting->update($data);
            DB::commit();
        } catch (\Throwable $th) {
            if (isset($data['slide_image_1'])) {
                Storage::delete('public/about-page-setting/' . $fileNameSlideImage1);
            }

            if (isset($data['slide_image_2'])) {
                Storage::delete('public/about-page-setting/' . $fileNameSlideImage2);
            }

            if (isset($data['slide_image_3'])) {
                Storage::delete('public/about-page-setting/' . $fileNameSlideImage3);
            }

            DB::rollBack();
        }
    }
}
