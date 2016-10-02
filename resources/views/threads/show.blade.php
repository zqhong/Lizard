@extends('layouts.app')

@section('content')
        <!-- Thread detail -->
        <div class="thread panel panel-default">
            <div class="infos panel-heading">
                <div class="pull-right avatar">
                    <a href="">
                        {{ Form::image($thread->user->avatar_url, 'avatar', ['class' => 'media-object img-thumbnail avatar-64']) }}
                    </a>
                </div>

                <h1 class="panel-title thread-title">{{ $thread->title }}</h1>

                <div class="likes inline-block">
                    <a href="javascript:void(0);" data-action="like" data-type="Thread" data-url=""
                       title="赞" class="fa fa-chevron-up likeable like" data-id="5"> 0</a>
                    <a href="javascript:void(0);" data-action="unlike" data-type="Thread" data-url=""
                       title="踩" class="fa fa-chevron-down likeable like" data-id="5"></a>
                </div>

                <div class="meta inline-block">
                    <a href="">admin</a> • 于 <abbr title="2016-09-18 22:18:20" class="timeago">14天前</abbr> • 回复<a href="">admin</a>于 <abbr title="2016-10-02 11:28:11" class="timeago">36分钟前</abbr> •8 阅读
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-body content-body">
                <div class="markdown-body" id="emojify">
                    <p>{{ $thread->body }}</p>
                </div>
            </div>
            <div class="panel-footer operate">
                <div class="pull-left" style="font-size:15px;">
                    <a class=""
                       href="http://service.weibo.com/share/share.php?url=http%3A%2F%2Fhifone.app%2Fthread%2F5&amp;type=3&amp;pic=&amp;title=测试"
                       target="_blank" title="分享到微博">
                        <i class="fa fa-weibo"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fhifone.app%2Fthread%2F5&amp;text=测试&amp;via=hifone.com"
                       class="" target="_blank" title="分享到 Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fhifone.app%2Fthread%2F5" class="" target="_blank"
                       title="分享到 Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://plus.google.com/share?url=http%3A%2F%2Fhifone.app%2Fthread%2F5" class="" target="_blank"
                       title="分享到 Google Plus">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </div>
                <div class="pull-right">
                  <span class="tag-list hidden-xs">
              Tags:
                    <a href="/tag/tag1"><span class="tag">tag1</span></a>
                    <a href="/tag/tag2"><span class="tag">tag2</span></a>
                    <a href="/tag/tag3"><span class="tag">tag3</span></a>
                    </span>
                    <a class="followable" data-action="follow" data-id="5" data-type="Thread" href="javascript:void(0);"
                       data-url="">
                        <i class="fa fa-eye"></i> <span>关注</span>
                    </a>

                    <a class="favoriteable" data-type="Thread" data-id="5" href="javascript:void(0);"
                       data-url="">
                        <i class="fa fa-bookmark"></i> <span>收藏</span>
                    </a>


                    <a id="thread-append-button" href="javascript:void(0);" title="备注" class="admin" data-toggle="modal"
                       data-target="#exampleModal">
                        <i class="fa fa-plus"></i>
                    </a>

                    <a id="thread-edit-button" href="" title="编辑" class="admin">
                        <i class="fa fa-pencil-square-o"></i>
                    </a>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>

<!-- Reply list -->
@include('threads.partials.reply_list')

        <!-- Reply box -->
@include('threads.partials.reply_box')

@endsection