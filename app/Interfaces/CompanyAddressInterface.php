<?php

namespace App\Interfaces;

interface CompanyAddressInterface
{
    public function getAll();
    public function getById($id);
    public function store($data);
    public function update($data, $id);
    public function destroy($id);
}
