<?php

namespace App\Interfaces;

interface PartnerInterface
{
    public function getAll();
    public function getAllWithPagination();
    public function store($data);
    public function update($id, $data);
    public function getById($id);
    public function destroy($id);

    public function countPartner();
}