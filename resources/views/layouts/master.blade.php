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
         <div class="container">
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

    <li class="tab {{ request()->is('forms') ? 'active' : '' }}">
        <a href="{{ url('forms') }}">Forms</a>
    </li>

    <li class="tab {{ request()->is('document') ? 'active' : '' }}">
        <a href="{{ url('document') }}">Document</a>
    </li>

    <li class="tab {{ request()->is('Baatcheet') ? 'active' : '' }}">
        <a href="{{ url('Baatcheet') }}">Baatcheet</a>
    </li>

    <li class="tab {{ request()->is('data-bank-details') ? 'active' : '' }}">
        <a href="{{ url('data-bank-details') }}">Data Bansk</a>
    </li>

    <!-- VSK Login — now same design as others -->
    <li class="tab vsk-login">
        <a href="{{ route('login') }}" target="_blank">
            VSK Login
        </a>
    </li>

</ul>

         </div>
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
      <script src="{{ asset('public/admin/assets/js/slider-jquery.js')  }}"></script>
      <script src="{{ asset('public/admin/assets/js/slider-jquery-min.js')  }}"></script>
      <script src="{{ asset('public/admin/assets/js/pdf.js')  }}"></script>
      <script>
         $(document).ready(function() {
             $('.hero-slider').slick({
                 autoplay: true,
                 autoplaySpeed: 2000,
                 speed: 700,
                 dots: true,
                 arrows: false,
                 infinite: true,
                 fade: false,
                 cssEase: 'ease-in-out'
             });
         });
      </script>
      <script>
         const url = 'public/admin/images/Veteran Veer Nari,Widow Registration form Stn Hq Dsala.pdf';
         // PDF.js worker setup: adjust path if self-hosting worker.
         pdfjsLib.GlobalWorkerOptions.workerSrc = "{{ asset('public/admin/assets/js/pdf-worker.js')  }}";
         let pdfDoc = null,
             pageNum = 1,
             pageIsRendering = false,
             pageNumIsPending = null,
             scale = 1.2; // initial zoom
         const canvas = document.getElementById('pdf-render');
         const ctx = canvas.getContext('2d');
         //Render the page
         const renderPage = num => {
             pageIsRendering = true;
             pdfDoc.getPage(num).then(page => {
                 const viewport = page.getViewport({
                     scale: scale
                 });
                 canvas.height = viewport.height;
                 canvas.width = viewport.width;
                 const renderCtx = {
                     canvasContext: ctx,
                     viewport
                 };
                 page.render(renderCtx).promise.then(() => {
                     pageIsRendering = false;
                     if (pageNumIsPending !== null) {
                         renderPage(pageNumIsPending);
                         pageNumIsPending = null;
                     }
                 });
             });
             //Update page counters
             document.getElementById('page-num').textContent = num;
         };
         //Queue render if another render is in progress
         const queueRenderPage = num => {
             if (pageIsRendering) {
                 pageNumIsPending = num;
             } else {
                 renderPage(num);
             }
         };
         //Show Prev / Next
         document.getElementById('prev').addEventListener('click', () => {
             if (pageNum <= 1) return;
             pageNum--;
             queueRenderPage(pageNum);
         });
         document.getElementById('next').addEventListener('click', () => {
             if (pageNum >= pdfDoc.numPages) return;
             pageNum++;
             queueRenderPage(pageNum);
         });
         //Zoom
         document.getElementById('zoom-in').addEventListener('click', () => {
             scale = Math.min(scale + 0.2, 3);
             queueRenderPage(pageNum);
         });
         document.getElementById('zoom-out').addEventListener('click', () => {
             scale = Math.max(scale - 0.2, 0.5);
             queueRenderPage(pageNum);
         });
         //Download link
         const setupDownload = (url) => {
             const dl = document.getElementById('download');
             dl.href = url;
         };
         //Load the PDF
         pdfjsLib.getDocument(url).promise.then(pdfDoc_ => {
             pdfDoc = pdfDoc_;
             document.getElementById('page-count').textContent = pdfDoc.numPages;
             renderPage(pageNum);
             setupDownload(url);
         }).catch(err => {
             console.error('Error loading PDF:', err);
             document.querySelector('.pdf-container').innerHTML = '<p style="color:#c00">Could not load PDF.</p>';
         });
      </script>
   </body>
</html>