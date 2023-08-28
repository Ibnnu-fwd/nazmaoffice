<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\BlogInterface;
use App\Interfaces\CompanyLandingSettingInterface;
use App\Interfaces\FaqInterface;
use App\Interfaces\PartnerInterface;
use App\Interfaces\ServiceCategoryInterface;
use App\Interfaces\ServiceInterface;
use App\Interfaces\ServiceProjectInterface;
use App\Interfaces\TestimonialInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $companyLandingSetting;
    private $service;
    private $serviceCategory;
    private $testimonial;
    private $blog;
    private $partner;
    private $serviceProject;
    private $faq;

    public function __construct(CompanyLandingSettingInterface $companyLandingSetting, ServiceInterface $service, ServiceCategoryInterface $serviceCategory, TestimonialInterface $testimonial, BlogInterface $blog, PartnerInterface $partner, ServiceProjectInterface $serviceProject, FaqInterface $faq)
    {
        $this->companyLandingSetting = $companyLandingSetting;
        $this->service               = $service;
        $this->serviceCategory       = $serviceCategory;
        $this->testimonial           = $testimonial;
        $this->blog                  = $blog;
        $this->partner               = $partner;
        $this->serviceProject        = $serviceProject;
        $this->faq                   = $faq;
    }

    public function index()
    {
        return view('user.home.index', [
            'companyLandingSetting' => $this->companyLandingSetting->get(),
            'services'              => $this->service->getAll(),
            'serviceCategories'     => $this->serviceCategory->getAll(),
            'testimonials'          => $this->testimonial->getAll(),
            'blogs'                 => $this->blog->getAll(),
            'partners'              => $this->partner->getAll(),
            'serviceProjects'       => $this->serviceProject->getAll(),
            'faqs'                  => $this->faq->getAll()
        ]);
    }

    /* 
        * This function is used to display the gallery page
    */
    public function gallery()
    {
        return view('user.gallery.index');
    }

    /* 
        * This function is used to display the blog page
    */
    public function blog()
    {
        return view('user.blog.index');
    }

    /* 
        * This function is used to display the blog detail page
    */
    public function blogDetail($slug)
    {
        return view('user.blog.detail', [
            'blog' => $this->blog->getBySlug($slug)
        ]);
    }

    /* 
        * This function is used to display the event page
    */
    public function event()
    {
        return view('user.event.index');
    }

    /* 
        * This function is used to display the event detail page
    */
    public function eventDetail($id)
    {
        return view('user.event.detail');
    }

    /* 
        * This function is used to display the service page
    */
    public function service()
    {
        return view('user.service.index');
    }

    /* 
        * This function is used to display the service detail page
    */
    public function serviceDetail($id)
    {
        return view('user.service.detail');
    }
}
