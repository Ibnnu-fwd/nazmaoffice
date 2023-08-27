<?php

namespace App\Repositories;

use App\Interfaces\ServiceTestimonialInterface;
use App\Models\ServiceTestimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServiceTestimonialRepository implements ServiceTestimonialInterface
{
    private $serviceTestimonial;

    public function __construct(ServiceTestimonial $serviceTestimonial)
    {
        $this->serviceTestimonial = $serviceTestimonial;
    }

    public function getByServiceId($serviceId)
    {
        return $this->serviceTestimonial->where('service_id', $serviceId)->get();
    }

    public function getById($id)
    {
        return $this->serviceTestimonial->find($id);
    }

    public function store($serviceId, $data)
    {
        $fileNameImage = uniqid() . '.' . $data['image']->extension();
        $data['image']->storeAs('public/service-testimonial', $fileNameImage);

        DB::beginTransaction();
        try {
            $this->serviceTestimonial->create(array_merge($data, [
                'service_id' => $serviceId,
                'image'      => $fileNameImage
            ]));
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            Storage::delete('public/service-testimonial/' . $fileNameImage);
            return false;
        }
    }

    public function update($id, $data)
    {
        $serviceTestimonial = $this->serviceTestimonial->find($id);
        Storage::delete('public/service-testimonial/' . $serviceTestimonial->image);

        $fileNameImage = uniqid() . '.' . $data['image']->extension();
        $data['image']->storeAs('public/service-testimonial', $fileNameImage);

        DB::beginTransaction();
        try {
            $serviceTestimonial->update(array_merge($data, [
                'image' => $fileNameImage
            ]));
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            Storage::delete('public/service-testimonial/' . $fileNameImage);
            return false;
        }
    }

    public function destroy($id)
    {
        $serviceTestimonial = $this->serviceTestimonial->find($id);
        Storage::delete('public/service-testimonial/' . $serviceTestimonial->image);

        DB::beginTransaction();
        try {
            $serviceTestimonial->delete();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            return false;
        }
    }
}
