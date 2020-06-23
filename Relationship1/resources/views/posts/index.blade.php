@extends('layouts.main')
    @section('main-content')
    <h2>Blog Archive</h2>
    @foreach ($posts as $post)
        <article>
        <h2>{{ $post->title }}</h2>
        <h4>{{ $post->user->name }}</h4>
        <h4>Created: {{ $post->created_at }}, Last Modified: {{ $post->updated_at }}</h4>
        <p>{{ $post->body }}</p>
        @if ($loop->last)
            <hr>
        @endif
        </article>
    @endforeach
    <h4>Naviagtion</h4>
    {{ $posts->links() }}
    @endsection