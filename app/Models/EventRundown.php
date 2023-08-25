<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRundown extends Model
{
    use HasFactory;

    public $table = 'event_rundowns';
    protected $fillable = [
        'event_id',
        'title',
        'description',
        'start_time',
        'end_time',
        'speaker',
        'is_active'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
