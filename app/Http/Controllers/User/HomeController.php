<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /* 
        * This function is used to display the home page
    */
    public function index()
    {
        return view('user.home.index');
    }

    /* 
        * This function is used to display the about page
    */
    public function about()
    {
        return view('user.about.index');
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
    public function blogDetail($id)
    {
        return view('user.blog.detail');
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
