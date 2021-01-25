<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center" style="height:70px;">
    <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
        <a class="navbar-brand brand-logo w-100" href="{{route('admin.index')}}">
            <img src="{{asset('assets/img/logo/logo.png')}}" alt="logo" style="height:50px;width:60px;margin-left:auto;margin-right:auto;display:block;"/>
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{route('admin.index')}}"><img src="{{asset('assets/img/logo/logo.png')}}" alt="logo"/></a>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-sort-variant"></span>
        </button>
    </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" style="height:70px;">
        <ul class="navbar-nav mr-lg-4 w-100">
            <li class="nav-item nav-search d-none d-lg-block w-100">
                <h2 style="text-align:center;color:#1A3059;font-weight:bold;margin-bottom:0px;">Admin Panel</h2>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="{{asset('assets/admin/images/faces/face1.jpg')}}" alt="profile"/>
                <span class="nav-profile-name">{{Session::get("user")->username}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="{{route('logout')}}">
                    <i class="mdi mdi-logout text-primary"></i>
                    Logout
                </a>
            </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
