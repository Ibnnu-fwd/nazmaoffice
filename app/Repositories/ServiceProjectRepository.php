<?php

namespace App\Repositories;

use App\Interfaces\ServiceProjectInterface;
use App\Models\ServiceProject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServiceProjectRepository implements ServiceProjectInterface
{
    private $serviceProject;

    public function __construct(ServiceProject $serviceProject)
    {
        $this->serviceProject = $serviceProject;
    }

    public function getAll()
    {
        return $this->serviceProject->with('service')->get();
    }

    public function getById($id)
    {
        return $this->serviceProject->with('service')->find($id);
    }

    public function getByServiceid($id)
    {
        return $this->serviceProject->with('service')->where('service_id', $id)->get();
    }

    public function store($data)
    {
        if (isset($data['image_1'])) {
            $fileNameImage1 = uniqid() . '.' . $data['image_1']->extension();
            $data['image_1']->storeAs('public/service_project', $fileNameImage1);
            $data['image_1'] = $fileNameImage1;
        }

        if (isset($data['image_2'])) {
            $fileNameImage2 = uniqid() . '.' . $data['image_2']->extension();
            $data['image_2']->storeAs('public/service_project', $fileNameImage2);
            $data['image_2'] = $fileNameImage2;
        }

        if (isset($data['image_3'])) {
            $fileNameImage3 = uniqid() . '.' . $data['image_3']->extension();
            $data['image_3']->storeAs('public/service_project', $fileNameImage3);
            $data['image_3'] = $fileNameImage3;
        }

        DB::beginTransaction();

        try {
            $this->serviceProject->create($data);
            DB::commit();
        } catch (\Exception $e) {
            Storage::delete('public/service_project/' . $fileNameImage1);
            Storage::delete('public/service_project/' . $fileNameImage2);
            Storage::delete('public/service_project/' . $fileNameImage3);

            DB::rollback();
            return false;
        }
    }

    public function update($id, $data)
    {
        $serviceProject = $this->serviceProject->find($id);

        if (isset($data['image_1'])) {
            Storage::delete('public/service_project/' . $serviceProject->image_1);

            $fileNameImage1 = uniqid() . '.' . $data['image_1']->extension();
            $data['image_1']->storeAs('public/service_project', $fileNameImage1);
            $data['image_1'] = $fileNameImage1;
        }

        if (isset($data['image_2'])) {
            Storage::delete('public/service_project/' . $serviceProject->image_2);

            $fileNameImage2 = uniqid() . '.' . $data['image_2']->extension();
            $data['image_2']->storeAs('public/service_project', $fileNameImage2);
            $data['image_2'] = $fileNameImage2;
        }

        if (isset($data['image_3'])) {
            Storage::delete('public/service_project/' . $serviceProject->image_3);

            $fileNameImage3 = uniqid() . '.' . $data['image_3']->extension();
            $data['image_3']->storeAs('public/service_project', $fileNameImage3);
            $data['image_3'] = $fileNameImage3;
        }

        DB::beginTransaction();

        try {
            $serviceProject->update($data);
            DB::commit();
        } catch (\Exception $e) {
            Storage::delete('public/service_project/' . $fileNameImage1);
            Storage::delete('public/service_project/' . $fileNameImage2);
            Storage::delete('public/service_project/' . $fileNameImage3);

            DB::rollback();
            return false;
        }
    }

    public function destroy($id)
    {
        $serviceProject = $this->serviceProject->find($id);

        Storage::delete('public/service_project/' . $serviceProject->image_1);
        Storage::delete('public/service_project/' . $serviceProject->image_2);
        Storage::delete('public/service_project/' . $serviceProject->image_3);

        $serviceProject->delete();
    }
}
