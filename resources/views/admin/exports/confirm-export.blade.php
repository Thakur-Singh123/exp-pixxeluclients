@extends('admin.layouts.master')
@section('content')
<style>
body {
    background-color: #f5f7f9;
    font-family: 'Poppins', sans-serif;
}
.card {
    border: none;
    border-radius: 1rem;
}
.card-header {
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 0.5px;
}
.card-body {
    background-color: #f9fcf9 !important;
}
.btn-custom {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    border-radius: 50px;
    padding: 12px 35px;
    font-size: 16px;
    text-decoration: none !important;
    color: #fff !important;
    user-select: none;
    outline: none;
    border: none;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: none !important;
}
.btn-confirm {
    background: linear-gradient(135deg, #28a745, #6B8E23);
}
.btn-confirm:hover,
.btn-confirm:focus,
.btn-confirm:active {
    background: linear-gradient(135deg, #28a745, #6B8E23);
    color: #fff !important;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
.btn-cancel {
    background: linear-gradient(135deg, #6c757d, #495057);
}
.btn-cancel:hover,
.btn-cancel:focus,
.btn-cancel:active {
    background: linear-gradient(135deg, #6c757d, #495057);
    color: #fff !important;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
.btn-custom i {
    font-size: 17px;
}
.card-footer small {
    color: #6c757d;
}
</style>
<div class="container">
    <div class="page-inner py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('admin.notification')
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header text-white py-3"
                        style="background: linear-gradient(135deg, #6B8E23, #3CB371); border-top-left-radius: 1rem; border-top-right-radius: 1rem;">
                        <h4 class="card-title mb-0">
                            Export Service Record
                        </h4>
                    </div>
                    <div class="card-body text-center bg-light">
                        <div class="py-4">
                            <i class="fas fa-database fa-4x text-success mb-3"></i>
                            <h5 class="fw-semibold mb-3">Do you want to export the service record data?</h5>
                            <p class="text-muted mb-4">
                                Click below to download the Excel file or cancel if you don’t wish to proceed.
                            </p>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="{{ route('export.download') }}" class="btn-custom btn-confirm">
                                    <i class="fas fa-download me-2"></i> Yes, Download File
                                </a>
                                <a href="{{ url()->previous() }}" class="btn-custom btn-cancel">
                                    <i class="fas fa-times me-2"></i> Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection