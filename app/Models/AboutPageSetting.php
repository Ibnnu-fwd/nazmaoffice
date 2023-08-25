<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPageSetting extends Model
{
    use HasFactory;

    public $table = 'about_page_setting';
    protected $fillable = [
        'slide_image_1',
        'slide_image_2',
        'slide_image_3',
    ];
}
