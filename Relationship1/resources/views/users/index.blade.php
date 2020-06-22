@extends('layouts.main')
    @section('main-content')
    <h2>Blog Archive</h2>
        @foreach ($users as $user)
            <div class="user">
                <h3>{{ $user->name }}</h3>
                <img src="{{ $user->info['avatar'] }}" alt="{{ $user->name }}">
                <p><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></p>
                <div>{{ $user->info['address'] }}</div>
                <div>{{ $user->info['phone'] }}</div>
            </div>
            @if (! $loop->last)
                    <hr>
            @endif
        @endforeach
    @endsection