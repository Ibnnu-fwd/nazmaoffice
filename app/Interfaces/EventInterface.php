<?php

namespace App\Interfaces;

interface EventInterface
{
    public function getWithPaginate($limit);
    public function store($data);
    public function getSetting();
    public function settingNew($data);
    public function settingUpdate($data);
}
