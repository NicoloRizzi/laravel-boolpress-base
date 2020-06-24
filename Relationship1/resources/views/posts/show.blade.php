@extends('layouts.main')
    @section('main-content')
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    @endsection