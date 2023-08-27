<?php

namespace App\Interfaces;

interface ServiceInterface
{
    public function getAll();
    public function getById($id);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
    public function changeStatus($id, $status);
}
