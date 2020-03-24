
@extends('layouts.layout')

@push('styles')
<link href="{{ asset('/css/videoList.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="wrapper">

    <h2>{{ strtoupper($category) }} Videos</h2>

    <div class="row">  
        @foreach ($videos as $video)
            @php
                $url = explode("&list=", $video->url);
                $url = str_replace("watch?v=", "embed/", $url[0]);
                $youtubeVideoId = explode("embed/", $url)[1];
            @endphp

            <div class="video-item">
                <a href="{{ route('video.show', $video->id) }}" class="item">
                    <img src="https://img.youtube.com/vi/{{ $youtubeVideoId }}/mqdefault.jpg" alt="{{ $video->title }}">
                    <h4>{{ $video->title }}</h4>
                 </a>
            </div>
        @endforeach
    </div>

</div>
@endsection