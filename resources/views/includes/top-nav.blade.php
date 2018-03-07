<div class="navbar-header">
    <a class="navbar-brand" href="#">Startmin</a>
</div>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>

<!-- Top Navigation: Left Menu -->
<ul class="nav navbar-nav navbar-left navbar-top-links">
    <li>
        <a href="#">
            <i class="fa fa-home fa-fw"></i>
        </a>
    </li>
</ul>

<!-- Top Navigation: Right Menu -->
<ul class="nav navbar-right navbar-top-links">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> {{ auth()->user()->first_name .' '. auth()->user()->last_name}} <b class="caret"></b>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out fa-fw"></i>
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
</ul>