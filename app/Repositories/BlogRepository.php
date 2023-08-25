<?php

namespace App\Repositories;

use App\Interfaces\BlogInterface;
use App\Models\Blog;

class BlogRepository implements BlogInterface
{
    private $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function getAll()
    {
        return $this->blog->orderBy('id', 'desc')->get();
    }
}
