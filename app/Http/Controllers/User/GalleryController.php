<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\GalleryInterface;

class GalleryController extends Controller
{
    private $gallery;

    public function __construct(GalleryInterface $gallery)
    {
        $this->gallery = $gallery;
    }

    public function index()
    {
        // Retrieve all galleries
        $galleries = $this->gallery->getAll();

        // Group galleries by year
        $groupedGalleries = $galleries->groupBy(function ($item) {
            return $item->created_at->format('Y'); // Group items by year
        });

        return view('user.gallery.index', [
            'galleries' => $galleries,
            'groupedGalleries' => $groupedGalleries
        ]);
    }
}