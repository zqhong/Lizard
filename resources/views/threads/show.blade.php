@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title thread-title">{{ $thread->title }}</h1>
            <div class="meta inline-block">
                <a href="">{{ $thread->user->username }}</a>
            </div>
        </div>
        <div class="panel-body">
            {{ $thread->body }}
        </div>
        <div class="panel-footer">
            <div class="pull-left">
                <a class="" href="" target="_blank" title="分享到微博">
                    <i class="fa fa-weibo"></i>
                </a>
                <a href="" class="" target="_blank" title="分享到 Twitter">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="" class="" target="_blank" title="分享到 Facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="" class="" target="_blank" title="分享到 Google Plus">
                    <i class="fa fa-google-plus"></i>
                </a>
            </div>
            <div class="pull-right">
                @if(!empty($thread->tags))
                    <small>tags:
                        @foreach($thread->tags as $tag)
                            {{ $tag->name }}
                        @endforeach
                    </small>
                @endif
            </div>
        </div>
    </div>
@endsection