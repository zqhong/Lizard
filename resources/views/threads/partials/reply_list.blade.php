<div class="replies panel panel-default list-panel replies-index">
    <div class="panel-heading">
        <div class="total">{{ trans('forum.reply_total_count') }}: <b>{{ count($thread->replies) }}</b></div>
    </div>

    <div class="panel-body">
        @if(count($thread->replies) == 0)
            <div class="empty-block">{{ trans('forum.empty_reply') }}</div>
        @else
            <ul class="list-group row">
                @foreach($thread->replies as $index => $reply)
                    <li class="list-group-item media " id="reply4">
                        <div class="avatar pull-left">
                            <a href="">
                                {!! Form::image($reply->user->avatar_url, 'avatar', ['style' => 'width:48px;height:48px;', 'class' => 'media-object img-thumbnail avatar']) !!}
                            </a>
                        </div>
                        <div class="infos">
                            <div class="media-heading meta">
                                <a href="" title="admin" class="remove-padding-left author">admin</a>
                                <abbr class="timeago" title="{{ $reply->created_at }}">{{ $reply->created_at }}</abbr>
                                <a name="reply1" class="anchor" href="#reply1" aria-hidden="true">#{{ $index+1 }}</a>
        <span class="opts pull-right">
          <span class="hideable">
                        <a class="fa fa-trash-o" id="reply-delete-4" data-method="delete"
                           data-url="" title="删除" style="cursor:pointer;">
                            <form action="" method="POST" style="display:none">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="aiSITSQbBWtpwITNYZLEcfikz9PMKth31XH6wzSN">
                            </form>
                        </a>
                      <a class="fa fa-reply btn-reply2reply" data-floor="1" data-username="admin" href="#"
                         title="回复 admin"></a>
          </span>
          <a class="likeable fa fa-thumbs-o-up" data-action="like" data-url="" data-type="Reply"
             data-id="4" data-count="0" href="javascript:void(0);" title="赞">
          </a>
        </span>
                            </div>
                            <div class="media-body markdown-reply content-body">
                                <p>{{ $reply->body }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
        <div class="pull-right" style="padding-right:20px">

        </div>
    </div>
</div>