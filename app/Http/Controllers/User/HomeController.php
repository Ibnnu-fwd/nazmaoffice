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
}
