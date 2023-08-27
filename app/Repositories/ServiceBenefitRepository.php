<?php

namespace App\Repositories;

use App\Interfaces\ServiceBenefitInterface;
use App\Models\Service;
use App\Models\ServiceBenefit;

class ServiceBenefitRepository implements ServiceBenefitInterface
{
    private $serviceBenefit;
    private $service;

    public function __construct(ServiceBenefit $serviceBenefit, Service $service)
    {
        $this->serviceBenefit = $serviceBenefit;
        $this->service        = $service;
    }

    public function getByServiceId($serviceId)
    {
        return $this->serviceBenefit->where('service_id', $serviceId)->get();
    }

    public function getById($id)
    {
        return $this->serviceBenefit->findOrFail($id);
    }

    public function store($serviceId, $data)
    {
        return $this->serviceBenefit->create(array_merge($data, ['service_id' => $serviceId]));
    }

    public function update($id, $data)
    {
        return $this->serviceBenefit->findOrFail($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->serviceBenefit->findOrFail($id)->delete();
    }
}
