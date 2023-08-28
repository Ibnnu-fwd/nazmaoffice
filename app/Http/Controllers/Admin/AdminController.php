<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ServiceProjectInterface;
use App\Interfaces\TestimonialInterface;
use App\Interfaces\TeamInterface;
use App\Interfaces\PartnerInterface;
use App\Interfaces\BlogInterface;
use App\Interfaces\GalleryInterface;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $serviceProject;
    private $testimonial;
    private $team;
    private $partner;
    private $blog;
    private $gallery;

    public function __construct(ServiceProjectInterface $serviceProject, TestimonialInterface $testimonial, TeamInterface $team, PartnerInterface $partner, BlogInterface $blog, GalleryInterface $gallery) {
        $this->serviceProject = $serviceProject;
        $this->testimonial = $testimonial;
        $this->team = $team;
        $this->partner = $partner;
        $this->blog = $blog;
        $this->gallery = $gallery;
    }
    
    public function index()
    {
        $countOfServiceProject = $this->serviceProject->countProject();
        $countOfTestimonial = $this->testimonial->countTestimonial();
        $countOfTeam = $this->team->countTeam();
        $countOfPartner = $this->partner->countPartner();
        $countOfBlog = $this->blog->countBlog();
        $countOfGallery = $this->gallery->countGallery();

        return view('admin.home.index', [
        'countOfServiceProject' => $countOfServiceProject,
            'countOfTestimonial' => $countOfTestimonial,
            'countOfTeam' => $countOfTeam,
            'countOfPartner' => $countOfPartner,
            'countOfBlog' => $countOfBlog,
            'countOfGallery' => $countOfGallery
    ]);
    }
    

    public function login()
    {
        return view('admin.login');
    }

    public function blog()
    {
        return view('admin.blog.index');
    }

    public function crew()
    {
        return view('admin.crew.index');
    }

    public function project()
    {
        return view('admin.project.index');
    }
    
    public function trainers()
    {
        return view('admin.trainers.index');
    }

    public function testimony()
    {
        return view('admin.testimony.index');
    }

    public function partnership()
    {
        return view('admin.partnership..index');
    }

    public function gallery()
    {
        return view('admin.gallery.index');
    }

    public function sidebar()
    {
        return view('admin.sidebar');
    }

    public function event()
    {
        return view('admin.event.index');
    }

}