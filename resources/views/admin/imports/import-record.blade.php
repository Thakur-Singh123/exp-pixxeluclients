@extends('admin.layouts.master')
@section('content')
<style>
.progress {
    width: 180px;
    height: 8px;
    background: #e9ecef;
    border-radius: 5px;
    overflow: hidden;
    margin-top: 8px;
}
.progress-bar {
    height: 100%;
    background-color: #28a745;
    width: 0%;
    transition: width 0.2s ease-in-out;
}
.upload-preview {
    position: relative;
    display: inline-block;
    padding: 20px 0px;
    margin: -30px 0px -30px 350px;
}
.upload-preview img {
    width: 180px;
    height: 100px;
    border-radius: 5px;
    object-fit: cover;
    border: 1px solid #ddd;
}
.remove-btn {
    position: absolute;
    top: -6px;
    right: -6px;
    background: red;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 22px;
    height: 22px;
    line-height: 18px;
    text-align: center;
    cursor: pointer;
    font-weight: bold;
}
.text-danger {
    color: red !important;
    font-size: 13px;
    margin-top: 5px;
}
</style>
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                @include('admin.notification')
                <div class="card shadow-sm">
                    <div class="card-header text-white">
                        <h4 class="card-title mb-0">Import Data</h4>
                    </div>
                    <div class="card-body">
                        <form id="captureForm" action="{{ route('admin.submit.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-3 d-flex align-items-start flex-column">
                                    <div class="mb-2" style="width:31%;">
                                        <label class="form-label">Choose File to Import</label>
                                        <input type="file" name="image" class="form-control upload-input" accept=".xlsx,.xls,.csv">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="preview-box"></div>
                                    <button type="submit" class="btn btn-success mt-3" id="submitBtn">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('public/admin/assets/js/jquery-3.6.0.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('input[type="file"]').on('change', function(e) {
            const fileInput = $(this);
            const file = e.target.files[0];
            const allowedTypes = ['application/vnd.ms-excel', 'text/csv', 
                                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
            const fileError = $('#fileError');
            fileError.addClass('d-none'); 
    
            if (!file) return;
    
            if (!allowedTypes.includes(file.type)) {
                fileError.removeClass('d-none');
                fileInput.val(''); 
                $('.upload-preview').remove();
                return;
            }
    
            fileInput.next('.upload-preview').remove();
            const previewContainer = $('<div class="upload-preview"></div>');
            const progress = $('<div class="progress"><div class="progress-bar"></div></div>');
            const removeBtn = $('<button type="button" class="remove-btn">&times;</button>');
    
            fileInput.after(previewContainer);
            previewContainer.html(progress);
    
            let progressVal = 0;
            const interval = setInterval(() => {
                progressVal += 5;
                progress.find('.progress-bar').css('width', progressVal + '%');
                if (progressVal >= 100) {
                clearInterval(interval);
    
                previewContainer.html(`
                    <div class="mt-1 small text-muted text-center">${file.name}</div>
                `);
                previewContainer.append(removeBtn);
                }
            }, 80);
    
            removeBtn.on('click', function() {
                previewContainer.remove();
                fileInput.val('');
            });
        });
    });
</script>
@endsection