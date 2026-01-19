@extends('layouts.master')
@section('content')
<style>
.pdf-card {
    border: 2px solid #000;
    border-radius: 6px;
    padding: 25px;
    max-width: 420px;
}

.pdf-btn {
    background-color: #c9973f;
    color: #fff;
    font-weight: 500;
}

.pdf-btn:hover {
    background-color: #b88934;
    color: #fff;
}
.amin-pdf-section {
    margin: 48px auto !important;
    width: fit-content !important;
}
</style>

<!-- <ul class="nav nav-tabs" id="pdfTabs" role="tablist">

    <li class="nav-item">
        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab1"
            data-pdf="public/admin/images/cont emp.pdf">
            Contractual EMP
        </button>
    </li>

    <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab2"
            data-pdf="public/admin/images/Medicine In Polyclinic.pdf">
            Medicine In Polyclinic
        </button>
    </li>

    <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab3"
            data-pdf="public/admin/images/advisory.pdf">
            Advisory
        </button>
    </li>

    <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab4"
            data-pdf="public/admin/images/empaneled.pdf">
            Empaneled Hospitals
        </button>
    </li>

</ul>

<div class="tab-content mt-4">

    @for ($i = 1; $i <= 4; $i++) <div class="tab-pane fade {{ $i == 1 ? 'show active' : '' }}" id="tab{{ $i }}">
        <div class="card-1 p-3">

            <div class="d-flex gap-2 mb-2">
                <button class="btn btn-sm btn-secondary prev">Prev</button>
                <button class="btn btn-sm btn-secondary next">Next</button>

                <span class="align-self-center">
                    Page <span class="page-num">1</span> /
                    <span class="page-count">--</span>
                </span>

                <button class="btn btn-sm btn-secondary zoom-out">−</button>
                <button class="btn btn-sm btn-secondary zoom-in">+</button>

                <a class="btn btn-sm btn-primary download" download>Download</a>
            </div>

            <div class="text-center">
                <canvas class="pdf-canvas"></canvas>
            </div>

        </div>
</div>
@endfor



</div> -->

<div class="container my-5 amin-pdf-section">
    <div class="pdf-card">
        <h6 class="fw-bold text-uppercase mb-4">
            Introduction of ECHS Shahpur
        </h6>

        <a href="public/admin/images/ECHS_Shahpur.pdf" target="_blank" class="btn pdf-btn px-4 py-2">
            View / Download PDF
        </a>
    </div>
</div>


<!-- <script src="{{ asset('public/admin/assets/js/pdf.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/pdf-worker.js') }}"></script>

<script>
pdfjsLib.GlobalWorkerOptions.workerSrc =
    "{{ asset('public/admin/assets/js/pdf-worker.js') }}";

let pdfDoc = null;
let pageNum = 1;
let scale = 1.2;
let currentCanvas, currentTab;

function renderPage() {
    pdfDoc.getPage(pageNum).then(page => {
        const viewport = page.getViewport({
            scale
        });
        const ctx = currentCanvas.getContext('2d');

        currentCanvas.width = viewport.width;
        currentCanvas.height = viewport.height;

        page.render({
            canvasContext: ctx,
            viewport
        });
        currentTab.querySelector('.page-num').textContent = pageNum;
    });
}

function loadPDF(tab, url) {
    currentTab = tab;
    currentCanvas = tab.querySelector('.pdf-canvas');
    pageNum = 1;
    scale = 1.2;

    pdfjsLib.getDocument(url).promise.then(pdf => {
        pdfDoc = pdf;
        tab.querySelector('.page-count').textContent = pdf.numPages;
        tab.querySelector('.download').href = url;
        renderPage();
    });
}

// Toolbar actions
document.querySelectorAll('.tab-pane').forEach(tab => {

    tab.querySelector('.prev').onclick = () => {
        if (pageNum > 1) {
            pageNum--;
            renderPage();
        }
    };

    tab.querySelector('.next').onclick = () => {
        if (pageNum < pdfDoc.numPages) {
            pageNum++;
            renderPage();
        }
    };

    tab.querySelector('.zoom-in').onclick = () => {
        scale += 0.2;
        renderPage();
    };

    tab.querySelector('.zoom-out').onclick = () => {
        scale = Math.max(scale - 0.2, 0.5);
        renderPage();
    };

});

// Tab change event
document.querySelectorAll('[data-bs-toggle="tab"]').forEach(tabBtn => {
    tabBtn.addEventListener('shown.bs.tab', function() {
        const target = document.querySelector(this.dataset.bsTarget);
        loadPDF(target, this.getAttribute('data-pdf'));
    });
});

// Load first tab by default
loadPDF(
    document.querySelector('.tab-pane.show.active'),
    document.querySelector('.nav-link.active').getAttribute('data-pdf')
);
</script> -->

@endsection