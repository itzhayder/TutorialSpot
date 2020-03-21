@extends('layouts.layout')

@section('content')

<div class="container-playback">

	<div class="hero">
		<div class="playback">
			@php
                $url = explode("&list=", $video->url);
                $url = str_replace("watch?v=", "embed/", $url[0]);  
            @endphp
			<iframe src="{{ $url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h4>{{$video->title}}</h4>
		</div>

		<div class="source-code">
			<div class="source-head">
				<h3>Source Code</h3>
				<img class="source-imgs" src="/images/download.svg" alt="">
			</div>

			<div class="source-content">
				<p>function reverseString(str = '') { </br>
					const [head = '', ...tail] = str;</br>

					if (tail.length) {</br>
						return reverseString(tail) + head;</br>
					}</br>

					return head;</br>
					}</br>
				</p>
				<img class="source-imgs" src="/images/copy.png" alt="">
			</div>
		</div>  
	</div>

    <div class="more-videos">
		<h3>More Videos</h3>
		@foreach ($videos as $video)

			@php
                $url = explode("&list=", $video->url);
                $url = str_replace("watch?v=", "embed/", $url[0]);  
            @endphp

            <div class="video-image">
                <iframe src="{{ $url }}"></iframe>
				<p>Hello there</p>
                <h5></h5>
            </div>
			<!-- <div class="video-image">
				<div class="video">
					<img src="/images/more.jpg" alt="">
					
				</div>
			</div> -->
        @endforeach

    </div>      		
</div>




@endsection