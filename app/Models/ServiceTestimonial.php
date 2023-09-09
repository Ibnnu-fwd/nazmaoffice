<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTestimonial extends Model
{
    use HasFactory;

    public $table = 'service_testimonials';
    protected $fillable = [
        'name',
        'image',
        'job',
        'description',
        'rating',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
