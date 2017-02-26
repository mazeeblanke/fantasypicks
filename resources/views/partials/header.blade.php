<!-- main-nav -->
<div class="main-nav {{ (request()->decodedPath() == '/') ?: 'other-page-nav' }}">
    <div class="logo-left">
        <a href="{{ url('/') }}" class="pull-left">
            <img src="{{ asset('img/logo-header.png') }}" alt="Fantasy Picks logo">
        </a>

        <a href="javascript:void(0)" class="menu-trigger">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="languages">
        <ul class="list-inline">
            @if (Auth::check())
                {!! Form::open(['route' => 'logout', 'id' => 'logout']) !!}{!! Form::close() !!}
                <li class="active"><a href="#" onclick="$('#logout').submit()">Logout</a></li>

                @role('administrator')
                <li class="active"><a href="{{ url('admin') }}">Admin</a></li>
                @endrole
            @else
                <li class="active"><a href="{{ route('login') }}">Login</a></li>
                <li class="active"><a href="{{ route('register') }}">Register</a></li>
            @endif

            <li><a href="#" class="btn btn-2 btn-primary btn-main">Feedback</a></li>
        </ul>
    </div>
</div> <!-- //end main-nav -->

<!--=========================
    Start area for Menu
============================== -->
<nav class="nav-menu">
    <div class="nav-header overflow">
        <a href="{{ url('/') }}"><img src="{{ asset('img/logo-nav.png') }}" class="pull-left" alt="logo"></a>
        <p class="dismiss-button pull-right animated zoomIn">
            <img src="{{ asset('img/dismiss.png') }}" alt="dismiss">
        </p>
    </div>
    <ul>
        <li class="active">
            <a href="{{ url('/') }}">
                home <span class="info animated fadeInRight">we are fantasy picks, see what we can offer you.</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/') }}">
                matches <span
                        class="info animated fadeInRight">we are fantasy picks, see what matches you can bet on.</span>
            </a>
        </li>
    </ul>
</nav>

<!-- End of menu area -->