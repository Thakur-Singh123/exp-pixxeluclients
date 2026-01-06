@extends('layouts.master')
@section('content')
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
@endsection