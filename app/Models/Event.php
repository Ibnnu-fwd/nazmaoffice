<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $table = 'events';
    protected $fillable = [
        'title',
        'description',
        'thumbnail',
        'hero_image',
        'phone',
        'study_case',
        'study_case_description',
        'capacity',
        'status',
        'start_date',
        'end_date',
        'event_date',
        'price',
        'location',
        'discount',
    ];

    public function eventRundowns()
    {
        return $this->hasMany(EventRundown::class, 'event_id', 'id');
    }

    public function eventSpeakers()
    {
        return $this->hasMany(EventSpeaker::class, 'event_id', 'id');
    }

    public function eventParticipants()
    {
        return $this->hasMany(EventParticipant::class, 'event_id', 'id');
    }
}
