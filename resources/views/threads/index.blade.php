@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('forum.homepage') }}</div>
                <div class="panel-body">
                    <h2>{{ trans('forum.threads') }}</h2>
                    @include('threads.partials.thread_list')
                </div>
                <div class="panel-footer">
                    <div class="text-center">{{ $threads->links() }}</div>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection