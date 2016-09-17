@extends('layouts.app')

@section('content')
    <h2>{{ $thread->title }}</h2>
    <p>
        <small>author: {{ $thread->user->username }}</small>
        <small>date: {{ $thread->updated_at }}</small>
    </p>
    <p>
        {{ $thread->body }}
    </p>

    {!! link_to_route('home', 'Back To Homepage') !!}
@endsection