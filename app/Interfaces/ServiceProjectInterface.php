<?php

namespace App\Interfaces;

interface ServiceProjectInterface
{
    public function getAll();
    public function getById($id);
    public function getByServiceid($id);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);

    public function countProject();
    public function groupByMonth($year);
}
