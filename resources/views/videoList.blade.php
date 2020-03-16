
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
            @endphp

            <div class="video-item">
                <iframe src="{{ $url }}" allowfullscreen></iframe>
                <h5>{{ $video->title }}</h5>
            </div>
        @endforeach
    </div>

</div>
@endsection