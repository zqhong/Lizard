@extends('layouts.app')

@section('content')
        <!-- Thread detail -->
        <div class="thread panel panel-default">
            @include('threads.partials.thread_head')
            <div class="panel-body content-body">
                <p>{{ $thread->body }}</p>
            </div>
            @include('threads.partials.thread_operate')
        </div>

<!-- Reply list -->
@include('threads.partials.reply_list')

<!-- Reply box -->
@include('threads.partials.reply_box')

@endsection