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
                        <p>Ex-Servicemans</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->is('admin/services*') || request()->is('admin/service-create') || request()->is('admin/edit-service*') || request()->is('admin/single-service-detail*') ? 'show' : '' }}" id="collapseService">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->is('admin/service-create') ? 'active' : '' }}">
                                <a href="{{ url('admin/service-create') }}">
                                    <span class="sub-item">Add Ex-Serviceman</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/services') || request()->is('admin/edit-service*') || request()->is('admin/single-service-detail*') ? 'active' : '' }}">
                                <a href="{{ url('admin/services') }}">
                                    <span class="sub-item">All Ex-Servicemans</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--Widows data -->
                <li class="nav-item {{ request()->is('admin/widows*') || request()->is('admin/widow-create') || request()->is('admin/edit-widow/*') || request()->is('admin/single-widow-detail/*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#collapWidows"
                        class="{{ request()->is('admin/widows*') || request()->is('admin/widow-create') || request()->is('admin/edit-widow/*') || request()->is('admin/single-widow-detail/*') ? '' : 'collapsed' }}"
                        aria-expanded="{{ request()->is('admin/widows*') || request()->is('admin/widow-create') || request()->is('admin/edit-widow/*') || request()->is('admin/single-widow-detail/*') ? 'true' : 'false' }}">
                        <i class="fas fa-ribbon"></i>
                        <p>Widows</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->is('admin/widows*') || request()->is('admin/widow-create') || request()->is('admin/edit-widow/*') || request()->is('admin/single-widow-detail/*') ? 'show' : '' }}" id="collapWidows">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->is('admin/widow-create') ? 'active' : '' }}">
                                <a href="{{ url('admin/widow-create') }}">
                                    <span class="sub-item">Add Widow</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/widows') || request()->is('admin/edit-widow/*') || request()->is('admin/single-widow-detail/*') ? 'active' : '' }}">
                                <a href="{{ url('admin/widows') }}">
                                    <span class="sub-item">All Widows</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--VeerNari data -->
                <li class="nav-item {{ request()->is('admin/veer-naries*') || request()->is('admin/veer-nari-create') || request()->is('admin/edit-veer-nari/*') || request()->is('admin/single-veer-nari-detail/*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#collapVeerNari"
                        class="{{ request()->is('admin/veer-naries*') || request()->is('admin/veer-nari-create') || request()->is('admin/edit-veer-nari/*') || request()->is('admin/single-veer-nari-detail/*') ? '' : 'collapsed' }}"
                        aria-expanded="{{ request()->is('admin/veer-naries*') || request()->is('admin/veer-nari-create') || request()->is('admin/edit-veer-nari/*') || request()->is('admin/single-veer-nari-detail/*') ? 'true' : 'false' }}">
                        <i class="fas fa-medal"></i>
                        <p>Veer Naris</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->is('admin/veer-naries*') || request()->is('admin/veer-nari-create') || request()->is('admin/edit-veer-nari/*') || request()->is('admin/single-veer-nari-detail/*') ? 'show' : '' }}" id="collapVeerNari">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->is('admin/veer-nari-create') ? 'active' : '' }}">
                                <a href="{{ url('admin/veer-nari-create') }}">
                                    <span class="sub-item">Add Veer Nari</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/veer-naries') || request()->is('admin/edit-veer-nari/*') || request()->is('admin/single-veer-nari-detail/*') ? 'active' : '' }}">
                                <a href="{{ url('admin/veer-naries') }}">
                                    <span class="sub-item">All Veer Naries</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--Latest News-->
                <li class="nav-item {{ request()->is('admin/news*') || request()->is('admin/news-create') || request()->is('admin/edit-news/*') || request()->is('admin/single-news-detail/*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#collapseLatestNews"
                        class="{{ request()->is('admin/news*') || request()->is('admin/news-create') || request()->is('admin/edit-news/*') || request()->is('admin/single-news-detail/*') ? '' : 'collapsed' }}"
                        aria-expanded="{{ request()->is('admin/news*') || request()->is('admin/news-create') || request()->is('admin/edit-news/*') || request()->is('admin/single-news-detail/*') ? 'true' : 'false' }}">
                        <i class="fas fa-newspaper"></i>
                        <p>Latest News</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->is('admin/news*') || request()->is('admin/news-create') || request()->is('admin/edit-news/*') || request()->is('admin/single-news-detail/*') ? 'show' : '' }}" id="collapseLatestNews">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->is('admin/news-create') ? 'active' : '' }}">
                                <a href="{{ url('admin/news-create') }}">
                                    <span class="sub-item">Add News</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/news') || request()->is('admin/edit-news/*') || request()->is('admin/single-news-detail/*') ? 'active' : '' }}">
                                <a href="{{ url('admin/news') }}">
                                    <span class="sub-item">All News</span>
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
                <!--settings section-->
                <li class="nav-item {{ request()->is('admin/edit-profile') ? 'active' : '' }}">
                    <a href="{{ url('admin/edit-profile') }}">
                        <i class="fas fa-cog"></i>
                        <p>Settings</p>
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