<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{(Request::url() === url('/admin/') ? 'active' : '')}}" style="margin-top:5px;">
            <a href="{{route('admin.index')}}" class="nav-link">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title" style="margin-top:2px;">Dashboard</span>
            </a>
        </li>
         <li class="nav-item {{(Request::segment(2) === 'berita' ? 'active' : '')}}">
            <a href="{{route('admin.berita.index')}}" class="nav-link">
                <i class="mdi mdi-book menu-icon"></i>
                <span class="menu-title">Berita</span>
            </a>
        </li>
        <li class="nav-item {{Request::segment(2) === 'jejak' ? 'active' : ''}}">
            <a class="nav-link" href="{{route('admin.jejak.index')}}">
                <i class="mdi mdi-shoe-print menu-icon"></i>
                <span class="menu-title">Jejak</span>
            </a>
        </li>
        <li class="nav-item {{Request::segment(2) === 'alumni' ? 'active' : ''}}">
            <a href="{{route('admin.alumni.index')}}" class="nav-link">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Alumni</span>
            </a>
        </li>
        <!--

         -->
    </ul>
</nav>
