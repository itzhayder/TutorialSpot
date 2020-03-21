<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

use App\Video;

class VideoController extends Controller
{
    public function index() {
        $categories = Video::select('video_category')->distinct()->get();

        $videos = [];
        
        foreach($categories as $category) {
            $video = Video::where('video_category', $category->video_category)->get();
            $arr = [
                'type' => $category->video_category,
                'videos' => $video
            ];
            array_push($videos, $arr);
            // dd($videos[0]);
        }

        return view('homepage', [
            'category' => $categories,
            'videos' => $videos
        ]);
    }

    public function category($category) {

        $videos = Video::where('video_category', $category)->get();

        if ($videos->isEmpty()) {
            abort(404);
        }

        return view('videoList', [
            'videos' => $videos,
            'category' => $category]
        )
    }


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
