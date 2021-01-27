<div id="sidebar" class="sidebar">

    <div data-scrollbar="true" data-height="100%">

        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="{{asset('backend')}}/assets/img/user/user-13.jpg" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>Sean Ngu
                        <small>Front end developer</small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="{{route('profile')}}"><i class="fa fa-user-circle"></i>Profile</a></li>
                    <li><a href="javascript:;"><i class="fa fa-key"></i> Change Password</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" ><i class="fa fa-sign-out"></i> Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </ul>
            </li>
        </ul>


        <ul class="nav">
            <li class="nav-header">General</li>
            <li>
                <a href="#" class="google-drive-opener">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-users"></i>
                    <span>Users Management</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">Others</a></li>
                </ul>
            </li>
            <li class="nav-header">Content Management</li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-cogs"></i>
                    <span>Website Settings</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="page_blank.html">Blank Page</a></li>
                    <li><a href="page_with_footer.html">Page with Footer</a></li>
                    <li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
                    <li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
                    <li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
                    <li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
                    <li><a href="page_with_line_icons.html">Page with Line Icons</a></li>
                    <li><a href="page_with_ionicons.html">Page with Ionicons</a></li>
                    <li><a href="page_full_height.html">Full Height Content</a></li>
                    <li><a href="page_with_wide_sidebar.html">Page with Wide Sidebar</a></li>
                    <li><a href="page_with_light_sidebar.html">Page with Light Sidebar</a></li>
                    <li><a href="page_with_mega_menu.html">Page with Mega Menu</a></li>
                    <li><a href="page_with_top_menu.html">Page with Top Menu</a></li>
                    <li><a href="page_with_boxed_layout.html">Page with Boxed Layout</a></li>
                    <li><a href="page_with_mixed_menu.html">Page with Mixed Menu</a></li>
                    <li><a href="page_boxed_layout_with_mixed_menu.html">Boxed Layout with Mixed Menu</a></li>
                    <li><a href="page_with_transparent_sidebar.html">Page with Transparent Sidebar</a></li>
                    <li><a href="page_with_search_sidebar.html">Page with Search Sidebar <i class="fa fa-paper-plane text-theme"></i></a></li>
                </ul>
            </li>


            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>

        </ul>

    </div>

</div>
<div class="sidebar-bg"></div>
