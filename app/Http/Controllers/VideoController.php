<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Category;

class VideoController extends Controller
{
    public function index() {
        $categories = Category::all();
        $videos = [];

        foreach($categories as $category) {
            $video = Video::where('categories_id', $category->id)->orderBy('created_at', 'desc')->get();

            if (count($video)) {
                error_log($category->id);
                $arr = [
                    'type' => $category->video_category,
                    'videos' => $video
                ];
                array_push($videos, $arr);
            }
        }

        return view('homepage', [ 'videos' => $videos ]);
    }

    public function category($category) {
        $categoryId = Category::where('video_category', $category)->get();
        $videos = Video::where('categories_id', $categoryId[0]->id)->orderBy('created_at', 'desc')->get();

        if ($videos->isEmpty()) {
            abort(404);
        }

        return view('videoList', [
            'videos' => $videos,
            'category' => $category]
        );
    }

    

    public function show($id)
    {
        $video = Video::findorFail($id);
        $category = $video->categories_id;
        $videos = Video::where('categories_id', $category)->get();
        return view('playback', [
            'video' => $video,
            'videos' => $videos
        ]);
    }
}
