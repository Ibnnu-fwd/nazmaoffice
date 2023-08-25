<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    public $table = 'service_categories';
    protected $fillable = [
        'title',
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
