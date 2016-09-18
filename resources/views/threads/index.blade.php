@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('forum.homepage') }}</div>
                <div class="panel-body">
                    <h2>{{ trans('forum.threads') }}</h2>
                    @foreach($threads as $thread)
                        <h3>{!! link_to_route('thread.show', $thread->title, [$thread->id]) !!}</h3>
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
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Lizard</div>
                <div class="panel-body">
                    @if(Auth::guest())
                        {{ trans('forum.required_login') }}
                        {{ link_to_route('login', trans('forum.login')) }}
                    @else
                        {{ trans('forum.welcome', ['username' => Auth::user()->username]) }}
                        {{ link_to_route('logout', trans('forum.logout')) }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection