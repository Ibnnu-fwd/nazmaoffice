<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventSpeaker extends Model
{
    use HasFactory;

    public $table = 'event_speakers';
    protected $fillable = [
        'event_id',
        'name',
        'position',
        'image',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'youtube',
        'tiktok',
        'is_active'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
