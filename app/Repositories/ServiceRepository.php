<?php

namespace App\Repositories;

use App\Interfaces\ServiceInterface;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServiceRepository implements ServiceInterface
{
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function getAll()
    {
        return $this->service->with('serviceCategory')->get();
    }

    public function store($data)
    {
        $fileNameHeroImage    = uniqid() . '.' . $data['hero_image']->extension();
        $fileNameBenefitImage = uniqid() . '.' . $data['benefit_image']->extension();

        $data['hero_image']->storeAs('public/services', $fileNameHeroImage);
        $data['benefit_image']->storeAs('public/services', $fileNameBenefitImage);

        $data['hero_image']    = $fileNameHeroImage;
        $data['benefit_image'] = $fileNameBenefitImage;

        DB::beginTransaction();
        try {
            $this->service->create($data);
            DB::commit();
        } catch (\Throwable $th) {
            Storage::delete('public/services/' . $fileNameHeroImage);
            Storage::delete('public/services/' . $fileNameBenefitImage);

            DB::rollback();
            return false;
        }
    }

    public function getById($id)
    {
        return $this->service->with(['serviceCategory', 'serviceProjects', 'subServices'])->findOrFail($id);
    }

    public function update($id, $data)
    {
        $service = $this->service->findOrFail($id);

        $fileNameHeroImage    = $service->hero_image;
        $fileNameBenefitImage = $service->benefit_image;

        if (isset($data['hero_image'])) {
            $fileNameHeroImage = uniqid() . '.' . $data['hero_image']->extension();
            $data['hero_image']->storeAs('public/services', $fileNameHeroImage);
            Storage::delete('public/services/' . $service->hero_image);
        }

        if (isset($data['benefit_image'])) {
            $fileNameBenefitImage = uniqid() . '.' . $data['benefit_image']->extension();
            $data['benefit_image']->storeAs('public/services', $fileNameBenefitImage);
            Storage::delete('public/services/' . $service->benefit_image);
        }

        $data['hero_image']    = $fileNameHeroImage;
        $data['benefit_image'] = $fileNameBenefitImage;

        DB::beginTransaction();
        try {
            $service->update($data);
            DB::commit();
        } catch (\Throwable $th) {
            Storage::delete('public/services/' . $fileNameHeroImage);
            Storage::delete('public/services/' . $fileNameBenefitImage);

            DB::rollback();
            return false;
        }
    }

    public function changeStatus($id, $status)
    {
        return $this->service->findOrFail($id)->update(['is_active' => $status]);
    }

    public function getTestimonials($id)
    {
        return $this->service->findOrFail($id)->serviceTestimonials;
    }
}
