@extends('layouts.main')
    @section('main-content')
        @if(session('post-deleted'))
            <div class="alert alert-success">
                <p>The following post has been deleted: {{ session('post-deleted') }}</p>
            </div>
        @endif
    <h2>Blog Archive</h2>
    @foreach ($posts as $post)
        <article class="mb-3">
        <h2>{{ $post->title }}</h2>
        <h4>{{ $post->user->name }}</h4>
        <h4>Created: {{ $post->created_at }}, Last Modified: {{ $post->updated_at }}</h4>
        <p>{{ $post->body }}</p>
        <a href="{{ route('posts.show', $post->slug) }}">Read more</a>
        @if ($loop->last)
            <hr>
        @endif
        </article>
    @endforeach
    <div class="wrap-pagination mt-5 d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
    @endsection