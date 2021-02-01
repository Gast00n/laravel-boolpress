@extends('layouts.app')

@section('content')
<div class="container">
        <h1 class="text-center text-danger mb-3 mt-3">Create New Post</h1>

        {{-- ERRORI --}}

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
            
        @endif


        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Post Title:</label>
                <input  class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="body">Post Content:</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Create Post">

        </form>
    </div>
</div>
@endsection
