<?php

namespace App\Interfaces;

interface EventInterface
{
    public function getSetting();
    public function settingNew($data);
    public function settingUpdate($data);
}
