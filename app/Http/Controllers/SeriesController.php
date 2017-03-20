<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Series::paginate(32);

        return view(
            'series.index',
            compact('series')
        );
    }
}
