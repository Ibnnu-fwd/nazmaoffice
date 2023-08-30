<?php

namespace App\Repositories;

use App\Interfaces\SubServiceInterface;
use App\Models\SubService;

class SubServiceRepository implements SubServiceInterface
{
    private $subService;

    public function __construct(SubService $subService)
    {
        $this->subService = $subService;
    }

    public function getAll($service_id)
    {
        return $this->subService->where('service_id', $service_id)->get();
    }

    public function getById($id)
    {
        return $this->subService->find($id);
    }

    public function store($data)
    {
        return $this->subService->create($data);
    }

    public function update($id, $data)
    {
        return $this->subService->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->subService->find($id)->delete();
    }
}
