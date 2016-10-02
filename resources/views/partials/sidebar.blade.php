<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading">Lizard</div>
        @if(Auth::check())
        <div class="panel-body">
            {{ link_to_route('thread.create', trans('forum.add_thread')) }}
        </div>
        @else
        <div class="panel-body text-center">
            <a href="{{ route('register') }}" class="btn btn-primary">
                <i class="fa fa-user"> </i> {{ trans('forum.register') }}
            </a>
        </div>
        <div class="panel-footer text-center">
            {{ trans('forum.registered_user') }}{{ link_to_route('login', trans('forum.login')) }}
        </div>
        @endif
    </div>
</div>