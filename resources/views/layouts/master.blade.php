<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome | VSK CELL Dharamshala</title>
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')  }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/font-awesome.css')  }}"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/slider.css')  }}">
    <link href="{{ asset('public/assets/css/bootstrap.min.css')  }}" rel="stylesheet">
</head>

<body>
    <div class="top-bar">
        <div class="left">
            <span>📞 Helpline : 7834023404, Landline No : 01892-220216, E-Mail :
                echscelldharamshala@gmail.com</span>
        </div>
        <!-- <div class="right">
            <span>📞 Helpline : 01125664200, Landline No : 01892-220216, E-mail :
                echscelldharamshala@gmail.com</span>
        </div> -->
    </div>
    <header class="main-header">
        <div class="mid-header">
            <div class="container">
                <div class="row align-items-center text-center">

                    <div class="col-12 col-md-2 mb-2 mb-md-0">
                        <img src="public/admin/images/armylogo.png" alt="Logo" class="img-fluid">
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
                            <img src="public/admin/images/logoaz.png" alt="Amrit Mahotsav" class="img-fluid"
                                style="max-height:50px;">
                            <img src="public/admin/images/logogo.png" alt="G20india" class="img-fluid"
                                style="max-height:50px;">
                        </div>

                        <h1 class="title fs-3 fs-md-2">VETERAN SAHAYTA KENDRA</h1>
                        <p class="tagline mb-0">
                            Military Station <br>
                            <span>Station Headquaters Dharamshala</span>
                        </p>
                    </div>

                    <div class="col-12 col-md-2 mt-2 mt-md-0">
                        <img src="public/admin/images/logonew.png" alt="Logo" class="img-fluid">
                    </div>

                </div>
            </div>
        </div>
        <nav class="nav-bar navbar navbar-expand-lg">
            <div class="container-fluid">

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                    aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Nav Links -->
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="tabs navbar-nav m-auto flex-wrap">

                        <li class="tab nav-item {{ request()->is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="tab nav-item {{ request()->is('about-us') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('about-us') }}">About us</a>
                        </li>

                        <li class="tab nav-item {{ request()->is('outreach') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('outreach') }}">Outreach</a>
                        </li>

                        <li class="tab nav-item {{ request()->is('funeral') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('funeral') }}">
                                ADLRS/Demise Grant And Military Funeral
                            </a>
                        </li>

                        <li class="tab nav-item {{ request()->is('echs-page') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('echs-page') }}">ECHS</a>
                        </li>

                        <li class="tab nav-item {{ request()->is('canteen') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('canteen') }}">ESM Canteen</a>
                        </li>

                        <li class="tab nav-item {{ request()->is('awpo') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('awpo') }}">
                                AWPO Bulletin/ESM Rally
                            </a>
                        </li>

                        <li class="tab nav-item {{ request()->is('Baatcheet') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('Baatcheet') }}">Baatcheet</a>
                        </li>

                        <li class="tab nav-item {{ request()->is('data-bank-details') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('data-bank-details') }}">
                                Data Banks
                            </a>
                        </li>

                        <li class="tab nav-item vsk-login">
                            <a class="nav-link fw-bold" href="{{ route('login') }}" target="_blank">
                                VSK Login
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="text-size-controls">
            <button id="font-small" aria-label="Decrease text size">A−</button>
            <button id="font-normal" aria-label="Reset text size">A</button>
            <button id="font-large" aria-label="Increase text size">A+</button>
        </div>
    </header>
    <!-- marquee section -->
    <section class="upper-marquee-line">
        <div class="marquee-line-text">
            <marquee behavior="scroll" direction="left" scrollamount="6" onmouseover="this.stop();"
                onmouseout="this.start();">
                <span style="font-weight: bold; color: #fff;">WELCOME TO VETERAN SAHAYATA KENDRA, MILITARY STATION,
                    STATION HEADQUATER DHARAMDHALA</span>
            </marquee>
        </div>
    </section>
    @yield('content')
    <!-- end marquee section -->
    <script src="{{ asset('public/assets/js/bootstrap.min.js')  }}"></script>
    <script src="{{ asset('public/admin/assets/js/slider-jquery.js')  }}"></script>
    <script src="{{ asset('public/admin/assets/js/slider-jquery-min.js')  }}"></script>
    <script src="{{ asset('public/admin/assets/js/pdf.js')  }}"></script>
    <script src="{{ asset('public/assets/js/custom.js')  }}"></script>


    <script>
    document.addEventListener('DOMContentLoaded', function() {

        const root = document.documentElement;

        let fontSize = localStorage.getItem('fontSize') ?
            parseInt(localStorage.getItem('fontSize')) :
            16;

        root.style.fontSize = fontSize + 'px';

        document.getElementById('font-small').addEventListener('click', function() {
            if (fontSize > 14) {
                fontSize -= 2;
                root.style.fontSize = fontSize + 'px';
                localStorage.setItem('fontSize', fontSize);
            }
        });

        document.getElementById('font-large').addEventListener('click', function() {
            if (fontSize < 26) {
                fontSize += 2;
                root.style.fontSize = fontSize + 'px';
                localStorage.setItem('fontSize', fontSize);
            }
        });

        document.getElementById('font-normal').addEventListener('click', function() {
            fontSize = 16;
            root.style.fontSize = fontSize + 'px';
            localStorage.setItem('fontSize', fontSize);
        });

    });
    </script>

</body>

</html>