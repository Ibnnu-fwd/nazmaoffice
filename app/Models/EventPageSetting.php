<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPageSetting extends Model
{
    use HasFactory;

    public $table = 'event_page_settings';
    protected $fillable = [
        'header_title',
        'description',
        'hero_image',
    ];
}
