@extends('layouts.app')

@section('content')
    <h2>{{ $thread->title }}</h2>
    <p>
        <div>author: {{ $thread->user->username }}</div>
        <div>date: {{ $thread->updated_at }}</div>
        <div>section: {{ $thread->section->name }}</div>
        <div>node: {{ $thread->node->name }}</div>
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