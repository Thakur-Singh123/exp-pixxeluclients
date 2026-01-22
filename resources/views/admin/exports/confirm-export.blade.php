@extends('admin.layouts.master')
@section('content')
<style>
    body{
        background:#f5f7f9;
        font-family:'Poppins',sans-serif;
    }
    .export-card{
        border:none;
        border-radius:20px;
        overflow:hidden;
        box-shadow:0 20px 50px rgba(0,0,0,.10);
    }
    .export-header{
        background:linear-gradient(135deg,#6B8E23,#3CB371);
        padding:24px;
        text-align:center;
    }
    .export-header h4{
        color:#fff;
        margin:0;
        font-weight:600;
        letter-spacing:.6px;
        text-transform:uppercase;
    }
    .export-body{
        background:#f9fcf9;
        padding:50px 30px;
        text-align:center;
    }
    .export-icon{
        width:90px;
        height:90px;
        margin:0 auto 22px;
        border-radius:50%;
        background:rgba(60,179,113,.15);
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .export-icon i{
        font-size:42px;
        color:#3CB371;
    }
    .btn-custom{
        display:inline-flex;
        align-items:center;
        gap:8px;
        font-weight:600;
        border-radius:50px;
        padding:13px 36px;
        font-size:15px;
        text-decoration:none !important;
        color:#fff !important;
        border:none;
        box-shadow:0 6px 18px rgba(0,0,0,.15);
        transition:all .25s ease;
    }
    .btn-confirm{
        background:linear-gradient(135deg,#28a745,#6B8E23);
    }
    .btn-cancel{
        background:linear-gradient(135deg,#6c757d,#495057);
    }
    .export-footer{
        background:#f1f3f5;
        text-align:center;
        padding:10px;
        font-size:13px;
        color:#6c757d;
    }
</style>
<div class="container">
    <div class="page-inner py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('admin.notification')
                <div class="card export-card">
                    <div class="export-header">
                        <h4>Export ESM Record</h4>
                    </div>
                    <div class="export-body">
                        <div class="export-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h5 class="fw-semibold mb-3">
                            Do you want to export the ESM record data?
                        </h5>
                        <p class="text-muted mb-4">
                            Click below to download the Excel file or cancel if you don’t wish to proceed.
                        </p>
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="{{ route('export.download') }}" class="btn-custom btn-confirm">
                                <i class="fas fa-download"></i> Yes, Download File
                            </a>
                            <a href="{{ url('admin/export-service') }}" class="btn-custom btn-cancel">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection