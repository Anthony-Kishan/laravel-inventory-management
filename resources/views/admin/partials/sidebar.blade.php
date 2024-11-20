<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{route('admin.dashboard')}}" class="logo">
                <img src="{{asset('admin/assets/img/kaiadmin/logo_light.svg')}}" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ $page_slug == 'dashboard' ? 'active' : ''}}">
                    <a href="{{route('admin.dashboard')}}">
                        <i class="fas fa-home"></i>
                        <p>{{__('Dashboard')}}</p>
                    </a>
                </li>
                <li class="nav-item {{ $page_slug == 'admin' ? 'active' : ''}}">
                    <a href="{{route('admin.index')}}">
                        <i class="fas fa-home"></i>
                        <p>{{__('Admin Management')}}</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>