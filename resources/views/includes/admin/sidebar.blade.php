<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}} ">
            <div class="sidebar-brand-text mx-3">Dimas Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('dashboard')}} ">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('work.index') }}">
                <i class="fa fa-briefcase"></i>
                <span>Works</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('work-detail.index') }}">
                <i class="fa fa-book"></i>
                <span>Work Details</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('platform.index') }}">
                <i class="fa fa-laptop"></i>
                <span>Platforms</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('technology.index') }}">
                <i class="fa fa-microchip"></i>
                <span>Technologies</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('role.index') }}">
                <i class="fa fa-user"></i>
                <span>Development Roles</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('screenshot.index') }}">
                <i class="fa fa-camera"></i>
                <span>Screenshots</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('video.index') }}">
                <i class="fa fa-play"></i>
                <span>Videos</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->