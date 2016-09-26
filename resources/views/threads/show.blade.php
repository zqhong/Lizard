@extends('layouts.app')

@section('content')
    <h2>{{ $thread->title }}</h2>
    <p>
        <small>author: {{ $thread->user->username }}</small>
        <small>date: {{ $thread->updated_at }}</small>
        @if(!empty($thread->tags))
            <small>tags:
                @foreach($thread->tags as $tag)
                    {{ $tag->name }}
                @endforeach
            </small>
        @endif
    </p>
    <p>
        {{ $thread->body }}
    </p>

    {!! link_to_route('home', 'Back To Homepage') !!}
@endsection