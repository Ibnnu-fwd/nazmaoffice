<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachingSchedule extends Model
{
    use HasFactory;

    public $table = 'coaching_schedules';

    protected $fillable = [
        'title',
        'year',
        'file',
    ];
}
