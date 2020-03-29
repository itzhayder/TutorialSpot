<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Video;
use App\Category;
use Illuminate\Support\Facades\Storage;

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

        $path = Storage::putFile('public/sourcecode', $request->file('source-code'));
        
 
        //Create video
        $video = new Video();

        $video->title = request('title');
        $video->url = request('url');
        $video->source_code = $path;
        $video->language = request('language');
        $video->categories_id = request('video-category');
        $video->sub_category = request('sub-category');

        $video->save();

        return redirect('/dashboard');
    }

    public function edit($id)
    {
        $video = Video::findorFail($id);
        $categories = Category:: all();
        return view('dashboard.edit', ['video' => $video, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {

        //Validate input form

        $this->validate($request, [
            'title' => 'required',
            'url' => 'required'
        ]);

        $video = Video::findorFail($id);


        //Deleting file from storage
        $sub = str_replace("public/sourcecode/","",$video->source_code );

        $video->title = request('title');
        $video->url = request('url');

        if(request('source-code') != ""){ 
            $path = $request->file('source-code')->store('public/sourcecode');
            $video->source_code = $path;

            Storage::delete($sub);
            unlink(storage_path('app/public/sourcecode/'.$sub));

            
        }

        $video->language = request('language');
        $video->categories_id = request('video-category');
        $video->sub_category = request('sub-category');

        $video->save();

      

        return redirect('/dashboard');
    }


    public function destroy($id)
    {
        $video = Video::findorFail($id);
        $video -> delete();
        $sub = str_replace("public/sourcecode/","",$video->source_code );

        // 1. possibility
        Storage::delete($sub);
        // 2. possibility
        unlink(storage_path('app/public/sourcecode/'.$sub));

        return redirect('/dashboard');
    }
}
