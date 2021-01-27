<div id="header" class="header navbar-default  navbar-inverse">

    <div class="navbar-header">
        <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span><strong>Admin Panel</strong></a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <ul class="navbar-nav navbar-right">
        <li class="navbar-form">
            <form action="#" method="POST" name="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter keyword" />
                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </li>
        <li class="dropdown navbar-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('backend')}}/assets/img/user/user-13.jpg" alt="" />
                <span class="d-none d-md-inline">Adam Schwartz</span> <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{route('profile')}}" class="dropdown-item"><i class="fa fa-user-circle"></i> My Profile</a>
                <a href="javascript:;" class="dropdown-item"><i class="fa fa-key"></i> Change Password</a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>

</div>