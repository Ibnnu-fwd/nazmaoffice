<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAddress extends Model
{
    use HasFactory;

    public $table = 'company_addresses';
    protected $fillable = [
        'title',
        'address',
        'link'
    ];
}
