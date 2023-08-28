<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public $table = 'blogs';
    protected $fillable = [
        'blog_category_id',
        'thumbnail',
        'main_image',
        'author_name',
        'author_profile_picture',
        'title',
        'published_date',
        'content',
        'tag',
        'meta_description',
        'meta_keyword',
        'slug',
    ];

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
}
