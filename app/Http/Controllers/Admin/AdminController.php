<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function blog()
    {
        return view('admin.blog');
    }

    public function crew()
    {
        return view('admin.crew');
    }

    public function project()
    {
        return view('admin.project');
    }
    
    public function trainers()
    {
        return view('admin.trainers');
    }

    public function testimony()
    {
        return view('admin.testimony');
    }

    public function partnership()
    {
        return view('admin.partnership');
    }

    public function gallery()
    {
        return view('admin.gallery');
    }

    public function sidebar()
    {
        return view('admin.sidebar');
    }

}