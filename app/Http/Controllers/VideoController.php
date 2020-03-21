<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Video;

class VideoController extends Controller
{
    public function show($id)
    {
        $video = Video::findorFail($id);
        $category = $video->video_category;
        $videos = Video::where('video_category', $category)->get();
        return view('playback', [
            'video' => $video,
            'videos' => $videos
        ]);
    }
}
