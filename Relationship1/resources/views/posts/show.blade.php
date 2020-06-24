@extends('layouts.main')
    @section('main-content')
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>

        <section class="warap-tags mt-5">
            <h4>Tags</h4>
            @forelse ($post->tags as $tag)
                <spa class="badge badge-primary badge-pill">{{ $tag->name}}</span>
            @empty
                <p>No actual tags for this post.</p>
            @endforelse
        </section>
    @endsection