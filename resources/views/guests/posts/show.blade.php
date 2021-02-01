@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center text-primary mb-3 mt-3">
        {{ $post->title }}
        <br>
        <small>Author: {{$username}}</small>
    </h1>

    <div class="text"> {{ $post->body }}</div>
    @if ($post->user_id == Auth::id()) 
        <a href="{{route('admin.posts.edit', Auth::id())}}" class="btn btn-primary">Edit</a>        
    @endif

</div>
@endsection