<?php

namespace App\Interfaces;

interface ServiceTestimonialInterface
{
    public function getByServiceId($serviceId);
    public function getById($id);
    public function store($serviceId, $data);
    public function update($id, $data);
    public function destroy($id);
}
