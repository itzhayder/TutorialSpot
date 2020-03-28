@extends('layouts.app')

@section('content')

  <div class="dashboard-grid">
    <img src="/images/next.svg" alt="" class="toggle-button show-mobile">
    <div class="sidebar hide">
        <ul class="list">
            <li class="item">Add New</li>
            <li class="item">English</li>
            <li class="item">Bangla</li>
            <li class="item">Category</li>
        </ul>
    </div>

     <h1>EDIT</h1>

    <div class="section">
      <form action="{{ route('dashboard.update', $video->id) }}" method = "POST">
          @csrf
          @method('PUT')
          <label for="title">Title</label>
          <input type="text" id="title" name="title" value="{{$video->title}}">

          <label for="url">URL Link</label>
          <input type="text" id="url" name="url" value="{{$video->url}}">

          <label for="source-code">Source Code</label>
          <input type="file" name="source-code" id="source-code" value="{{$video->source_code}}">

          <label for="language">Language</label>
          <select id="language" name="language" value="{{$video->language}}">
            <option value="english">English</option>
            <option value="bangla">Bangla</option>
          </select>

          <label for="video-category">Video Category</label>
          <select id="video-category" name="video-category">
          @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category -> video_category}}</option>
          @endforeach
          </select>

          <label for="sub-category">Sub Category</label>
          <select id="sub- category" name="sub-category">
            <option value="basics">Basics</option>
            <option value="framework">Framework</option>
            <option value="programming">Programming</option>
          </select>

          <div class="button">
            <input type="submit" value="Update Post">
          </div>


      </form>
    </div>
</div>



@endsection


