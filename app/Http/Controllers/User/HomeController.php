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
        return view('user.home');
    }

    /* 
        * This function is used to display the about page
    */
    public function about()
    {
        return view('user.about');
    }

    /* 
        * This function is used to display the gallery page
    */
    public function gallery()
    {
        return view('user.gallery');
    }

    /* 
        * This function is used to display the blog page
    */
    public function blog()
    {
        return view('user.blog');
    }

    /* 
        * This function is used to display the blog detail page
    */
    public function blogDetail($id)
    {
        return view('blog.detail');
    }
}
