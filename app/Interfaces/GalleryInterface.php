<?php

namespace App\Interfaces;

interface GalleryInterface
{
    public function getAll();
    public function store($data);
    public function update($data, $id);
    public function destroy($id);
    public function getById($id);
}
