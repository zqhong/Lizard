<div class="header">
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!! route('home') !!}">Lizard</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{!! route('home') !!}">{{ trans('forum.homepage') }} <span
                                    class="sr-only">(current)</span></a></li>
                    <li><a href="#">{{ trans('forum.about') }}</a></li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ trans('forum.search') }}">
                    </div>
                    <button type="submit" class="btn btn-default">{{ trans('forum.submit')}}</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::guest())
                        <li><a href="{!! route('register') !!}">{{ trans('forum.register') }}</a></li>
                        <li><a href="{!! route('login') !!}">{{ trans('forum.login') }}</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">{{ Auth::user()->email }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('logout') }}">{{ trans('forum.logout') }}</a></li>
                            </ul>
                        </li>
                    @endif


                </ul>
            </div>
        </div>
    </nav>
</div>