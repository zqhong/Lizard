<div class="reply-box">
    <div class="panel panel-default">
        <div class="panel-heading">{{ trans('forum.add_reply') }}</div>
        <div class="panel-body">
            @if(Auth::check())

                {!! Form::open(['route' => 'reply.store']) !!}
                <div class="form-group">
                    {!! Form::textarea('reply[body]', null, ['class' => 'form-control', 'rows' => 5]) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit(trans('forum.reply'), ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::hidden('reply[thread_id]', $thread->id) !!}
                {!! Form::close() !!}
            @else
                <div style="padding: 20px;">
                    {!! trans('forum.need_login') !!}
                </div>
            @endif
        </div>
    </div>
</div>