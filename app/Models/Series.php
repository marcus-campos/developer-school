<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $fillable = [
        'title',
        'image',
        'like',
        'objective',
        'requirements',
        'description',
        'user_id'
    ];
}
