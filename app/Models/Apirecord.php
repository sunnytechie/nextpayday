<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apirecord extends Model
{
    protected $fillable = [
        'api',
        'description',
        'auth',
        'https',
        'cors',
        'link',
        'category',
    ];

    use HasFactory;
}
