@extends('layouts.app')

@section('content')
    <h2>Threads</h2>
    @foreach($threads as $thread)
        <h3>{!! link_to_route('thread.show', $thread->title, [$thread->slug]) !!}</h3>
        <p>
        <div>thread_id: {{ $thread->id }}</div>
        <div>author: {{ $thread->user->nickname }}</div>
        <div>node: {{ $thread->node->name }}</div>
        <div>last reply user: {{ $thread->lastReplyUser->username }}</div>
        <div>
            tags:
            @foreach($thread->tags() as $tag)
                <span>{{ $tag->name }}</span>
            @endforeach
        </div>
        </p>
        <p>{{ $thread->body }}</p>
        <hr>
    @endforeach
@endsection