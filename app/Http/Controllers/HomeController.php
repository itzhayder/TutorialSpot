<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Video;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $videos = Video:: all();
        $categories = Category:: all();
        
        return view('dashboard', ['videos' => $videos, 'categories' => $categories]);
    }

    public function create()
    {
        $categories = Category:: all();
        return view('dashboard.create',['categories' => $categories]);
    }

    public function store(Request $request)
    {

        //Validate input form

        $this->validate($request, [
            'title' => 'required',
            'url' => 'required',
            'source-code' => 'required',

        ]);
        
 
        //Create video
        $video = new Video();

        $video->title = request('title');
        $video->url = request('url');
        $video->source_code = request('source-code');
        $video->language = request('language');
        $video->categories_id = request('video-category');
        $video->sub_category = request('sub-category');

        $video->save();

        return redirect('/dashboard');
    }

    public function edit($id)
    {
        $video = Video::findorFail($id);
        return view('dashboard.edit', ['video' => $video]);
    }
    public function update(Request $request, $id)
    {
        
        //Validate input form

        $this->validate($request, [
            'title' => 'required',
            'url' => 'required',
            'source-code' => 'required',

        ]);

        $video = Video::findorFail($id);

        $video->title = request('title');
        $video->url = request('url');
        $video->source_code = request('source-code');
        $video->language = request('language');
        $video->video_category = request('video-category');
        $video->sub_category = request('sub-category');

        $video->save();

        return redirect('/dashboard');
    }


    public function destroy($id)
    {
        $video = Video::findorFail($id);
        $video -> delete();

        return redirect('/dashboard');
    }
}
