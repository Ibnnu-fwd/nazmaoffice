<?php

namespace App\Repositories;

use App\Interfaces\CompanyAddressInterface;
use App\Models\CompanyAddress;

class CompanyAddressRepository implements CompanyAddressInterface
{
    private $companyAddress;

    public function __construct(CompanyAddress $companyAddress)
    {
        $this->companyAddress = $companyAddress;
    }

    public function getAll()
    {
        return $this->companyAddress->all();
    }

    public function getById($id)
    {
        return $this->companyAddress->find($id);
    }

    public function store($data)
    {
        return $this->companyAddress->create($data);
    }

    public function update($data, $id)
    {
        return $this->companyAddress->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->companyAddress->find($id)->delete();
    }
}
