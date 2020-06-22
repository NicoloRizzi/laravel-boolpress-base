@extends('layouts.main')
    @section('main-content')
    <h2>Blog Archive</h2>
        @foreach ($users as $user)
            <div class="user">
                <h3>{{ $user->name }}</h3>
                <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                @dump($user->info)
            </div>
            @if (! $loop->last)
                    <hr>
            @endif
        @endforeach
    @endsection