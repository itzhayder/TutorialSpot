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


        <tr>
            <td>1</td>
            <td>Loops in Java</td>
            <td>https://www.w3.org/Style/Examples/007/evenodd.en.html</td>
            <td></td>
            <td>English</td>
            <td>Java</td>
            <td>Programming</td>

            <td><img src="images/refresh.svg" alt=""></td>
            <td><img src="images/trash.svg" alt=""></td>

        </tr>
    </table>
    </div>
</div>

@endsection


