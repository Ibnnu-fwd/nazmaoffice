<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\AboutPageSettingInterface;
use App\Interfaces\MilestoneInterface;
use App\Interfaces\TestimonialInterface;
use App\Interfaces\TeamInterface;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    private $milestones;
    private $teams;
    private $testimonials;
    private $aboutPageSetting;

    public function __construct(MilestoneInterface $milestones, TestimonialInterface $testimonials, TeamInterface $teams, AboutPageSettingInterface $aboutPageSetting)
    {
        $this->milestones       = $milestones;
        $this->teams            = $teams;
        $this->testimonials     = $testimonials;
        $this->aboutPageSetting = $aboutPageSetting;
    }
    /* 
        * This function is used to display the about page
    */
    public function about()
    {
        $milestones         = $this->milestones->getAll();
        $teams              = $this->teams->getAll();
        $testimonials       = $this->testimonials->getAll();
        $aboutPage          = $this->aboutPageSetting->get();
        $owners             = $teams->where('job', 'Direktur Utama');
        $opeationalManagers = $teams->where('job', 'Manajer Operasional');

        $topJob = array_merge($owners->toArray(), $opeationalManagers->toArray());

        return view('user.about.index', [
            'milestones'         => $milestones,
            'teams'              => $teams,
            'testimonials'       => $testimonials,
            'aboutPage'          => $aboutPage,
            'topJob'             => $topJob,
        ]);
    }
}
