<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProject extends Model
{
    use HasFactory;

    public $table = 'service_projects';
    protected $fillable = [
        'service_id',
        'title',
        'taken_at',
        'due_at',
        'customer_name',
        'customer_phone',
        'status',
        'price',
        'image_1',
        'image_2',
        'image_3',
        'tag'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
