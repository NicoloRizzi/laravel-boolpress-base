@extends('layouts.main')
    @section('main-content')
        <h1 class="mb-4">Create a new post</h1>
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" value="{{ old('title')}}" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="title">Body</label>
                <textarea class="form-control" name="body" id="body">
                    {{ old('body')}}"
                </textarea>
            </div>
            <input class="btn btn-primary mt-4" type="submit" value="Create Post">
        </form>

    @endsection