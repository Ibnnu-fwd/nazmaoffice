<?php

namespace App\Interfaces;

interface CompanyLandingSettingInterface
{
    public function get();
    public function store($data);
    public function update($data);
}
