@extends('layouts.app')

@section('content')
<div class="container">
        <h1 class="text-center text-primary mb-3 mt-3">Blog</h1>
        @if ($posts->isEmpty())
            <p>No post has been created yet.</p>
        @else
            {{-- POST TABLE --}}
            @foreach ($posts as $post)
                <blockquote class="blockquote">
                    <h2>{{ $post->title }}</h2>
                    <footer class="blockquote-footer">By {{$post->user->name}} <em>{{ $post->updated_at->diffForHumans() }}</em> - <cite title="Read More"><a href="{{ route('posts.show', $post->slug) }}">Read More</a></cite></footer>
                </blockquote>
            @endforeach
        @endif
    </div>
</div>
@endsection
