<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    const STATUS_PENDING  = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';

    use HasFactory;

    public    $table    = 'event_participants';
    protected $fillable = [
        'event_id',
        'name',
        'email',
        'phone',
        'company',
        'job_title',
        'status',
        'is_active'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
