@extends('layouts.main')
    @section('main-content')
        <h1 class="mb-4">{{ $post->title }}</h1>
        <a class="btn btn-default btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit page</a>
        <p class="mt-5">{{ $post->body }}</p>

        <section class="warap-tags mt-5">
            <h4>Tags</h4>
            @forelse ($post->tags as $tag)
                <spa class="badge badge-primary badge-pill">{{ $tag->name}}</span>
            @empty
                <p>No actual tags for this post.</p>
            @endforelse
        </section>
    @endsection