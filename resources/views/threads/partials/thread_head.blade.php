<div class="infos panel-heading">
    <div class="pull-right avatar">
        <a href="">
            {{ Form::image($thread->user->avatar_url, 'avatar', ['class' => 'media-object img-thumbnail avatar-64']) }}
        </a>
    </div>
    <h1 class="panel-title thread-title">{{ $thread->title }}</h1>
    <div class="likes inline-block">
        <a href="javascript:void(0);" data-action="like" data-type="Thread" data-url=""
           title="{{ trans('forum.unlike') }}" class="fa fa-chevron-up likeable like" data-id="5"> 0</a>
        <a href="javascript:void(0);" data-action="unlike" data-type="Thread" data-url=""
           title="{{ trans('forum.like') }}" class="fa fa-chevron-down likeable like" data-id="5"></a>
    </div>
    <div class="meta inline-block">
        <a href="">{{ $thread->user->nickname }}</a>
        • 于 <abbr title="{{ $thread->created_at }}" class="timeago">{{ $thread->created_at }}</abbr>
        • 回复 <a href="">{{ $thread->lastReplyUser->nickname }}</a> 于 <abbr title="{{ $thread->updated_at }}" class="timeago">{{ $thread->updated_at }}</abbr>
        • {{ $thread->view_count }}{{ trans('forum.read') }}
    </div>
    <div class="clearfix"></div>
</div>