@extends('layouts.app')

@section('content')

<div class="dashboard-grid">
    <img src="/images/next.svg" alt="" class="toggle-button show-mobile">
    <div class="sidebar hide">
        <ul class="list">
            <li class="item"><a href="/dashboard/create">Add New</a></li>
            <li class="item">Category</li>
        </ul>
    </div>

    <div class="section">
    <table>
        <tr>
            <th>Sl no.</th>
            <th>Title</th>
            <th>URL</th>
            <th>Source Code</th>
            <th>Language</th>
            <th>Video Category</th>
            <th>Sub Category</th>  
        </tr>
        
        @if(count($videos) >0)
            @foreach($videos as $video)
            <tr>
                <td>{{$video -> id}}</td>
                <td>{{$video -> title}}</td>
                <td>{{$video -> url}}</td>
                <td>{{$video -> source_code}}</td>
                <td>{{$video -> language}}</td>
                <td>{{$video -> video_category}}</td>
                <td>{{$video -> sub_category}}</td> 

                <td><a href ="/dashboard/edit/{{$video->id}}"><img src="images/refresh.svg" alt="edit post"></a></td>
                <td><a href ="/dashboard/{{$video->id}}"><img src="images/trash.svg" alt="delete post"></a></td>

            </tr>
            @endforeach
        @else
            <p>No videos uploaded yet!!!</p>
        @endif

     
    </table>
    </div>
</div>

@endsection


