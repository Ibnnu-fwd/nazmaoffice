<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\MilestoneInterface;
use App\Interfaces\TestimonialInterface;
use App\Interfaces\TeamInterface;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    private $milestones;
    private $teams;
    private $testimonials;

    public function __construct(MilestoneInterface $milestones, TestimonialInterface $testimonials, TeamInterface $teams){
        $this->milestones = $milestones;
        $this->teams = $teams;
        $this->testimonials = $testimonials;
    }
    /* 
        * This function is used to display the about page
    */
    public function about()
    {
        $milestones = $this->milestones->getAll();
        $teams = $this->teams->getAll();
        $testimonials = $this->testimonials->getAll();

        return view('user.about.index', [
            'milestones' => $milestones,
            'teams' => $teams,
            'testimonials' => $testimonials
        ]);
    }

}
