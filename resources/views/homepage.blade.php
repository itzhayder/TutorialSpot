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
                @endphp
                <p>{{ $video['type'] }}</p>
                <p>more</p>
            </a>
            <div class="item-wrapper">
            @foreach ($video['videos'] as $v)
                @php
                    $url = explode("&list=", $v->url);
                    $url = str_replace("watch?v=", "embed/", $url[0]);  
                @endphp
                
                    <iframe class="item" src="{{ $url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>     
                
            @endforeach
            </div>
        </div>
    @endforeach

</div>


@endsection
