@extends('admin.layouts.master')
@section('content')
<style>
   .upload-section {
      margin-top: 15px;   
   }
   .upload-row {
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px dashed #ccc;
      padding-bottom: 10px;
   }
   .upload-field {
      width: 32%;
   }
   .preview-box {
      width: 31%;
      display: flex;
      flex-direction: column; 
      align-items: flex-start;
      justify-content: flex-start;
      gap: 6px;
      padding-top: 4px;
   }
   .preview-label {
      font-weight: 600;
      color: #222;
      font-size: 0.9rem;
      margin-bottom: 2px;
   }
   .preview-img {
      width: 300px;
      height: 180px;
      border-radius: 6px;
      object-fit: cover;
      border: 2px solid #ddd;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
      transition: transform 0.3s ease;
   }
   .no-image-text {
      color: red;
      font-weight: 600;
      font-size: 0.9rem;
      display: inline-block;
      margin-top: 5px;
   }
   td.text-center {
      color: red;
      padding: 10px 360px;
      font-size: 12px;
   }
</style>
<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <!--success message section-->
            @include('admin.notification')
            <div class="card shadow-sm">
               <div class="card-header text-white">
                  <h4 class="card-title mb-0">Edit Ex-Serviceman</h4>
               </div>
               <div class="card-body">
                  <form id="captureForm" action="{{ route('admin.service.update', $service_detail->id) }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <!--Tab-->
                     <div class="d-flex flex-wrap gap-3 mb-4 step-header">
                        <button type="button" class="btn btn-outline-primary step-btn active" data-step="1">Profile</button>
                        <button type="button" class="btn btn-outline-primary step-btn" data-step="2">Address</button>
                        <button type="button" class="btn btn-outline-primary step-btn" data-step="3">Spouse</button>
                     </div>
                     <!--ExServiceMan Detail-->
                     <div class="step-content" id="step-1">
                        <h5 class="step-heading mb-3 fw-bold">Profile Details</h5>
                        <div class="row">
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Army No *</label>
                           <input type="text" class="form-control" value="{{ old('army_no', $service_detail->army_no) }}" disabled>
                           <input type="hidden" name="army_no" value="{{ old('army_no', $service_detail->army_no) }}">
                        </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Rank *</label>
                              <input type="text" name="rank" class="form-control" value="{{ old('rank',$service_detail->rank) }}" placeholder="Enter rank">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" name="name" class="form-control" value="{{ old('name',$service_detail->name) }}" placeholder="Enter name">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Date of Birth</label>
                              <input type="date" name="dob" class="form-control" value="{{ old('dob',$service_detail->dob) }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Date of Enrollment</label>
                              <input type="date" name="doe" class="form-control" value="{{ old('doe',$service_detail->doe) }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Date of Retirement</label>
                              <input type="date" name="dor" class="form-control" value="{{ old('dor',$service_detail->dor) }}">
                           </div>
                          <div class="col-md-4 mb-3">
                           <label class="form-label">ECHS Card Number</label>
                           <input type="text" name="echs_card_no" class="form-control" value="{{ old('echs_card_no',$service_detail->echs_card_no) }}" placeholder="Enter echs card numer">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">CSD Card Number</label>
                           <input type="text" name="csd_card_no" class="form-control" value="{{ old('csd_card_no',$service_detail->csd_card_no) }}" placeholder="Enter csd card numer">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Regiment / Corps</label>
                           <input type="text" name="regiment_corps" class="form-control" value="{{ old('regiment_corps',$service_detail->regiment_corps) }}" placeholder="Enter regiment / corps">
                        </div>

                        </div>
                         <!--Photograph Section-->
                        <div class="row upload-section">
                           <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                              <div class="upload-field">
                                 <label>Photograph</label>
                                 <input type="file" name="image" class="form-control upload-input">
                              </div>
                              <div class="preview-box">
                                 <label class="preview-label">Uploaded Photograph</label>
                                 @if ($service_detail->image)
                                    <img src="{{ asset('public/uploads/ex-images/'.$service_detail->image) }}" class="preview-img">
                                 @else 
                                    <span class="no-image-text">No image found</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                              <div class="upload-field">
                                 <label>Aadhar Card</label>
                                 <input type="file" name="aadhar_image" class="form-control upload-input">
                              </div>
                              <div class="preview-box">
                                 <label class="preview-label">Uploaded Aadhar Card</label>
                                 @if ($service_detail->aadhar_image)
                                    <img src="{{ asset('public/uploads/ex-images/'.$service_detail->aadhar_image) }}" class="preview-img">
                                 @else
                                    <span class="no-image-text">No image found</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                              <div class="upload-field">
                                 <label>PAN Card</label>
                                 <input type="file" name="pan_image" class="form-control upload-input">
                              </div>
                              <div class="preview-box">
                                 <label class="preview-label">Uploaded PAN Card</label>
                                 @if ($service_detail->pan_image)
                                    <img src="{{ asset('public/uploads/ex-images/'.$service_detail->pan_image) }}" class="preview-img">
                                 @else
                                    <span class="no-image-text">No image found</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                              <div class="upload-field">
                                 <label>Joint Photograph</label>
                                 <input type="file" name="joint_image" class="form-control upload-input">
                              </div>
                              <div class="preview-box">
                                 <label class="preview-label">Uploaded Joint Photograph</label>
                                 @if ($service_detail->joint_image)
                                    <img src="{{ asset('public/uploads/ex-images/'.$service_detail->joint_image) }}" class="preview-img">
                                 @else
                                    <span class="no-image-text">No image found</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                              <div class="upload-field">
                                 <label>Discharge Book</label>
                                 <input type="file" name="discharge_image" class="form-control upload-input">
                              </div>
                              <div class="preview-box">
                                 <label class="preview-label">Uploaded Discharge Book</label>
                                 @if ($service_detail->discharge_image)
                                    <img src="{{ asset('public/uploads/ex-images/'.$service_detail->discharge_image) }}" class="preview-img">
                                 @else
                                    <span class="no-image-text">No image found</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                              <div class="upload-field">
                                 <label>PPO</label>
                                 <input type="file" name="ppo_image" class="form-control upload-input">
                              </div>
                              <div class="preview-box">
                                 <label class="preview-label">Uploaded PPO</label>
                                 @if ($service_detail->ppo_image)
                                    <img src="{{ asset('public/uploads/ex-images/'.$service_detail->ppo_image) }}" class="preview-img">
                                 @else
                                    <span class="no-image-text">No image found</span>
                                 @endif
                              </div>
                           </div>
                        </div>
                        <!--end photograph section-->
                     </div>
                  <!--Address Details-->
                  <div class="step-content d-none" id="step-2">
                     <h5 class="step-heading mb-3 fw-bold">Address Details</h5>
                     <div class="row">
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Village</label>
                           <input type="text" name="village" class="form-control" value="{{ old('village',$service_detail->village) }}" placeholder="Enter village">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Post Office</label>
                           <input type="text" name="post_office" class="form-control" value="{{ old('post_office',$service_detail->post_office) }}" placeholder="Enter post office">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Tehsil</label>
                           <input type="text" name="tehsil" class="form-control" value="{{ old('tehsil',$service_detail->tehsil) }}" placeholder="Enter tehsil">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">District</label>
                           <input type="text" name="district" class="form-control" value="{{ old('district',$service_detail->district) }}"  placeholder="Enter district">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">State</label>
                           <input type="text" name="state" class="form-control" value="{{ old('state',$service_detail->state) }}" placeholder="Enter state">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Pin Code Number</label>
                           <input type="number" name="pin_code" class="form-control" value="{{ old('pin_code',$service_detail->pin_code) }}" placeholder="Enter pin code">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Mobile Number</label>
                           <input type="number" name="mobile_no" class="form-control" value="{{ old('mobile_no',$service_detail->mobile_no) }}" placeholder="Enter mobile number">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Aadhar Card Number</label>
                           <input type="text" name="aadhar_card_no" class="form-control" value="{{ old('aadhar_card_no',$service_detail->aadhar_card_no) }}" placeholder="Enter aadhar card number">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Pan Card Number</label>
                           <input type="text" name="pan_card_no" class="form-control" value="{{ old('pan_card_no',$service_detail->pan_card_no) }}" placeholder="Enter pan card number">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Bank Account Number</label>
                           <input type="text" name="bank_acc_no" class="form-control" value="{{ old('bank_acc_no',$service_detail->bank_acc_no) }}" placeholder="Enter bank account number">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Bank Name</label>
                           <input type="text" name="bank_name" class="form-control" value="{{ old('bank_name',$service_detail->bank_name) }}" placeholder="Enter bank name">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">IFSC Code</label>
                           <input type="text" name="ifsc_code" class="form-control" value="{{ old('ifsc_code',$service_detail->ifsc_code) }}" placeholder="Enter ifsc code">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">MICR Code</label>
                           <input type="text" name="micr_code" class="form-control" value="{{ old('micr_code',$service_detail->micr_code) }}" placeholder="Enter micr code">
                        </div>
                     </div>
                  </div>
                     <!--Spouse Details-->
                     <div class="step-content d-none" id="step-3">
                        <h5 class="step-heading mb-3 fw-bold">Spouse Details</h5>
                        <div class="row">
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" name="spouse_name" class="form-control" value="{{ old('spouse_name',$service_detail->spouse_name) }}" placeholder="Enter name">
                           </div>
                            <div class="col-md-4 mb-3">
                              <label class="form-label">Address</label>
                              <input type="text" name="spouse_address" class="form-control" value="{{ old('spouse_address',$service_detail->spouse_address) }}" placeholder="Enter address">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Date of Birth</label>
                              <input type="date" name="spouse_dob" class="form-control" value="{{ old('spouse_dob',$service_detail->spouse_dob) }}">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Mobile Number</label>
                              <input type="number" name="spouse_mobile" class="form-control" value="{{ old('spouse_mobile',$service_detail->spouse_mobile) }}" placeholder="Enter mobile number">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Aadhar Card Number</label>
                              <input type="text" name="spouse_aadhar_card" class="form-control" value="{{ old('spouse_aadhar_card',$service_detail->spouse_aadhar_card) }}" placeholder="Enter aadhar card number">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Pan Card Number</label>
                              <input type="text" name="spouse_pan_card" class="form-control" value="{{ old('spouse_pan_card',$service_detail->spouse_pan_card) }}" placeholder="Enter pan card number">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">ECHS Card Number</label>
                              <input type="text" name="spouse_echs_card" class="form-control" value="{{ old('spouse_echs_card',$service_detail->spouse_echs_card) }}" placeholder="Enter echs card number">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">CSD Card Number</label>
                              <input type="text" name="spouse_csd_card" class="form-control" value="{{ old('spouse_csd_card',$service_detail->spouse_csd_card) }}" placeholder="Enter csd card number">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Bank Account Number</label>
                              <input type="text" name="spouse_bank_acc_no" class="form-control" value="{{ old('spouse_bank_acc_no',$service_detail->spouse_bank_acc_no) }}" placeholder="Enter bank account number">
                           </div>
                           <div class="col-md-4 mb-3">
                              <label class="form-label">Bank Name</label>
                              <input type="text" name="spouse_bank_name" class="form-control" value="{{ old('spouse_bank_name',$service_detail->spouse_bank_name) }}" placeholder="Enter bank name">
                           </div>
                           <div class="col-md-4 mb-3"> 
                              <label class="form-label">IFSC Code</label>
                              <input type="text" name="spouse_ifsc_code" class="form-control" value="{{ old('spouse_ifsc_code',$service_detail->spouse_ifsc_code) }}" placeholder="Enter ifsc code">
                           </div>
                           <div class="col-md-4 mb-3"> 
                              <label class="form-label">MICR Code</label>
                              <input type="text" name="spouse_micr_code" class="form-control" value="{{ old('spouse_micr_code',$service_detail->spouse_micr_code) }}" placeholder="Enter micr code">
                           </div>
                        </div>
                        <!--Photograph section-->
                        <div class="row upload-section">
                           <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                              <div class="upload-field">
                                 <label>Photograph</label>
                                 <input type="file" name="spouse_image" class="form-control upload-input">
                              </div>
                              <div class="preview-box">
                                 <label class="preview-label">Uploaded Photograph</label>
                                 @if ($service_detail->spouse_image)
                                    <img src="{{ asset('public/uploads/ex-images/'.$service_detail->spouse_image) }}" class="preview-img">
                                 @else 
                                    <span class="no-image-text">No image found</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                              <div class="upload-field">
                                 <label>Aadhar Card</label>
                                 <input type="file" name="spouse_aadhar_image" class="form-control upload-input">
                              </div>
                              <div class="preview-box">
                                 <label class="preview-label">Uploaded Aadhar Card</label>
                                 @if ($service_detail->spouse_aadhar_image)
                                    <img src="{{ asset('public/uploads/ex-images/'.$service_detail->spouse_aadhar_image) }}" class="preview-img">
                                 @else
                                    <span class="no-image-text">No image found</span>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                              <div class="upload-field">
                                 <label>PAN Card</label>
                                 <input type="file" name="spouse_pan_image" class="form-control upload-input">
                              </div>
                              <div class="preview-box">
                                 <label class="preview-label">Uploaded PAN Card</label>
                                 @if ($service_detail->spouse_pan_image)
                                    <img src="{{ asset('public/uploads/ex-images/'.$service_detail->spouse_pan_image) }}" class="preview-img">
                                 @else
                                    <span class="no-image-text">No image found</span>
                                 @endif
                              </div>
                           </div>
                        </div>
                        <!--end photograph section-->

                       <table class="table table-bordered" id="childrenTable">
                           <thead class="table-light">
                              <tr>
                                 <th>Sr. No</th>
                                 <th>Child Name</th>
                                 <th>Age</th>
                                 <th>Gender</th>
                                 <th>Education</th>
                                 <th>Occupation</th>
                                 <th style="width: 70px;">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @php $count = 1 @endphp
                              @if(count($service_detail->children) > 0)
                              @foreach($service_detail->children as $child)
                              <tr>
                                 <td>{{ $count++ }}.</td>
                                 <td><input type="text" name="children_name[]" class="form-control" value="{{ $child->name }}" placeholder="Enter children name"></td>
                                 <td><input type="text" name="children_age[]" class="form-control" value="{{ $child->age }}" placeholder="Enter age"></td>
                                 <td>
                                    <select name="children_gender[]" class="form-select">
                                       <option value="">Select</option>
                                       <option value="Male" @if($child->gender == 'Male') selected @endif>Male</option>
                                       <option value="Female" @if($child->gender == 'Female') selected @endif>Female</option>
                                       <option value="Other" @if($child->gender == 'Other') selected @endif>Other</option>
                                    </select>
                                 </td>
                                 <td><input type="text" name="children_education[]" class="form-control" value="{{ $child->education }}" placeholder="Enter education"></td>
                                 <td><input type="text" name="children_occupation[]" class="form-control" value="{{ $child->occupation }}" placeholder="Enter occupation"></td>
                                 <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm removeChildRow">
                                       <i class="fas fa-trash"></i>
                                    </button>
                                 </td>
                              </tr>
                              @endforeach
                              @else
                              <tr>
                                 <td>1.</td>
                                 <td><input type="text" name="children_name[]" class="form-control" placeholder="Enter name"></td>
                                 <td><input type="text" name="children_age[]" class="form-control" placeholder="Enter age"></td>
                                 <td>
                                    <select name="children_gender[]" class="form-select">
                                       <option value="" selected disabled>Select</option>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                       <option value="Other">Other</option>
                                    </select>
                                 </td>
                                 <td><input type="text" name="children_education[]" class="form-control" placeholder="Enter education"></td>
                                 <td><input type="text" name="children_occupation[]" class="form-control" placeholder="Enter occupation"></td>
                                 <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm removeChildRow">
                                       <i class="fas fa-trash"></i>
                                    </button>
                                 </td>
                              </tr>
                              @endif
                           </tbody>
                           <tfoot>
                              <tr>
                                 <td colspan="7" class="text-end">
                                    <button type="button" class="btn btn-success btn-sm addChildRow">
                                       <i class="fas fa-plus"></i> Add Child
                                    </button>
                                 </td>
                              </tr>
                           </tfoot>
                        </table>
                     </div>
                     
                     <!--Navigation Buttons -->
                     <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary" id="prevBtn">Prev</button>
                        <button type="button" class="btn btn-primary" id="nextBtn">Next</button>
                        <button type="submit" class="btn btn-success d-none" id="submitBtn">Update</button>
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
<script>
$(document).ready(function() {
   //Add new row
   $(document).on('click', '.addChildRow', function() {
      let rowCount = $('#childrenTable tbody tr').length + 1;
      let newRow = `
         <tr>
            <td>${rowCount}.</td>
            <td><input type="text" name="children_name[]" class="form-control" placeholder="Enter children name"></td>
            <td><input type="text" name="children_age[]" class="form-control" placeholder="Enter age"></td>
            <td>
               <select name="children_gender[]" class="form-select">
                  <option value="" select disabled>Select</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
               </select>
            </td>
            <td><input type="text" name="children_education[]" class="form-control" placeholder="Enter education"></td>
            <td><input type="text" name="children_occupation[]" class="form-control" placeholder="Enter occupation"></td>
            <td class="text-center">
               <button type="button" class="btn btn-danger btn-sm removeChildRow">
                  <i class="fas fa-trash"></i>
               </button>
            </td>
         </tr>
      `;
      $('#childrenTable tbody').append(newRow);
   });

   //Remove row
   $(document).on('click', '.removeChildRow', function() {
      $(this).closest('tr').remove();

      // Recalculate serial numbers
      $('#childrenTable tbody tr').each(function(index) {
         $(this).find('td:first').text((index + 1) + '.');
      });
   });
});
</script>
@endsection