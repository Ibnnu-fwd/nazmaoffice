<?php

namespace App\Interfaces;

interface EventSylabusInterface
{
    public function getByEventId($id);
    public function getById($id);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
}
