<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * @param $series
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($series)
    {
        $videos = $this->videos($series);

        $episodeList = $videos->get();
        $video = $videos->first();

        $video->views = $video->views + 1;
        $video->save();

        return view(
            'videos.index',
            compact(
                'episodeList',
                'video'
            )
        );
    }

    /**
     * @param $series
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($series, $id)
    {
        $videos = $this->videos($series);

        $episodeList = $videos->get();
        $video = $videos->where('id', $id)->first();

        $video->views = $video->views + 1;
        $video->save();

        return view(
            'videos.index',
            compact(
                'episodeList',
                'video'
            )
        );
    }

    /**
     * @param $series
     * @return mixed
     */
    public function videos($series)
    {
        return Video::where('series_id', $series)->orderBy('episode', 'asc');
    }


}
