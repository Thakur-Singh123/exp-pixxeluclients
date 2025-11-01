@extends('admin.layouts.master')
@section('content')
<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <!--success message section-->
            @include('admin.notification')
            <div class="card shadow-sm">
               <div class="card-header text-white">
                  <h4 class="card-title mb-0">Add service</h4>
               </div>
               <div class="card-body">
                  <form id="captureForm" action="{{ route('admin.service.submit') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <!--Step Navigation-->
                     <div class="d-flex flex-wrap justify-content-between mb-4 step-header">
                        <button type="button" class="btn btn-outline-primary step-btn active" data-step="1">ExServiceMan Details</button>
                        <button type="button" class="btn btn-outline-primary step-btn" data-step="2">Spouse Details</button>
                        <button type="button" class="btn btn-outline-primary step-btn" data-step="3">Father Details</button>
                        <button type="button" class="btn btn-outline-primary step-btn" data-step="4">Mother Details</button>
                        <button type="button" class="btn btn-outline-primary step-btn" data-step="5">Widow Details</button>
                        <button type="button" class="btn btn-outline-primary step-btn" data-step="6">Veer Nari Details</button>
                     </div>
                     <!--ExServiceMan Detail-->
                     <div class="step-content" id="step-1">
                        <h5 class="step-heading mb-3 fw-bold">ExServiceMan Details</h5>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                              <label class="form-label">Sr. No*</label>
                              <input type="text" name="sr_no" class="form-control" value="{{ old('sr_no') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Army No *</label>
                              <input type="text" name="army_no" class="form-control" value="{{ old('army_no') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Rank *</label>
                              <input type="text" name="rank" class="form-control" value="{{ old('rank') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Village</label>
                              <input type="text" name="village" class="form-control" value="{{ old('village') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Post Office</label>
                              <input type="text" name="post_office" class="form-control" value="{{ old('post_office') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Tehsil</label>
                              <input type="text" name="tehsil" class="form-control" value="{{ old('tehsil') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">District</label>
                              <input type="text" name="district" class="form-control" value="{{ old('district') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">State</label>
                              <input type="text" name="state" class="form-control" value="{{ old('state') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Pin Code</label>
                              <input type="number" name="pin_code" class="form-control" value="{{ old('pin_code') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Mobile Number</label>
                              <input type="number" name="mobile_no" class="form-control" value="{{ old('mobile_no') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Regiment / Corps</label>
                              <input type="text" name="regiment_corps" class="form-control" value="{{ old('regiment_corps') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">DOB</label>
                              <input type="date" name="dob" class="form-control" value="{{ old('dob') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">DOE</label>
                              <input type="date" name="doe" class="form-control" value="{{ old('doe') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">DOR</label>
                              <input type="date" name="dor" class="form-control" value="{{ old('dor') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Education</label>
                              <input type="text" name="education" class="form-control" value="{{ old('education') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Present Occupation</label>
                              <input type="text" name="present_occupation" class="form-control" value="{{ old('present_occupation') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Bank Account Number</label>
                              <input type="text" name="bank_acc_no" class="form-control" value="{{ old('bank_acc_no') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Bank Name</label>
                              <input type="text" name="bank_name" class="form-control" value="{{ old('bank_name') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">IFSC Code</label>
                              <input type="text" name="ifsc_code" class="form-control" value="{{ old('ifsc_code') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">MICR Code</label>
                              <input type="text" name="micr_code" class="form-control" value="{{ old('micr_code') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">ECHS Card Number</label>
                              <input type="text" name="echs_card_no" class="form-control" value="{{ old('echs_card_no') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Aadhar Card Number</label>
                              <input type="text" name="aadhar_card_no" class="form-control" value="{{ old('aadhar_card_no') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Pan Card Number</label>
                              <input type="text" name="pan_card_no" class="form-control" value="{{ old('pan_card_no') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">CSD Card Number</label>
                              <input type="text" name="csd_card_no" class="form-control" value="{{ old('csd_card_no') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Decorator Soldier</label>
                              <input type="text" name="decorator_soldier" class="form-control" value="{{ old('decorator_soldier') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Disabled</label>
                              <input type="text" name="disabled" class="form-control" value="{{ old('disabled') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Registration on the DGR Portal</label>
                              <input type="text" name="reg_on_dgr_portal" class="form-control" value="{{ old('reg_on_dgr_portal') }}">
                           </div>

                        </div>
                        <!--Photograph section-->
                        <div class="row">
                            <div class="col-md-12 mb-3 d-flex align-items-start">
                                <div class="me-3" style="width:31%;">
                                    <label>Photograph</label>
                                    <input type="file" name="image" class="form-control upload-input">
                                </div>
                                <div class="preview-box"></div>
                            </div>
                            <div class="col-md-12 mb-3 d-flex align-items-start">
                                <div class="me-3" style="width: 31%;">
                                    <label>Aadhar Card</label>
                                    <input type="file" name="aadhar_image" class="form-control upload-input">
                                </div>
                                <div class="preview-box"></div>
                            </div>
                            <div class="col-md-12 mb-3 d-flex align-items-start">
                                <div class="me-3" style="width:31%;">
                                    <label>PAN Card</label>
                                    <input type="file" name="pan_image" class="form-control upload-input">
                                </div>
                                <div class="preview-box"></div>
                            </div>
                        </div>
                        <!--End photograph section-->
                     </div>
                     <!--Spouse Details-->
                     <div class="step-content d-none" id="step-2">
                        <h5 class="step-heading mb-3 fw-bold">Spouse Details</h5>
                        <div class="row">
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" name="spouse_name" class="form-control" value="{{ old('spouse_name') }}">
                           </div>
                            <div class="col-md-4 mb-3">
                              <label class="form-label">Address</label>
                              <input type="text" name="spouse_address" class="form-control" value="{{ old('spouse_address') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">DOB</label>
                              <input type="date" name="spouse_dob" class="form-control" value="{{ old('spouse_dob') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Eucation</label>
                              <input type="text" name="spouse_education" class="form-control" value="{{ old('spouse_education') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Mobile</label>
                              <input type="number" name="spouse_mobile" class="form-control" value="{{ old('spouse_mobile') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Aadhar Card Number</label>
                              <input type="text" name="spouse_aadhar_card" class="form-control" value="{{ old('spouse_aadhar_card') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Pan Card Number</label>
                              <input type="text" name="spouse_pan_card" class="form-control" value="{{ old('spouse_pan_card') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">ECHS Card Number</label>
                              <input type="text" name="spouse_echs_card" class="form-control" value="{{ old('spouse_echs_card') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">CSD Card Number</label>
                              <input type="text" name="spouse_csd_card" class="form-control" value="{{ old('spouse_csd_card') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Bank Account Number</label>
                              <input type="text" name="spouse_bank_acc_no" class="form-control" value="{{ old('spouse_bank_acc_no') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Bank Number</label>
                              <input type="text" name="spouse_bank_name" class="form-control" value="{{ old('spouse_bank_name') }}">
                           </div>
                           <div class="col-md-4 mb-3"> 
                              <label class="form-label">IFSC Code</label>
                              <input type="text" name="spouse_ifsc_code" class="form-control" value="{{ old('spouse_ifsc_code') }}">
                           </div>
                           <div class="col-md-4 mb-3"> 
                              <label class="form-label">MICR Code</label>
                              <input type="text" name="spouse_micr_code" class="form-control" value="{{ old('spouse_micr_code') }}">
                           </div>
                        </div>
                        <!--Photograph section-->
                        <div class="row">
                            <div class="col-md-12 mb-3 d-flex align-items-start">
                                <div class="me-3" style="width:31%;">
                                    <label>Photograph</label>
                                    <input type="file" name="spouse_image" class="form-control upload-input">
                                </div>
                                <div class="preview-box"></div>
                            </div>
                            <div class="col-md-12 mb-3 d-flex align-items-start">
                                <div class="me-3" style="width: 31%;">
                                    <label>Aadhar Card</label>
                                    <input type="file" name="spouse_aadhar_image" class="form-control upload-input">
                                </div>
                                <div class="preview-box"></div>
                            </div>
                            <div class="col-md-12 mb-3 d-flex align-items-start">
                                <div class="me-3" style="width:31%;">
                                    <label>PAN Card</label>
                                    <input type="file" name="spouse_pan_image" class="form-control upload-input">
                                </div>
                                <div class="preview-box"></div>
                            </div>
                        </div>
                        <!--End photograph section-->
                     </div>
                     <!--Father Details-->
                     <div class="step-content d-none" id="step-3">
                        <h5 class="step-heading mb-3 fw-bold">Father Details</h5>
                        <div class="row">
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" name="father_name" class="form-control" value="{{ old('father_name') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Address</label>
                              <input type="text" name="father_address" class="form-control" value="{{ old('father_address') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">DOB</label>
                              <input type="date" name="father_dob" class="form-control" value="{{ old('father_dob') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Education</label>
                              <input type="text" name="father_education" class="form-control" value="{{ old('father_education') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Mobile Number</label>
                              <input type="number" name="father_mobile" class="form-control" value="{{ old('father_mobile') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Aadhar Card Number</label>
                              <input type="text" name="father_aadhar_card" class="form-control" value="{{ old('father_aadhar_card') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Pan Card Number</label>
                              <input type="text" name="father_pan_card" class="form-control" value="{{ old('father_pan_card') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">ECHS Card Number</label>
                              <input type="text" name="father_echs_card" class="form-control" value="{{ old('father_echs_card') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">CSD Card Number</label>
                              <input type="text" name="father_csd_card" class="form-control" value="{{ old('father_csd_card') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Bank Account Number</label>
                              <input type="text" name="father_bank_acc_no" class="form-control" value="{{ old('father_bank_acc_no') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Bank Name</label>
                              <input type="text" name="father_bank_name" class="form-control" value="{{ old('father_bank_name') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">IFSC Code</label>
                              <input type="text" name="father_ifsc_code" class="form-control" value="{{ old('father_ifsc_code') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">MICR Code</label>
                              <input type="text" name="father_micr_code" class="form-control" value="{{ old('father_micr_code') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Choose Photograph</label>
                              <input type="file" name="father_image" class="form-control" value="{{ old('father_image') }}">
                           </div>
                        </div>
                     </div>
                     <!--Mother Details-->
                     <div class="step-content d-none" id="step-4">
                        <h5 class="step-heading mb-3 fw-bold">Mother Details</h5>
                        <div class="row">
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" name="mother_name" class="form-control" value="{{ old('mother_name') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Address</label>
                              <input type="text" name="mother_address" class="form-control" value="{{ old('mother_address') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">DOB</label>
                              <input type="date" name="mother_dob" class="form-control" value="{{ old('mother_dob') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Education</label>
                              <input type="text" name="mother_education" class="form-control" value="{{ old('mother_education') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Mobile Number</label>
                              <input type="number" name="mother_mobile" class="form-control" value="{{ old('mother_mobile') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Aadhar Card Number</label>
                              <input type="text" name="mother_aadhar_card" class="form-control" value="{{ old('mother_aadhar_card') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Pan Card</label>
                              <input type="text" name="mother_pan_card" class="form-control" value="{{ old('mother_pan_card') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">ECHS Card Number</label>
                              <input type="text" name="mother_echs_card" class="form-control" value="{{ old('mother_echs_card') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">CSD Card Number</label>
                              <input type="text" name="mother_csd_card" class="form-control" value="{{ old('mother_csd_card') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Bank Account Number</label>
                              <input type="text" name="mother_bank_acc_no" class="form-control" value="{{ old('mother_bank_acc_no') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Bank Name</label>
                              <input type="text" name="mother_bank_name" class="form-control" value="{{ old('mother_bank_name') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">IFSC Code</label>
                              <input type="text" name="mother_ifsc_code" class="form-control" value="{{ old('mother_ifsc_code') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">MICR Code</label>
                              <input type="text" name="mother_micr_code" class="form-control" value="{{ old('mother_micr_code') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Choose Photograph</label>
                              <input type="file" name="mother_image" class="form-control" value="{{ old('mother_image') }}">
                           </div>
                        </div>
                     </div>
                     <!--Widow Details-->
                     <div class="step-content d-none" id="step-5">
                        <h5 class="step-heading mb-3 fw-bold">Widow Details</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" name="window_name" class="form-control" value="{{ old('window_name') }}">
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="form-label">DOD</label>
                              <input type="date" name="date_of_death" class="form-control" value="{{ old('date_of_death') }}">
                           </div>
                            <div class="col-md-6 mb-3">
                              <label class="form-label">Choose Photograph</label>
                              <input type="file" name="window_image" class="form-control" value="{{ old('window_image') }}">
                           </div>
                        </div>
                     </div>
                     <!--Veer Nari Details-->
                     <div class="step-content d-none" id="step-6">
                        <h5 class="step-heading mb-3 fw-bold">Veer Nari Details</h5>
                        <div class="row">
                           <div class="col-md-6 mb-3">
                              <label>Name</label>
                              <input type="text" name="veer_nari_name" class="form-control" value="{{ old('veer_nari_name') }}">
                           </div>
                           <div class="col-md-6 mb-3">
                              <label>Expose Year</label>
                              <input type="date" name="veer_nari_expose_year" class="form-control" value="{{ old('veer_nari_expose_year') }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Choose Photograph</label>
                              <input type="file" name="veer_nari_image" class="form-control" value="{{ old('veer_nari_image') }}">
                           </div>
                        </div>
                     </div>
                     <!--Navigation Buttons -->
                     <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary" id="prevBtn">Prev</button>
                        <button type="button" class="btn btn-primary" id="nextBtn">Next</button>
                        <button type="submit" class="btn btn-success d-none" id="submitBtn">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    let currentStep = 1;
    function showStep(step) {
        $('.step-content').addClass('d-none');
        $('#step-' + step).removeClass('d-none');
    
        $('.step-btn').removeClass('active');
        $('.step-btn[data-step="' + step + '"]').addClass('active');
    
        $('#prevBtn').toggle(step > 1);
        if (step === $('.step-btn').length) {
            $('#nextBtn').hide();
            $('#submitBtn').removeClass('d-none');
        } else {
            $('#nextBtn').show();
            $('#submitBtn').addClass('d-none');
        }
    }
   
    $('#nextBtn').on('click', function () {
        if (currentStep < $('.step-btn').length) {
            currentStep++;
            showStep(currentStep);
        }
    });
   
    $('#prevBtn').on('click', function () {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    });
   
    $('.step-btn').on('click', function () {
        currentStep = parseInt($(this).data('step'));
        showStep(currentStep);
    });
   
    $(document).ready(function () {
        showStep(currentStep);
    });
</script>
<script>
    $(document).ready(function() {
        $('input[type="file"]').each(function() {
            let fileInput = $(this);
            fileInput.on('change', function(e) {
                const file = e.target.files[0];
                if (!file) return;
                fileInput.next('.upload-preview').remove();
                const previewContainer = $('<div class="upload-preview"></div>');
                const progress = $('<div class="progress"><div class="progress-bar"></div></div>');
                const removeBtn = $('<button type="button" class="remove-btn">&times;</button>');
    
                fileInput.after(previewContainer);
                previewContainer.html(progress);
    
                let progressVal = 0;
                const progressInterval = setInterval(() => {
                    progressVal += 5;
                    progress.find('.progress-bar').css('width', progressVal + '%');
                    if (progressVal >= 100) {
                        clearInterval(progressInterval);
    
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            previewContainer.html(`
                                <img src="${e.target.result}" alt="Preview">
                                <div class="mt-1 small text-muted">${file.name}</div>
                            `);
                            previewContainer.append(removeBtn);
                        };
                        reader.readAsDataURL(file);
                    }
                }, 80); 
    
                removeBtn.on('click', function() {
                    previewContainer.remove();
                    fileInput.val('');
                });
            });
        });
    });
</script>
@endsection