<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
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

}