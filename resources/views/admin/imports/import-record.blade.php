@extends('admin.layouts.master')
@section('content')
<style>
body {
    background-color: #f5f7f9;
}

/* Center align the whole card vertically */
.container {
    min-height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* CARD DESIGN */
.card {
    width: 100%;
    max-width: 700px;
    border: none;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}
.card-header {
    background: linear-gradient(135deg, #007f3f, #28a745);
    color: #fff;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 20px 0;
}
.card-body {
    background: #ffffff;
    padding: 50px 40px;
    min-height: 350px;
}

/* UPLOAD BOX */
.file-upload-wrapper {
    position: relative;
    text-align: center;
}
.file-upload-input {
    width: 100%;
    padding: 16px 20px;
    border: 2px dashed #92d18b;
    border-radius: 12px;
    background-color: #fafffa;
    font-size: 15px;
    color: #555;
    transition: all 0.3s ease;
    cursor: pointer;
}
.file-upload-input:hover {
    background-color: #edffed;
    border-color: #28a745;
}
.file-upload-wrapper.active .file-upload-input {
    background-color: #eaffea;
    border-color: #28a745;
}
.file-upload-wrapper i.fa-cloud-upload-alt {
    font-size: 45px;
    color: #28a745;
    display: block;
    margin-bottom: 12px;
    transition: 0.3s;
}
.file-upload-wrapper.active i.fa-cloud-upload-alt {
    transform: scale(1.1);
}

/* PROGRESS BAR */
.progress-bar-container {
    width: 80%;
    margin: 20px auto;
    height: 10px;
    background-color: #e6f4e6;
    border-radius: 5px;
    overflow: hidden;
    display: none;
}
.progress-bar-fill {
    height: 100%;
    width: 0%;
    background: linear-gradient(90deg, #28a745, #6B8E23);
    transition: width 0.1s ease;
}

/* FILE NAME DISPLAY */
.file-name-display {
    font-size: 15px;
    font-weight: 500;
    color: #28a745;
    margin-top: 30px;
    display: none;
}
.file-name-display i.fa-file-excel {
    font-size: 30px;
    color: #28a745;
    vertical-align: middle;
    margin-right: 8px;
}

/* REMOVE BUTTON */
.remove-btn {
    position: absolute;
    top: 150px;
    right: 170px;
    background: #dc3545;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    line-height: 25px;
    text-align: center;
    cursor: pointer;
    font-weight: bold;
    font-size: 16px;
    transition: background 0.3s ease;
    display: none;
}
.remove-btn:hover {
    background: #c82333;
}

.btn-custom {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    border-radius: 10px;
    padding: 8px 20px;
    font-size: 16px;
    text-decoration: none !important;
    color: #fff !important;
    user-select: none;
    outline: none;
    border: none;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: none !important;
}

/* Confirm Button */
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


/* RESPONSIVE */
@media (max-width: 768px) {
    .card-body {
        padding: 30px 20px;
    }
}
</style>

<div class="container">
    <div class="page-inner w-100">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('admin.notification')
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="card-title mb-0">
                            <i class="fas fa-file-import me-2"></i> Import Data
                        </h4>
                    </div>
                    <div class="card-body text-center">
                        <form id="captureForm" action="{{ route('admin.submit.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="file-upload-wrapper mt-3">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <label for="fileUpload" class="file-upload-input">
                                    Click here to choose Excel/CSV file
                                </label>
                                <input type="file" id="fileUpload" name="image" class="d-none" accept=".xlsx,.xls,.csv">

                                <!-- Progress bar -->
                                <div class="progress-bar-container">
                                    <div class="progress-bar-fill"></div>
                                </div>

                                <div class="file-name-display"></div>
                                <button type="button" class="remove-btn">&times;</button>
                                @error('image')
                                    <small class="text-danger d-block mt-2">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="text-center mt-4">
                            <button type="submit" class="btn-custom btn-confirm">Submit</button>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- jQuery --}}
<script src="{{ asset('public/admin/assets/js/jquery-3.6.0.min.js') }}"></script>
<script>
$(document).ready(function() {
    const fileInput = $('#fileUpload');
    const uploadWrapper = $('.file-upload-wrapper');
    const fileNameDisplay = $('.file-name-display');
    const removeBtn = $('.remove-btn');
    const progressBar = $('.progress-bar-container');
    const progressFill = $('.progress-bar-fill');

    fileInput.on('change', function(e) {
        const file = e.target.files[0];
        const allowedTypes = [
            'application/vnd.ms-excel',
            'text/csv',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ];

        if (!file) return;

        if (!allowedTypes.includes(file.type)) {
            fileNameDisplay
                .html('<span class="text-danger">Invalid file type! Please upload Excel or CSV file.</span>')
                .fadeIn();
            fileInput.val('');
            uploadWrapper.removeClass('active');
            removeBtn.hide();
            return;
        }

        uploadWrapper.addClass('active');
        progressBar.show();
        progressFill.css('width', '0%');
        let progress = 0;

        const interval = setInterval(() => {
            progress += 2;
            progressFill.css('width', progress + '%');
            if (progress >= 100) {
                clearInterval(interval);
                setTimeout(() => {
                    progressBar.fadeOut(300);
                    fileNameDisplay
                        .html('<i class="fas fa-file-excel"></i> ' + file.name)
                        .fadeIn();
                    removeBtn.fadeIn();
                }, 300);
            }
        }, 30);
    });

    removeBtn.on('click', function() {
        fileInput.val('');
        uploadWrapper.removeClass('active');
        fileNameDisplay.fadeOut();
        removeBtn.fadeOut();
    });
});
</script>
@endsection
