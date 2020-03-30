@extends('layouts.app')

@section('content')

  <div class="dashboard-grid">
    <img src="/images/next.svg" alt="" class="toggle-button show-mobile">
    <div class="sidebar hide">
        <ul class="list">
            <li class="item">Add New</li>
            <li class="item">Category</li>
        </ul>
    </div>

    <div class="section">
      <form action="{{ route('dashboard.store') }}" method = "POST" enctype="multipart/form-data" id="form">
          @csrf
          <label for="title">Title</label>
          <input type="text" id="title" name="title">

          <label for="url">URL Link</label>
          <input type="text" id="url" name="url" >

          <label for="source-code">Source Code</label>
          <input type="file" name="source-code" id="source-code">

          <label for="language">Language</label>
          <select id="language" name="language">
            <option value="english">English</option>
            <option value="bangla">Bangla</option>
          </select>

          <label for="video-category">Video Category</label>
          <select id="video-category" name="video-category">
          @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category -> video_category}}</option>
            <!-- <option value="php">PHP</option>
            <option value="python">Python</option> -->
          @endforeach
          </select>

          <div class="button">
            <a href="/category/create">Add a custom video category</a>
          </div>

          <label for="sub-category">Sub Category</label>
          <select id="sub-category" name="sub-category">
            <option value="basics">Basics</option>
            <option value="framework">Framework</option>
            <option value="programming">Programming</option>
          </select>

          <div class="button">
            <input id="submit" type="submit" value="Create Post">
          </div>


      </form>

 
    </div>
</div>



@endsection


