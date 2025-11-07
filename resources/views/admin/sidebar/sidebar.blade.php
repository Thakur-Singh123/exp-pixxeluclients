<!--sidebar-->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!--header section-->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ url('admin/services') }}" class="logo">
                <img src="{{ asset('public/admin/images/Logo 03.svg') }}" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
            <!-- <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more"> 
                <i class="gg-more-vertical-alt"></i>
            </button> -->
        </div>
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <!--dashboard section-->
                <!-- <li class="nav-item">
                <a href="#">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
                </li> -->
                <li class="nav-item {{ request()->is('admin/services*') || request()->is('admin/service-create') || request()->is('admin/edit-service*') || request()->is('admin/single-service-detail*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#collapseService"
                        class="{{ request()->is('admin/services*') || request()->is('admin/service-create') || request()->is('admin/edit-service*') || request()->is('admin/single-service-detail*') ? '' : 'collapsed' }}"
                        aria-expanded="{{ request()->is('admin/services*') || request()->is('admin/service-create') || request()->is('admin/edit-service*') || request()->is('admin/single-service-detail*') ? 'true' : 'false' }}">
                        <i class="fas fa-clipboard-list"></i>
                        <p>Service Records</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->is('admin/services*') || request()->is('admin/service-create') || request()->is('admin/edit-service*') || request()->is('admin/single-service-detail*') ? 'show' : '' }}" id="collapseService">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->is('admin/service-create') ? 'active' : '' }}">
                                <a href="{{ url('admin/service-create') }}">
                                    <span class="sub-item">Add Service</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/services') || request()->is('admin/edit-service*') || request()->is('admin/single-service-detail*') ? 'active' : '' }}">
                                <a href="{{ url('admin/services') }}">
                                    <span class="sub-item">All Services</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--import data-->
                <li class="nav-item {{ Request::is('admin/import-create') ? 'active' : '' }}">
                    <a href="{{ url('admin/import-create') }}">
                        <i class="fas fa-download"></i>
                        <p>Import Data</p>
                    </a>
                </li>
                <!--export data-->
                <li class="nav-item {{ Request::is('admin/export-service') ? 'active' : '' }}">
                    <a href="{{ url('admin/export-service') }}">
                        <i class="fas fa-upload"></i>
                        <p>Export Data</p>
                    </a>
                </li>
                <!--logout section-->
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>