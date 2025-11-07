@extends('admin.layouts.master')
@section('content')
<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card shadow-sm p-4">
               <h5 class="step-heading mb-3 fw-bold">Service Details</h5>
               <!--tab-->
               <div class="d-flex flex-wrap gap-3 mb-4 step-header">
                  <button type="button" class="btn btn-outline-primary step-btn active" data-step="1">Ex-ServiceMan Details</button>
                  <button type="button" class="btn btn-outline-primary step-btn" data-step="2">Spouse Details</button>
                  <button type="button" class="btn btn-outline-primary step-btn" data-step="3">Father Details</button>
                  <button type="button" class="btn btn-outline-primary step-btn" data-step="4">Mother Details</button>
                  <button type="button" class="btn btn-outline-primary step-btn" data-step="5">Children Details</button>
                  <button type="button" class="btn btn-outline-primary step-btn" data-step="6">Widow Details</button>
                  <button type="button" class="btn btn-outline-primary step-btn" data-step="7">Veer Nari Details</button>
               </div>
               <!--Ex-ServiceMan Details-->  
               <div class="step-content" id="step-1">
                  <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Ex-ServiceMan Details</h5>
                  <div class="row">
                     <div class="col-md-4 mb-3 services1"><strong>Sr. No:</strong> {{ $service_detail->sr_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Army No:</strong> {{ $service_detail->army_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Rank:</strong> {{ $service_detail->rank ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Name:</strong> {{ $service_detail->name ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Village:</strong> {{ $service_detail->village ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Post Office:</strong> {{ $service_detail->post_office ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Tehsil:</strong> {{ $service_detail->tehsil ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>District:</strong> {{ $service_detail->district ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>State:</strong> {{ $service_detail->state ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Pin Code:</strong> {{ $service_detail->pin_code ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Mobile No:</strong> {{ $service_detail->mobile_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Education:</strong> {{ $service_detail->education ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Present Occupation:</strong> {{ $service_detail->present_occupation ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Aadhar No:</strong> {{ $service_detail->aadhar_card_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>PAN No:</strong> {{ $service_detail->pan_card_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>ECHS No:</strong> {{ $service_detail->echs_card_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>CSD No:</strong> {{ $service_detail->csd_card_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Regiment / Corps:</strong> {{ $service_detail->regiment_corps ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>DOB:</strong> {{ \Carbon\Carbon::parse($service_detail->dob)->format('d M, Y') ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>DOE:</strong> {{ \Carbon\Carbon::parse($service_detail->doe)->format('d M, Y') ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>DOR:</strong> {{ \Carbon\Carbon::parse($service_detail->dor)->format('d M, Y') ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Bank Account No:</strong> {{ $service_detail->bank_acc_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Bank Name:</strong> {{ $service_detail->bank_name ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>IFSC Code:</strong> {{ $service_detail->ifsc_code ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>MICR Code:</strong> {{ $service_detail->micr_code ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Decorator Soldier:</strong> {{ $service_detail->decorator_soldier ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>Disabled:</strong> {{ $service_detail->disabled ?? '-' }}</div>
                     <div class="col-md-4 mb-3 services1"><strong>DGR Portal:</strong> {{ $service_detail->reg_on_dgr_portal ?? '-' }}</div>
                  </div>
                  <!-- Images -->
                  <div class="mt-4 services001">
                     <div class="col-md-4 services2">
                        <strong>Photograph:</strong><br><br>
                        @if($service_detail->image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->image) }}" class="img-thumbnail shadow-sm img-thumbnail1" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4 services2">
                        <strong>Aadhar Card:</strong><br><br>
                        @if($service_detail->aadhar_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->aadhar_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else
                           - 
                        @endif
                     </div>
                     <div class="col-md-4 services2">
                        <strong>Pan Card:</strong><br><br>
                        @if($service_detail->pan_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->pan_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4 services2">
                        <strong>Joint Photograph:</strong><br><br>
                        @if($service_detail->joint_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->joint_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4 services2">
                        <strong>Discharge Book:</strong><br><br>
                        @if($service_detail->discharge_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->discharge_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4 services2">
                        <strong>PPO:</strong><br><br>
                        @if($service_detail->ppo_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->ppo_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                  </div>
               </div>
               <!--Spouse Details-->
               <div class="step-content d-none" id="step-2">
                  <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Spouse Details</h5>
                  <div class="row">
                     <div class="col-md-4 mb-3"><strong>Name:</strong> {{ $service_detail->spouse_name ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Address:</strong> {{ $service_detail->spouse_address ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>DOB:</strong> {{ \Carbon\Carbon::parse($service_detail->spouse_dob)->format('d M, Y') ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Education:</strong> {{ $service_detail->spouse_education ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Mobile No:</strong> {{ $service_detail->spouse_mobile ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Aadhar No:</strong> {{ $service_detail->spouse_aadhar_card ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>PAN No:</strong> {{ $service_detail->spouse_pan_card ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>ECHS No:</strong> {{ $service_detail->spouse_echs_card ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>CSD No:</strong> {{ $service_detail->spouse_csd_card ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Bank Account No:</strong> {{ $service_detail->spouse_bank_acc_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Bank Name:</strong> {{ $service_detail->spouse_bank_name ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>IFSC Code:</strong> {{ $service_detail->spouse_ifsc_code ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>MICR Code:</strong> {{ $service_detail->spouse_micr_code ?? '-' }}</div>
                  </div>
                  <div class="row mt-4">
                     <div class="col-md-4">
                        <strong>Photograph:</strong><br>
                        @if($service_detail->spouse_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->spouse_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4">
                        <strong>Aadhar Card:</strong><br>
                        @if($service_detail->spouse_aadhar_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->spouse_aadhar_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4">
                        <strong>Pan Card:</strong><br>
                        @if($service_detail->spouse_pan_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->spouse_pan_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                  </div>
               </div>
               <!--Father Details-->
               <div class="step-content d-none" id="step-3">
                  <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Father Details</h5>
                  <div class="row">
                     <div class="col-md-4 mb-3"><strong>Name:</strong> {{ $service_detail->father_name ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Address:</strong> {{ $service_detail->father_address ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>DOB:</strong> {{ \Carbon\Carbon::parse($service_detail->father_dob)->format('d M, Y') ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Education:</strong> {{ $service_detail->father_education ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Mobile No:</strong> {{ $service_detail->father_mobile ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Aadhar No:</strong> {{ $service_detail->father_aadhar_card ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>PAN No:</strong> {{ $service_detail->father_pan_card ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>ECHS No:</strong> {{ $service_detail->father_echs_card ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>CSD No:</strong> {{ $service_detail->father_csd_card ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Bank Account No:</strong> {{ $service_detail->father_bank_acc_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Bank Name:</strong> {{ $service_detail->father_bank_name ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>IFSC Code:</strong> {{ $service_detail->father_ifsc_code ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>MICR Code:</strong> {{ $service_detail->father_micr_code ?? '-' }}</div>
                  </div>
                  <div class="row mt-4">
                     <div class="col-md-4">
                        <strong>Photograph:</strong><br>
                        @if($service_detail->father_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->father_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4">
                        <strong>Aadhar Card:</strong><br>
                        @if($service_detail->father_aadhar_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->father_aadhar_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4">
                        <strong>Pan Card:</strong><br>
                        @if($service_detail->father_pan_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->father_pan_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                  </div>
               </div>
               <!--Mother Details-->
               <div class="step-content d-none" id="step-4">
                  <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Mother Details</h5>
                  <div class="row">
                     <div class="col-md-4 mb-3"><strong>Name:</strong> {{ $service_detail->mother_name ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Address:</strong> {{ $service_detail->mother_address ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>DOB:</strong> {{ \Carbon\Carbon::parse($service_detail->mother_dob)->format('d M, Y') ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Education:</strong> {{ $service_detail->mother_education ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Mobile No:</strong> {{ $service_detail->mother_mobile ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Aadhar No:</strong> {{ $service_detail->mother_aadhar_card ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>PAN No:</strong> {{ $service_detail->mother_pan_card ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>ECHS No:</strong> {{ $service_detail->mother_echs_card ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>CSD No:</strong> {{ $service_detail->mother_csd_card ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Bank Account No:</strong> {{ $service_detail->mother_bank_acc_no ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>Bank Name:</strong> {{ $service_detail->mother_bank_name ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>IFSC Code:</strong> {{ $service_detail->mother_ifsc_code ?? '-' }}</div>
                     <div class="col-md-4 mb-3"><strong>MICR Code:</strong> {{ $service_detail->mother_micr_code ?? '-' }}</div>
                  </div>
                  <div class="row mt-4">
                     <div class="col-md-4">
                        <strong>Photograph:</strong><br>
                        @if($service_detail->mother_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->mother_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4">
                        <strong>Aadhar Card:</strong><br>
                        @if($service_detail->mother_aadhar_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->mother_aadhar_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4">
                        <strong>Pan Card:</strong><br>
                        @if($service_detail->mother_pan_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->mother_pan_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                  </div>
               </div>
               <!--Children Details -->
               <div class="step-content d-none" id="step-5">
                  <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Children Details</h5>
                  <div class="table-responsive">
                     <table class="table table-bordered" id="childrenTable">
                        <thead class="table-light">
                           <tr>
                              <th>Ser. No</th>
                              <th>Child Name</th>
                              <th>Age</th>
                              <th>Gender</th>
                              <th>Education</th>
                              <th>Occupation</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php $count = 1 @endphp
                           <!--Check if children exists or not-->
                           @if(count($service_detail->children) > 0)
                           <!--Get childrens detail-->
                           @foreach($service_detail->children as $child)
                           <tr>
                              <td >{{ $count++ }}.</td>
                              <td>{{ $child->name }}</td>
                              <td>{{ $child->age }}</td>
                              <td>{{ $child->gender }}</td>
                              <td>{{ $child->education }}</td>
                              <td>{{ $child->occupation }}</td>
                           </tr>
                           @endforeach
                           @else
                              <tr>
                                 <td colspan="5" class="text-center">No Children Found</td>
                              </tr>
                           @endif
                        </tbody>
                     </table>
                  </div>
               </div>
               <!--Widow Details-->
               <div class="step-content d-none" id="step-6">
                  <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Widow Details</h5>
                  <div class="row">
                     <div class="col-md-6 mb-3"><strong>Name:</strong> {{ $service_detail->window_name ?? '-' }}</div>
                     <div class="col-md-6 mb-3"><strong>Date of Death:</strong> {{ \Carbon\Carbon::parse($service_detail->date_of_death)->format('d M, Y') ?? '-' }}</div>
                  </div>
                  <div class="row mt-4">
                     <div class="col-md-4">
                        <strong>Photograph:</strong><br>
                        @if($service_detail->window_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->window_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4">
                        <strong>Aadhar Card:</strong><br>
                        @if($service_detail->window_aadhar_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->window_aadhar_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                     <div class="col-md-4">
                        <strong>Pan Card:</strong><br>
                        @if($service_detail->window_pan_image)
                           <img src="{{ asset('public/uploads/ex-images/'.$service_detail->window_pan_image) }}" class="img-thumbnail shadow-sm" width="80">
                        @else 
                           - 
                        @endif
                     </div>
                  </div>
               </div>
               <!--Veer Nari Details -->
               <div class="step-content d-none" id="step-7">
                  <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Veer Nari Details</h5>
                  <div class="row">
                     <div class="col-md-6 mb-3"><strong>Name:</strong> {{ $service_detail->veer_nari_name ?? '-' }}</div>
                     <div class="col-md-6 mb-3"><strong>Expose Year:</strong> {{ $service_detail->veer_nari_expose_year ?? '-'}}</div>
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