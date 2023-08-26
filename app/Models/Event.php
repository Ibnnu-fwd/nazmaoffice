<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    const EVENT_TYPES = [
        'seminar'     => 'Seminar',
        'workshop'    => 'Workshop',
        'training'    => 'Training',
        'webinar'     => 'Webinar',
        'sertifikasi' => 'Sertifikasi',
        'lainnya'     => 'Lainnya'
    ];

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
        'event_time',
        'price',
        'location',
        'discount',
        'is_active',
        'event_type'
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
