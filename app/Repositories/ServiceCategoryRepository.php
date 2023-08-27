<?php

namespace App\Repositories;

use App\Interfaces\ServiceCategoryInterface;
use App\Models\ServiceCategory;

class ServiceCategoryRepository implements ServiceCategoryInterface
{
    private $serviceCategory;

    public function __construct(ServiceCategory $serviceCategory)
    {
        $this->serviceCategory = $serviceCategory;
    }

    public function getAll()
    {
        return $this->serviceCategory->all();
    }

    public function getById($id)
    {
        return $this->serviceCategory->find($id);
    }

    public function store($data)
    {
        return $this->serviceCategory->create($data);
    }

    public function update($id, $data)
    {
        return $this->serviceCategory->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->serviceCategory->find($id)->delete();
    }
}
