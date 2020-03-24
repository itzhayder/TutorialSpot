@extends('layouts.layout')

@push('styles')
    <link href="{{ asset('/css/homepage.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="wrapper"> 

    @foreach ($videos as $video)
        <div class="box">
            <a href="{{ route('video.category', $video['type']) }}" class="item-title">
                @php
                    if (strcasecmp("javascript", $video['type']) == 0) {
                        $video['type'] = "JS";
                    }
                    $count = 0;
                @endphp
                <p>{{ $video['type'] }}</p>
                <p>more</p>
            </a>
            <div class="item-wrapper">
            @foreach ($video['videos'] as $v)
                @php
                    if ($count == 4) {
                        break;
                    }
                    $url = explode("&list=", $v->url);
                    $url = str_replace("watch?v=", "embed/", $url[0]);
                    $youtubeVideoId = explode("embed/", $url)[1];
                    $count++;
                @endphp
                    <a href="{{ route('video.show', $v->id) }}" class="item">
                        <img src="https://img.youtube.com/vi/{{ $youtubeVideoId }}/0.jpg" alt="{{ $v->title }}">
                        <h4>{{ $v->title }}</h4>
                    </a>
            @endforeach
            </div>
        </div>
    @endforeach

</div>

@endsection