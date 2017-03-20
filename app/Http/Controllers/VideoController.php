<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index($series)
    {
        $videos = Video::where('series_id', $series)->get();


    }
}
