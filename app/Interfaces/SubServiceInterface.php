<?php

namespace App\Interfaces;

interface SubServiceInterface
{
    public function getAll($service_id);
    public function getById($id);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
}
