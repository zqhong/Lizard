<ul class="list-group row thread-list">
    @foreach($threads as $thread)
        <li class="list-group-item media " style="margin-top: 0px;">
            <a class="pull-right" href="#"><span
                        class="badge badge-reply-count"> {{ trans(count($thread->replies)) }} </span></a>
            <div class="avatar pull-left">
                <a href="#">
                    {!! Form::image($thread->user->avatar_url, 'avatar', ['class' => 'media-object img-thumbnail avatar-48']) !!}
                </a>
            </div>
            <div class="infos">
                <div class="media-heading">{!! link_to_route('thread.show', $thread->title, [$thread->id]) !!}</div>
                <div class="media-body meta">
                    <a href="#" title="Default" 1="">{{ $thread->node->name }}</a>
                    <span> • </span>
                    <span>回复</span>
                    <a href="#">{{ $thread->user->nickname }}</a>
                    <span> • </span>
            <span class="timeago " data-toggle="tooltip" data-placement="top" title=""
                  data-original-title="2016-10-03 10:13:51">{{ $thread->updated_at }}</span>
                </div>
            </div>
        </li>
    @endforeach
</ul>