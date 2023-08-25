<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\BlogInterface;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog;

    public function __construct(BlogInterface $blog)
    {
        $this->blog = $blog;
    }
    public function index()
    {
        return view('admin.blog.index', [
            'blogs' => $this->blog->getAll()
        ]);
    }
}
