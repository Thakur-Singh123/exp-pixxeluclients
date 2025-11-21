@extends('admin.layouts.master')
@section('content')
<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card shadow-sm p-4">
               <h5 class="step-heading mb-3 fw-bold">Widow Details</h5>
               <!--tab-->
               <div class="d-flex flex-wrap gap-3 mb-4 step-header">
                  <button type="button" class="btn btn-outline-primary step-btn active" data-step="1">Widow Profile</button>
                  <button type="button" class="btn btn-outline-primary step-btn" data-step="2">Spouse</button>
               </div>
               <!--Widow Details-->
               <div class="step-content d-none" id="step-1">
                  <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Widow Details</h5>
                  <div class="row">
                     <div class="col-md-6 mb-3"><strong>Name:</strong> {{ $widow_detail->window_name ?? '-' }}</div>
                     <div class="col-md-6 mb-3"><strong>Date of Death:</strong> {{ \Carbon\Carbon::parse($widow_detail->date_of_death)->format('d M, Y') ?? '-' }}</div>
                  </div>
                  <div class="row mt-4">
                     <div class="col-md-4">
                        <strong>Photograph:</strong><br>
                        @if($widow_detail->window_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->window_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4">
                        <strong>Aadhar Card:</strong><br>
                        @if($widow_detail->window_aadhar_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->window_aadhar_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4">
                        <strong>Pan Card:</strong><br>
                        @if($widow_detail->window_pan_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->window_pan_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                  </div>
               </div>
               <!--Ex-ServiceMan Details-->  
               <div class="step-content" id="step-2">
                  <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Ex-Serviceman Details</h5>
                  <div class="row">
                     <div class="col-md-4 mb-3 services1"><strong>Army No:</strong> {{ $widow_detail->serviceman_detail->army_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Rank:</strong> {{ $widow_detail->serviceman_detail->rank ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Name:</strong> {{ $widow_detail->serviceman_detail->name ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Village:</strong> {{ $widow_detail->serviceman_detail->village ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Post Office:</strong> {{ $widow_detail->serviceman_detail->post_office ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Tehsil:</strong> {{ $widow_detail->serviceman_detail->tehsil ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>District:</strong> {{ $widow_detail->serviceman_detail->district ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>State:</strong> {{ $widow_detail->serviceman_detail->state ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Pin Code:</strong> {{ $widow_detail->serviceman_detail->pin_code ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Mobile Number:</strong> {{ $widow_detail->serviceman_detail->mobile_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Aadhar Number:</strong> {{ $widow_detail->serviceman_detail->aadhar_card_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>PAN Card Number:</strong> {{ $widow_detail->serviceman_detail->pan_card_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>ECHS Card Number:</strong> {{ $widow_detail->serviceman_detail->echs_card_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>CSD Card Number:</strong> {{ $widow_detail->serviceman_detail->csd_card_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Regiment / Corps:</strong> {{ $widow_detail->serviceman_detail->regiment_corps ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Date of Birth:</strong> {{ \Carbon\Carbon::parse($widow_detail->serviceman_detail->dob)->format('d M, Y') ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Date of Enrollment:</strong> {{ \Carbon\Carbon::parse($widow_detail->serviceman_detail->doe)->format('d M, Y') ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Date of Retirement:</strong> {{ \Carbon\Carbon::parse($widow_detail->serviceman_detail->dor)->format('d M, Y') ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Bank Account Number:</strong> {{ $widow_detail->serviceman_detail->bank_acc_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Bank Name:</strong> {{ $widow_detail->serviceman_detail->bank_name ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>IFSC Code:</strong> {{ $widow_detail->serviceman_detail->ifsc_code ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>MICR Code:</strong> {{ $widow_detail->serviceman_detail->micr_code ?? '-' }}</div>
                  </div>
                  <!-- Images -->
                  <div class="mt-4 services001">
                     <div class="col-md-4 services2">
                        <strong>Photograph:</strong><br><br>
                        @if($widow_detail->serviceman_detail->image)
                           <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->image) }}" class="img-thumbnail shadow-sm img-thumbnail1" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4 services2">
                        <strong>Aadhar Card:</strong><br><br>
                        @if($widow_detail->serviceman_detail->aadhar_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->aadhar_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else
                           - 
                        @endif
                     </div>
                     <div class="col-md-4 services2">
                        <strong>Pan Card:</strong><br><br>
                        @if($widow_detail->serviceman_detail->pan_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->pan_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4 services2">
                        <strong>Joint Photograph:</strong><br><br>
                        @if($widow_detail->serviceman_detail->joint_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->joint_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4 services2">
                        <strong>Discharge Book:</strong><br><br>
                        @if($widow_detail->serviceman_detail->discharge_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->discharge_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4 services2">
                        <strong>PPO:</strong><br><br>
                        @if($widow_detail->serviceman_detail->ppo_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->ppo_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                  </div>
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
   }
   $('.step-btn').on('click', function () {
      currentStep = parseInt($(this).data('step'));
      showStep(currentStep);
   });
   $(document).ready(function () {
      showStep(currentStep);
   });
</script>
@endsection