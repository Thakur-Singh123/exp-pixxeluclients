<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baatcheet</title>
</head>

<style>
body{margin:0;padding:0}
.container{max-width:1280px;margin:0 auto;padding:0 15px}
.pdf-toolbar { display:flex; gap:8px; align-items:center; margin:30px; }
.pdf-container { width: 100%; max-width: 1100px; margin: 0 auto; background:#f6f6f6; padding:12px; border-radius:8px; }
canvas {width: 100%;height: fit-content;display: block;object-fit: cover;}
button { padding:6px 10px; border-radius:6px; border:1px solid #ddd; background:#fff; cursor:pointer; }
a#download { margin-left:auto; color:#007bff; text-decoration:none; }
.main-pdf {padding: 0 25px;}
.back-btn {text-align: center;margin-top: 25px;}
.back-btn a {color: #333;text-decoration: none;font-size: 23px;background: #f19000;padding: 10px 30px;border-radius: 10px;}
.main-header{width:100%;text-align:center;font-family:Arial,sans-serif}
.mid-header{background:linear-gradient(to bottom,#f8b77b,#8ccf87);padding:10px 0}
.top-section{position:relative;padding:10px 0;display:flex;justify-content:space-between;align-items:center}
.side-logo{width:70px;height:auto}
.center-content{flex:1}
.center-small-logo{width:120px}
.center-small-logo-1{width:120px}
.title{font-size:22px;font-weight:700;margin:5px 0;text-align: center;}
.tagline{font-size:17px;margin-top:-4px;letter-spacing:.4px;text-transform: uppercase;}
.nav-bar{background:#f5f5f5}
.nav-bar ul {list-style: none;margin: 0;padding: 0;display: flex;justify-content: center;align-items: center;gap: 14px;background: #f5f5f5;padding: 5px 0;}
.nav-bar li{font-size:15px;cursor:pointer;margin: 0;}
.home.active{background:#004000;color:#fff}
.tabs{display:flex;padding:0;margin:0;list-style:none;background:#fff}
.tab a{display:block;padding:10px 16px;font-size:15px;text-decoration:none;color:#000;border-bottom:none;transition:.2s}
li.tab.active{display:block;padding:10px 16px;font-size:15px;text-decoration:none;color:#000;border-bottom:none;transition:.2s}
.tab a:hover{background:#e7ffe7}
li.tab.active:hover{background:#e7ffe7}
.tab.active a{background:#004000;color:#fff;border-color:#004000}
.center-content img.center-small-logo{position:absolute;left:16%}
.center-content img.center-small-logo-1{position:absolute;right:16%}
li.login-btn-11 a {
    text-decoration: none;
    color: #000;
    font-size: 15px;
    background: #f19000;
    padding: 10px 12px;
    border-radius: 10px;
}
</style>

<body>


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
                    <li class="tab active">Home</li>

                    <li class="tab"><a href="http://localhost/exp-pixxeluclients/about-us">About us</a></li>
                    <li class="tab"><a href="http://localhost/exp-pixxeluclients/outreach">Outreach</a></li>
                    <li class="tab"><a href="http://localhost/exp-pixxeluclients/forms">Forms</a></li>
                    <li class="tab"><a href="{{ url('doc') }}">Document</a></li>
                    <li class="tab"><a href="{{ url('Baatcheet') }}">Baatcheet</a></li>
                    <li class="tab"><a href="http://localhost/exp-pixxeluclients/data-bank-details">Data Bank</a></li>
                    <li class="login-btn-11">
                        <a target="_blank" href="http://localhost/exp-pixxeluclients/login">
                            VSK Login
                        </a>
                    </li>

                </ul>
            </div>
    </nav></header>
        <div class="container">
                <div class="main-pdf">
                    <div class="pdf-toolbar">
                        <button id="prev">Prev</button>
                        <button id="next">Next</button>
                        <span>Page <span id="page-num">1</span> / <span id="page-count">--</span></span>
                        <button id="zoom-out">−</button>
                        <button id="zoom-in">+</button>
                        <a id="download" href="#" download>Download</a>
                    </div>
                    <div class="pdf-container">
                        <canvas id="pdf-render"></canvas>
                    </div>
                </div>
                <div class="back-btn">
        <a href="{{ url('/') }}">Back</a>
    </div>
        </div>



    <script src="{{ asset('public/admin/assets/js/pdf.js')  }}"></script>
    <script>
    const url = 'public/admin/images/Baatcheet.pdf';
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