<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    use HasFactory;

    public $table = 'sub_services';
    protected $fillable = [
        'service_id',
        'title',
        'description'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
