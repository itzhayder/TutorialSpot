@extends('layouts.layout')

@push('styles')
<link href="{{ asset('/css/videoList.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="wrapper">

    <h2>PHP Videos</h2>

    <div class="row">
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            <h6>This is title by someone</h6>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            <h6>This is title build it</h6>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            <h6>This is title</h6>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            <h6>This is title</h6>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            <h6>This is title</h6>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            <h6>This is title</h6>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            <h6>This is title</h6>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            <h6>This is title</h6>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            <h6>This is title</h6>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            <h6>This is title</h6>
        </div>
    </div>

</div>
@endsection