<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    public $table = 'blog_categories';
    protected $fillable = [
        'title',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'blog_category_id');
    }
}
