@extends('admin.layouts.master')
@section('content')
<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">

            <!-- Success Message -->
            @include('admin.notification')

            <div class="card shadow-sm">
               <div class="card-header bg-primary text-white">
                  <h4 class="card-title mb-0">
                     <i class="fas fa-ribbon me-2"></i> Edit Widow
                  </h4>
               </div>

               <div class="card-body">
                  <form id="captureForm" action="{{ route('admin.update.widow', $service_detail->id) }}" method="POST" enctype="multipart/form-data">
                     @csrf

                     <!-- Widow Details -->
                     <div class="step-content" id="step-6">
                        <h5 class="step-heading mb-3 fw-bold">Widow Details</h5>

                        <div class="row">
                           <div class="col-md-6 mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" name="window_name" class="form-control"
                                 value="{{ old('window_name', $service_detail->window_name ?? '') }}">
                           </div>

                           <div class="col-md-6 mb-3">
                              <label class="form-label">DOD (Date of Death)</label>
                              <input type="date" name="date_of_death" class="form-control"
                                 value="{{ old('date_of_death', $service_detail->date_of_death ?? '') }}">
                           </div>
                        </div>

                        <!-- Photograph section -->
                        <div class="row">
                           <div class="col-md-4 mb-3">
                              <label>Photograph</label>
                              <input type="file" name="window_image" class="form-control upload-input">
                              @if (!empty($service_detail->window_image))
                                 <div class="mt-2">
                                    <img src="{{ asset('storage/' . $service_detail->window_image) }}" width="120" class="rounded shadow-sm border">
                                 </div>
                              @endif
                           </div>

                           <div class="col-md-4 mb-3">
                              <label>Aadhar Card</label>
                              <input type="file" name="window_aadhar_image" class="form-control upload-input">
                              @if (!empty($service_detail->window_aadhar_image))
                                 <div class="mt-2">
                                    <img src="{{ asset('storage/' . $service_detail->window_aadhar_image) }}" width="120" class="rounded shadow-sm border">
                                 </div>
                              @endif
                           </div>

                           <div class="col-md-4 mb-3">
                              <label>PAN Card</label>
                              <input type="file" name="window_pan_image" class="form-control upload-input">
                              @if (!empty($service_detail->window_pan_image))
                                 <div class="mt-2">
                                    <img src="{{ asset('storage/' . $service_detail->window_pan_image) }}" width="120" class="rounded shadow-sm border">
                                 </div>
                              @endif
                           </div>
                        </div>
                        <!-- End photograph section -->

                     </div>

                     <!-- Submit Button -->
                     <div class="mt-4 text-end">
                        <button type="submit" class="btn btn-success">
                           <i class="fas fa-save me-2"></i> Update
                        </button>
                        <a href="{{ url('admin/widows') }}" class="btn btn-secondary ms-2">
                           <i class="fas fa-arrow-left me-2"></i> Back
                        </a>
                     </div>
                  </form>
               </div>
            </div>

         </div>
      </div>
   </div>
</div>
@endsection
