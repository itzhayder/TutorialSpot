
@extends('layouts.app')

@section('content')

<div>
    <form action="/category" method="POST">
    @csrf
        <label for="custom-category">Custom</label>
        <input type="text" id="custom-category" name="custom-category" >
        <div class="button">
            <input type="submit" value="Update">
        </div>
    </form>
</div>

@endsection