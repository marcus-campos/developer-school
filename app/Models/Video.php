<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title',
        'video',
        'episode',
        'like',
        'series_id'
    ];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }
}
