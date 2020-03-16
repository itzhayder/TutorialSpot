<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function index() {
        return view('homepage');
    }

    public function show() {
        return view('playback');
    }

    public function category($category) {

        $videos = Video::where('video_category', $category)->get();

        if ($videos->isEmpty()) {
            abort(404);
        }

        return view('videoList', [
            'videos' => $videos,
            'category' => $category
        ]);
    }
}
