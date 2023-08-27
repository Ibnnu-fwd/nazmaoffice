<?php

namespace App\Interfaces;

interface ServiceBenefitInterface
{
    public function getByServiceId($serviceId);
    public function getById($id);
    public function store($serviceId, $data);
    public function update($id, $data);
    public function destroy($id);
}
