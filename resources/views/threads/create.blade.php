@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('forum.create_new_thread') }}</div>
                <div class="panel-body">
                    @if(isset($thread))
                        {!! Form::model($thread, ['route' => 'thread.store', 'method' => 'POST']) !!}
                    @else
                        {!! Form::open(['route' => 'thread.store', 'method' => 'POST']) !!}
                    @endif
                    <div class="form-group">
                        {!! Form::text('thread[title]', '', ['class' => 'form-control', 'placeholder' => trans('forum.title')]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('thread[body]', '', ['class' => 'form-control', 'placeholder' => trans('forum.body')]) !!}
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="thread[node_id]">
                            <option value="" disabled selected>{{ trans('forum.select_node') }}</option>
                            @foreach($sections as $section)
                                <optgroup label="{{ $section->name }}">
                                    @foreach($nodes as $node)
                                        @if($node->section_id == $section->id)
                                            <option value="{{ $node->id }}">{{ $node->name }}</option>
                                        @endif
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control select2-tags" multiple="multiple" name="thread[tags][]"></select>
                    </div>
                    <button class="btn btn-default" type="submit">{{ trans('forum.submit') }}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
