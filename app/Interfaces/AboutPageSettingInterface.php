<?php

namespace App\Interfaces;

interface AboutPageSettingInterface
{
    public function get();
    public function store($data);
    public function update($data);
}
