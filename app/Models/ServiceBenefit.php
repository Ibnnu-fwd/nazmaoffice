<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBenefit extends Model
{
    use HasFactory;

    public $table = 'service_benefits';
    protected $fillable = [
        'title',
        'icon',
        'description',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
