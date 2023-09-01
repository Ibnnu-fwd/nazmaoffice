<?php

namespace App\Repositories;

use App\Interfaces\CompanyLandingSettingInterface;
use App\Models\CompanyLandingSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CompanyLandingSettingRepository implements CompanyLandingSettingInterface
{
    private $companyLandingSetting;

    public function __construct(CompanyLandingSetting $companyLandingSetting)
    {
        $this->companyLandingSetting = $companyLandingSetting;
    }

    public function get()
    {
        return $this->companyLandingSetting->first();
    }

    public function store($data)
    {
        $slideImage1 = uniqid() . '.' . $data['slide_image_1']->extension();
        $slideImage2 = uniqid() . '.' . $data['slide_image_2']->extension();
        $slideImage3 = uniqid() . '.' . $data['slide_image_3']->extension();

        $data['slide_image_1']->storeAs('public/company-landing-setting', $slideImage1);
        $data['slide_image_2']->storeAs('public/company-landing-setting', $slideImage2);
        $data['slide_image_3']->storeAs('public/company-landing-setting', $slideImage3);

        $data['slide_image_1'] = $slideImage1;
        $data['slide_image_2'] = $slideImage2;
        $data['slide_image_3'] = $slideImage3;

        DB::beginTransaction();

        try {
            $this->companyLandingSetting->create($data);
            DB::commit();
        } catch (\Throwable $th) {
            Storage::delete([
                'public/company-landing-setting/' . $slideImage1,
                'public/company-landing-setting/' . $slideImage2,
                'public/company-landing-setting/' . $slideImage3
            ]);

            DB::rollBack();
            throw $th;
        }
    }

    public function update($data)
    {
        $companyLandingSetting = $this->companyLandingSetting->first();

        if (isset($data['slide_image_1'])) {
            $slideImage1 = uniqid() . '.' . $data['slide_image_1']->extension();
            $data['slide_image_1']->storeAs('public/company-landing-setting', $slideImage1);
            $data['slide_image_1'] = $slideImage1;
            Storage::delete('public/company-landing-setting/' . $companyLandingSetting->slide_image_1);
        }

        if (isset($data['slide_image_2'])) {
            $slideImage2 = uniqid() . '.' . $data['slide_image_2']->extension();
            $data['slide_image_2']->storeAs('public/company-landing-setting', $slideImage2);
            $data['slide_image_2'] = $slideImage2;
            Storage::delete('public/company-landing-setting/' . $companyLandingSetting->slide_image_2);
        }

        if (isset($data['slide_image_3'])) {
            $slideImage3 = uniqid() . '.' . $data['slide_image_3']->extension();
            $data['slide_image_3']->storeAs('public/company-landing-setting', $slideImage3);
            $data['slide_image_3'] = $slideImage3;
            Storage::delete('public/company-landing-setting/' . $companyLandingSetting->slide_image_3);
        }

        DB::beginTransaction();

        try {
            $companyLandingSetting->update($data);
            DB::commit();
        } catch (\Throwable $th) {
            Storage::delete([
                'public/company-landing-setting/' . $slideImage1,
                'public/company-landing-setting/' . $slideImage2,
                'public/company-landing-setting/' . $slideImage3
            ]);
            DB::rollBack();
            throw $th;
        }
    }
}
