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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="top-bar">
        <div class="left">
            <span>📞 Family Pensioner Helpline : 01125664100, WhatsApp : 9910964067, E-Mail :
                diav.vsk@gov.in</span>
        </div>
        <div class="right">
            <span>📞 Service Pensioner Helpline : 01125664200, Whatsapp : 9910610866, E-mail :
                veteranscell-armyn@ic.in</span>
        </div>
    </div>
    <header class="main-header">
        <div class="mid-header">
            <div class="container">
                <div class="top-section">
                    <img src="public/admin/images/armylogo.png" alt="Logo" class="side-logo">
                    <div class="center-content">
                        <img src="public/admin/images/logoaz.png" alt="Amrit Mahotsav" class="center-small-logo">
                        <img src="public/admin/images/logogo.png" alt="G20india" class="center-small-logo-1">
                        <h1 class="title">VETERAN SAHAYTA KENDRA</h1>
                        <p class="tagline">Military Station <br><span>Station Headquaters Dharamshala</span></p>
                    </div>
                    <img src="public/admin/images/logonew.png" alt="Logo" class="side-logo">
                </div>
            </div>
        </div>
        <nav class="nav-bar">
            <ul class="tabs">

                <li class="tab {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">Home</a>
                </li>

                <li class="tab {{ request()->is('about-us') ? 'active' : '' }}">
                    <a href="{{ url('about-us') }}">About us</a>
                </li>

                <li class="tab {{ request()->is('outreach') ? 'active' : '' }}">
                    <a href="{{ url('outreach') }}">Outreach</a>
                </li>

                <li class="tab {{ request()->is('funeral') ? 'active' : '' }}">
                    <a href="{{ url('funeral') }}">ADLRS/Demise Grant And Military Funeral</a>
                </li>

                <li class="tab {{ request()->is('echs') ? 'active' : '' }}">
                    <a href="{{ url('echs') }}">ECHS</a>
                </li>

                <li class="tab {{ request()->is('canteen') ? 'active' : '' }}">
                    <a href="{{ url('canteen') }}">ESM Canteen</a>
                </li>

                <li class="tab {{ request()->is('forms') ? 'active' : '' }}">
                    <a href="{{ url('forms') }}">Forms</a>
                </li>

                <li class="tab {{ request()->is('awpo') ? 'active' : '' }}">
                    <a href="{{ url('awpo') }}">AWPO Bulletin/ESM Rally</a>
                </li>

                <li class="tab {{ request()->is('Baatcheet') ? 'active' : '' }}">
                    <a href="{{ url('Baatcheet') }}">Baatcheet</a>
                </li>

                <li class="tab {{ request()->is('data-bank-details') ? 'active' : '' }}">
                    <a href="{{ url('data-bank-details') }}">Data Banks</a>
                </li>

                <!-- VSK Login — now same design as others -->
                <li class="tab vsk-login">
                    <a href="{{ route('login') }}" target="_blank">
                        VSK Login
                    </a>
                </li>

            </ul>

        </nav>
    </header>
    <!-- marquee section -->
    <section class="upper-marquee-line">
        <div class="marquee-line-text">
            <marquee behavior="scroll" direction="left" scrollamount="6" onmouseover="this.stop();"
                onmouseout="this.start();">
                <span style="font-weight: bold; color: #fff;">WELCOME TO VETERAN SAHAYATA KENDRA</span>
            </marquee>
        </div>
    </section>
    @yield('content')
    <!-- end marquee section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public/admin/assets/js/slider-jquery.js')  }}"></script>
    <script src="{{ asset('public/admin/assets/js/slider-jquery-min.js')  }}"></script>
    <script src="{{ asset('public/admin/assets/js/pdf.js')  }}"></script>
    <script src="{{ asset('public/assets/js/custom.js')  }}"></script>
</body>

</html>