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
				<a href ="/playback/{{$video->id}}/download"><img class="source-imgs" src="/images/download.svg" alt=""></a>
			</div>

		

			<div class="source-content">
					@php
						$sub = str_replace("public/sourcecode/","",$video->source_code );
						$myfile = fopen("storage/sourcecode/$sub", "r") or die("Unable to open file!");
						$content =  fread($myfile,2048);
						// echo nl2br($content);
						fclose($myfile);
					@endphp
				<pre id="foo" value="{{$content}}">{{$content}}</pre> 
				<p class="clipboard">Copied!</p>

				<button class='btn' data-clipboard-target="#foo">
						<img src="/images/copy.png" alt="Copy to clipboard">
				</button>
				
			</div>
		</div>  
	</div>

    <div class="more-videos">
		<h3>More Videos</h3>
		@foreach ($videos as $video)

			@php
				$url = explode("&list=", $video->url);
				$url = str_replace("watch?v=", "embed/", $url[0]);
				$youtubeVideoId = explode("embed/", $url)[1]; 
            @endphp

			<!-- https://www.youtube.com/watch?v=46cXFUzR9XM
			https://www.youtube.com/watch?v=JGwWNGJdvx8&list=PLMC9KNkIncKtPzgY-5rmhvj7fax8fdxoj -->
			

            <div class="video-image">
				<a href="{{ route('video.show', $video->id) }}" class="item">
					<img src="https://img.youtube.com/vi/{{ $youtubeVideoId }}/mqdefault.jpg" alt="{{ $video->title }}">
					<h4>{{ $video->title }}</h4>
				</a>
            </div>
			
        @endforeach

    </div>      		
</div>





@endsection



