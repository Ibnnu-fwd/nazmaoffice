<?php

namespace App\View\Components;

use App\Interfaces\CompanyLandingSettingInterface;
use Illuminate\View\Component;

class Footer extends Component
{
    public function render()
    {
        return view('components.footer');
    }
}
