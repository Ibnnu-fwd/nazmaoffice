<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $table = 'services';
    protected $fillable = [
        'service_category_id',
        'icon',
        'icon_color',
        'title',
        'description',
        'phone',
        'hero_image',
        'benefit_image',
        'teaser_link',
        'is_active'
    ];

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function serviceBenefits()
    {
        return $this->hasMany(ServiceBenefit::class);
    }

    public function serviceProjects()
    {
        return $this->hasMany(ServiceProject::class);
    }

    public function subServices()
    {
        return $this->hasMany(SubService::class);
    }
}
