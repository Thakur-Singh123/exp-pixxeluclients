<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ExServiceMan Portal</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('public/admin/images/ESP Logo Black.svg') }}" type="image/x-icon" />
    <link href="{{ asset('public/admin/js/summernote-lite.min.css') }}" rel="stylesheet">
    <!--css files-->
    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/datatables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/datatables/css/dataTables.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/admin/assets/select2/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/admin/assets/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/bootstrap.min.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('public/admin/assets/css/plugins.min.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/demo.css') }}" />
</head>
<body>
    <div class="wrapper">
        @include('admin.sidebar.sidebar')
        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <div class="logo-header" data-background-color="dark">
                        <a href="#" class="logo">
                            <img src="{{ asset('public/admin/assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand"
                                class="navbar-brand" height="20" />
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
                </div>
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <!-- <li class="nav-item topbar-icon dropdown hidden-caret submenu">
                                <a class="nav-link dropdown-toggle" href="#" id="notifDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-bell"></i>
                                    <span class="notification">3</span>
                                </a>
                                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown"
                                    data-bs-popper="static">
                                    <li>
                                        <div class="dropdown-title">
                                            You have 3 new notifications
                                        </div>
                                    </li>
                                    <li>
                                        <div class="scroll-wrapper notif-scroll scrollbar-outer" style="position: relative;">
                                            <div class="notif-scroll scrollbar-outer scroll-content"
                                                style="height: auto; max-height: 244px;">
                                                <div class="notif-center">
                                                    <a href="#">
                                                        <div class="notif-icon notif-success">
                                                            <i class="fa fa-user-plus"></i>
                                                        </div>
                                                        <div class="notif-content">
                                                            <span class="block">New user registered</span>
                                                            <span class="time">5 mins ago</span>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div class="notif-icon notif-primary">
                                                            <i class="fa fa-tasks"></i>
                                                        </div>
                                                        <div class="notif-content">
                                                            <span class="block">Task "UI Design" completed</span>
                                                            <span class="time">1 hour ago</span>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div class="notif-icon notif-danger">
                                                            <i class="fa fa-exclamation-triangle"></i>
                                                        </div>
                                                        <div class="notif-content">
                                                            <span class="block">Server downtime resolved</span>
                                                            <span class="time">2 hours ago</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="#">
                                            Mark all as read <i class="fa fa-check"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        @if (auth()->user()->image)
                                            <img src="{{ url('public/uploads/users/' . auth()->user()->image) }}"
                                                alt="image profile" class="avatar-img rounded" />
                                        @else
                                            <img src="{{ asset('public/uploads/users/default.png') }}"
                                                alt="image profile" class="avatar-img rounded" />
                                        @endif
                                    </div>
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span>
                                        <span class="fw-bold">{{ auth()->user()->name }}</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    @if (auth()->user()->image)
                                                        <img src="{{ asset('public/uploads/users/' . auth()->user()->image) }}"
                                                            alt="image profile" class="avatar-img rounded" />
                                                    @else
                                                        <img src="{{ asset('public/uploads/users/default.png') }}"
                                                            alt="image profile" class="avatar-img rounded" />
                                                    @endif
                                                </div>
                                                <div class="u-text">
                                                    <h4>{{ auth()->user()->name }}</h4>
                                                    <p class="text-muted">{{ auth()->user()->email }}</p>
                                                    <a href="{{ url('mr/profile') }}"
                                                        class="profile-btn btn-xs btn-secondarys btn-sm">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item {{ Request::is('mr/edit-profile') ? 'active' : '' }}"
                                                href="{{ url('mr/edit-profile') }}">
                                                Edit Profile
                                            </a>
                                            <a class="dropdown-item {{ Request::is('mr/change-password') ? 'active' : '' }}"
                                                href="{{ url('mr/change-password') }}">
                                                Update Password
                                            </a>
                                            <a href="{{ route('logout') }}" class="dropdown-item"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Sign Out
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            @yield('content')
            <footer class="footer">
                <div class="container-fluid d-flex justify-content-between">
                    <!--<div class="copyright">
                     ©2025 Food Machine. All rights reserved<i class="fa fa-heart heart text-danger"></i> by
                     <a href="{{ url('/') }}">Food-Machine.com</a>
                  </div>-->
                </div>
            </footer>
        </div>
    </div>
    <script>
        var base_url = '{{ url('/') }}';
    </script>
    <!-- FullCalendar JS -->
    <script src="{{ asset('public/assets/js/index.global.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/datatables/js/dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#serviceTable').DataTable({
                pageLength: 50,
                lengthMenu: [10, 25, 50, 100]
            });
        });
    </script>
    <script src="{{ asset('public/admin/assets/js/sweetalert2.all.min.js') }}"></script>
    <!--core js files-->
    <script src="{{ asset('public/admin/assets/js/custom-ajax.js') }}"></script>
    <script src="{{ asset('public/admin/assets/js/custom-script.js') }}"></script>
    <script src="{{ asset('public/admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/js/core/bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#add-more').click(function(){
                let template = $('#row-template').html();
                $('#dynamic-rows').append(template);
            });

            $(document).on('click', '.remove-btn', function(){
                $(this).closest('.dynamic-row').remove();
            });
        });
    </script>
</body>
</html>
