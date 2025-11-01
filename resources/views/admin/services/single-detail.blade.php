@extends('admin.layouts.master')

@section('content')
<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card shadow-sm">
                   <h5 class="step-heading mb-3 fw-bold">Service Details</h5>
               <div class="card-body">
                  
                  {{-- 🔹 ExServiceMan Details --}}
                  <div class="mb-5">
                     <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">ExServiceMan Details</h5>
                     <div class="row">
                        <div class="col-md-4 mb-3"><strong>Sr. No:</strong> {{ $service->sr_no }}</div>
                        <div class="col-md-4 mb-3"><strong>Army No:</strong> {{ $service->army_no }}</div>
                        <div class="col-md-4 mb-3"><strong>Rank:</strong> {{ $service->rank }}</div>
                        <div class="col-md-4 mb-3"><strong>Name:</strong> {{ $service->name }}</div>
                        <div class="col-md-4 mb-3"><strong>Village:</strong> {{ $service->village }}</div>
                        <div class="col-md-4 mb-3"><strong>Post Office:</strong> {{ $service->post_office }}</div>
                        <div class="col-md-4 mb-3"><strong>Tehsil:</strong> {{ $service->tehsil }}</div>
                        <div class="col-md-4 mb-3"><strong>District:</strong> {{ $service->district }}</div>
                        <div class="col-md-4 mb-3"><strong>State:</strong> {{ $service->state }}</div>
                        <div class="col-md-4 mb-3"><strong>Pin Code:</strong> {{ $service->pin_code }}</div>
                        <div class="col-md-4 mb-3"><strong>Mobile No:</strong> {{ $service->mobile_no }}</div>
                        <div class="col-md-4 mb-3"><strong>Regiment / Corps:</strong> {{ $service->regiment_corps }}</div>
                        <div class="col-md-4 mb-3"><strong>DOB:</strong> {{ $service->dob }}</div>
                        <div class="col-md-4 mb-3"><strong>DOE:</strong> {{ $service->doe }}</div>
                        <div class="col-md-4 mb-3"><strong>DOR:</strong> {{ $service->dor }}</div>
                        <div class="col-md-4 mb-3"><strong>Education:</strong> {{ $service->education }}</div>
                        <div class="col-md-4 mb-3"><strong>Present Occupation:</strong> {{ $service->present_occupation }}</div>
                        <div class="col-md-4 mb-3"><strong>Bank Account No:</strong> {{ $service->bank_acc_no }}</div>
                        <div class="col-md-4 mb-3"><strong>Bank Name:</strong> {{ $service->bank_name }}</div>
                        <div class="col-md-4 mb-3"><strong>IFSC Code:</strong> {{ $service->ifsc_code }}</div>
                        <div class="col-md-4 mb-3"><strong>MICR Code:</strong> {{ $service->micr_code }}</div>
                        <div class="col-md-4 mb-3"><strong>ECHS Card No:</strong> {{ $service->echs_card_no }}</div>
                        <div class="col-md-4 mb-3"><strong>Aadhar No:</strong> {{ $service->aadhar_card_no }}</div>
                        <div class="col-md-4 mb-3"><strong>PAN No:</strong> {{ $service->pan_card_no }}</div>
                        <div class="col-md-4 mb-3"><strong>CSD Card No:</strong> {{ $service->csd_card_no }}</div>
                        <div class="col-md-4 mb-3"><strong>Decorator Soldier:</strong> {{ $service->decorator_soldier }}</div>
                        <div class="col-md-4 mb-3"><strong>Disabled:</strong> {{ $service->disabled }}</div>
                        <div class="col-md-4 mb-3"><strong>DGR Portal:</strong> {{ $service->reg_on_dgr_portal }}</div>

                      <!-- Images section at the end -->
    <div class="row mt-4 text-left">
        @if($service->image)
        <div class="col-md-4">
            <strong>Photograph:</strong><br>
            <img src="{{ asset('public/uploads/ex-images/'.$service->image) }}" alt="Photo" class="img-thumbnail shadow-sm" width="150">
        </div>
        @endif

        @if($service->image)
        <div class="col-md-4">
            <strong>Aadhar Card:</strong><br>
            <img src="{{ asset('public/uploads/ex-images/'.$service->image) }}" alt="Aadhar" class="img-thumbnail shadow-sm" width="150">
        </div>
        @endif

        @if($service->image)
        <div class="col-md-4">
            <strong>PAN Card:</strong><br>
            <img src="{{ asset('public/uploads/ex-images/'.$service->image) }}" alt="PAN" class="img-thumbnail shadow-sm" width="150">
        </div>
        @endif
                     </div>
                  </div></br></br>

                  {{-- 🔹 Spouse Details --}}
                  <div class="mb-5">
                     <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Spouse Details</h5>
                     <div class="row">
                        <div class="col-md-4 mb-3"><strong>Name:</strong> {{ $service->spouse_name }}</div>
                        <div class="col-md-4 mb-3"><strong>Address:</strong> {{ $service->spouse_address }}</div>
                        <div class="col-md-4 mb-3"><strong>DOB:</strong> {{ $service->spouse_dob }}</div>
                        <div class="col-md-4 mb-3"><strong>Education:</strong> {{ $service->spouse_education }}</div>
                        <div class="col-md-4 mb-3"><strong>Mobile:</strong> {{ $service->spouse_mobile }}</div>
                        <div class="col-md-4 mb-3"><strong>Aadhar:</strong> {{ $service->spouse_aadhar_card }}</div>
                        <div class="col-md-4 mb-3"><strong>PAN:</strong> {{ $service->spouse_pan_card }}</div>
                        <div class="col-md-4 mb-3"><strong>ECHS:</strong> {{ $service->spouse_echs_card }}</div>
                        <div class="col-md-4 mb-3"><strong>CSD:</strong> {{ $service->spouse_csd_card }}</div>
                        @if($service->spouse_image)
                        <div class="col-md-4 text-center">
                           <strong>Photograph:</strong><br>
                           <img src="{{ asset('uploads/service/'.$service->spouse_image) }}" class="img-thumbnail" width="120">
                        </div>
                        @endif
                     </div>
                  </div>

                  {{-- 🔹 Father Details --}}
                  <div class="mb-5">
                     <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Father Details</h5>
                     <div class="row">
                        <div class="col-md-4 mb-3"><strong>Name:</strong> {{ $service->father_name }}</div>
                        <div class="col-md-4 mb-3"><strong>Address:</strong> {{ $service->father_address }}</div>
                        <div class="col-md-4 mb-3"><strong>DOB:</strong> {{ $service->father_dob }}</div>
                        <div class="col-md-4 mb-3"><strong>Education:</strong> {{ $service->father_education }}</div>
                        <div class="col-md-4 mb-3"><strong>Mobile:</strong> {{ $service->father_mobile }}</div>
                        @if($service->father_image)
                        <div class="col-md-4 text-center">
                           <strong>Photograph:</strong><br>
                           <img src="{{ asset('uploads/service/'.$service->father_image) }}" class="img-thumbnail" width="120">
                        </div>
                        @endif
                     </div>
                  </div>

                  {{-- 🔹 Mother Details --}}
                  <div class="mb-5">
                     <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Mother Details</h5>
                     <div class="row">
                        <div class="col-md-4 mb-3"><strong>Name:</strong> {{ $service->mother_name }}</div>
                        <div class="col-md-4 mb-3"><strong>Address:</strong> {{ $service->mother_address }}</div>
                        <div class="col-md-4 mb-3"><strong>DOB:</strong> {{ $service->mother_dob }}</div>
                        @if($service->mother_image)
                        <div class="col-md-4 text-center">
                           <strong>Photograph:</strong><br>
                           <img src="{{ asset('uploads/service/'.$service->mother_image) }}" class="img-thumbnail" width="120">
                        </div>
                        @endif
                     </div>
                  </div>

                  {{-- 🔹 Widow Details --}}
                  <div class="mb-5">
                     <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Widow Details</h5>
                     <div class="row">
                        <div class="col-md-6 mb-3"><strong>Name:</strong> {{ $service->window_name }}</div>
                        <div class="col-md-6 mb-3"><strong>Date of Death:</strong> {{ $service->date_of_death }}</div>
                        @if($service->window_image)
                        <div class="col-md-4 text-center">
                           <strong>Photograph:</strong><br>
                           <img src="{{ asset('uploads/service/'.$service->window_image) }}" class="img-thumbnail" width="120">
                        </div>
                        @endif
                     </div>
                  </div>

                  {{-- 🔹 Veer Nari Details --}}
                  <div class="mb-3">
                     <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Veer Nari Details</h5>
                     <div class="row">
                        <div class="col-md-6 mb-3"><strong>Name:</strong> {{ $service->veer_nari_name }}</div>
                        <div class="col-md-6 mb-3"><strong>Expose Year:</strong> {{ $service->veer_nari_expose_year }}</div>
                        @if($service->veer_nari_image)
                        <div class="col-md-4 text-center">
                           <strong>Photograph:</strong><br>
                           <img src="{{ asset('uploads/service/'.$service->veer_nari_image) }}" class="img-thumbnail" width="120">
                        </div>
                        @endif
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
