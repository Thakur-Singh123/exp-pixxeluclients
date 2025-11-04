<style>
.tabs {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 20px;
    gap: 10px;
}
.tab {
    background: #0d6efd;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 8px 20px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}
.tab:hover {
    background: #e9ecef;
}
.tab.active {
    background: #ffcc00;
    color: #000;
    border-radius: 8px;
}
.modal {
    display: flex;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.6);
    justify-content: center;
    align-items: center;
    z-index: 999;
}
.modal-content {
    background: #fff;
    border-radius: 10px;
    width: 70%;
    max-width: 1100px;
    height: 85%;
    overflow-y: auto;
    box-shadow: 0 6px 25px rgba(0,0,0,0.3);
    padding: 25px 30px;
    position: relative;
}
.close-btn {
    position: absolute;
    top: 0px;
    right: 8px;
    font-size: 30px;
    color: #ef0707;
    cursor: pointer;
}
.card {
    border: 1px solid #e5e5e5;
    border-radius: 10px;
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    margin-bottom: 25px;
}
.card-body { 
    padding: 20px; 
}
.card-body h5 {
    font-size: 18px;
    font-weight: 700;
    color: #0d6efd;
    padding-bottom: 8px;
    margin: 0 0 10px 2px;
}
.detail-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px 25px;
}
.detail-item {
    font-size: 15px;
    margin-bottom: 10px;
    flex: 1 1 22%;
    min-width: 200px;
}
.mt-4.d-flex {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 25px;
    flex-wrap: wrap;
}
.mt-4.d-flex > div {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
.mt-4.d-flex strong {
    font-size: 15px;
    color: #333;
    margin-bottom: 8px;
}
.mt-4.d-flex img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 10px;
    border: 2px solid #ddd;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}
.tab-content { 
    display: none; 
}
.tab-content.active { 
    display: block; 
}
</style>
<div class="modal" id="detailModal">
   <div class="modal-content">
      <span class="close-btn" onclick="document.getElementById('detailModal').style.display='none'">&times;</span>
      <!--Tabs-->
      <div class="tabs">
         <div class="tab active" data-tab="exservice">Ex-Serviceman</div>
         <div class="tab" data-tab="spouse">Spouse</div>
         <div class="tab" data-tab="father">Father</div>
         <div class="tab" data-tab="mother">Mother</div>
         <div class="tab" data-tab="window">Widow</div>
         <div class="tab" data-tab="veera">Veer Nari</div>
      </div>
      <!--Ex-Serviceman-->
      <div id="exservice" class="tab-content active">
         <div class="card-body">
            <h5>Ex-Serviceman Details</h5>
            <div class="detail-row">
               <div class="detail-item"><strong>Sr. No:</strong> {{ $service_detail->sr_no ?? '-' }}</div>
               <div class="detail-item"><strong>Army No:</strong> {{ $service_detail->army_no ?? '-' }}</div>
               <div class="detail-item"><strong>Rank:</strong> {{ $service_detail->rank ?? '-' }}</div>
               <div class="detail-item"><strong>Name:</strong> {{ $service_detail->name ?? '-' }}</div>
               <div class="detail-item"><strong>Village:</strong> {{ $service_detail->village ?? '-' }}</div>
               <div class="detail-item"><strong>Post Office:</strong> {{ $service_detail->post_office ?? '-' }}</div>
               <div class="detail-item"><strong>Tehsil:</strong> {{ $service_detail->tehsil ?? '-' }}</div>
               <div class="detail-item"><strong>District:</strong> {{ $service_detail->district ?? '-' }}</div>
               <div class="detail-item"><strong>State:</strong> {{ $service_detail->state ?? '-' }}</div>
               <div class="detail-item"><strong>Pin Code:</strong> {{ $service_detail->pin_code ?? '-' }}</div>
               <div class="detail-item"><strong>Mobile No:</strong> {{ $service_detail->mobile_no ?? '-' }}</div>
               <div class="detail-item"><strong>Education:</strong> {{ $service_detail->education ?? '-' }}</div>
               <div class="detail-item"><strong>Present Occupation:</strong> {{ $service_detail->present_occupation ?? '-' }}</div>
               <div class="detail-item"><strong>Aadhar No:</strong> {{ $service_detail->aadhar_card_no ?? '-' }}</div>
               <div class="detail-item"><strong>PAN No:</strong> {{ $service_detail->pan_card_no ?? '-' }}</div>
               <div class="detail-item"><strong>ECHS No:</strong> {{ $service_detail->echs_card_no ?? '-' }}</div>
               <div class="detail-item"><strong>CSD No:</strong> {{ $service_detail->csd_card_no ?? '-' }}</div>
               <div class="detail-item"><strong>Regiment / Corps:</strong> {{ $service_detail->regiment_corps ?? '-' }}</div>
               <div class="detail-item"><strong>DOB:</strong> {{ \Carbon\Carbon::parse($service_detail->dob)->format('d M, Y') ?? '-' }}</div>
               <div class="detail-item"><strong>DOE:</strong> {{ \Carbon\Carbon::parse($service_detail->doe)->format('d M, Y') ?? '-' }}</div>
               <div class="detail-item"><strong>DOR:</strong> {{ \Carbon\Carbon::parse($service_detail->dor)->format('d M, Y') ?? '-' }}</div>
               <div class="detail-item"><strong>Bank Account No:</strong> {{ $service_detail->bank_acc_no ?? '-' }}</div>
               <div class="detail-item"><strong>Bank Name:</strong> {{ $service_detail->bank_name ?? '-' }}</div>
               <div class="detail-item"><strong>IFSC Code:</strong> {{ $service_detail->ifsc_code ?? '-' }}</div>
               <div class="detail-item"><strong>MICR Code:</strong> {{ $service_detail->micr_code ?? '-' }}</div>
               <div class="detail-item"><strong>Decorator Soldier:</strong> {{ $service_detail->decorator_soldier ?? '-' }}</div>
               <div class="detail-item"><strong>Disabled:</strong> {{ $service_detail->disabled ?? '-' }}</div>
               <div class="detail-item"><strong>Registration On DGR Portal:</strong> {{ $service_detail->reg_on_dgr_portal ?? '-' }}</div>
            </div>
            <br>
            <div class="mt-4 d-flex">
               <div>
                  <strong>Photograph:</strong><br>
                  @if($service_detail->image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
               <div>
                  <strong>Aadhar Card:</strong><br>
                  @if($service_detail->aadhar_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->aadhar_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
               <div>
                  <strong>Pan Card:</strong><br>
                  @if($service_detail->pan_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->pan_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
            </div>
         </div>
      </div>
      <!--SPOUSE-->
      <div id="spouse" class="tab-content">
         <div class="card-body">
            <h5>Spouse Details</h5>
            <div class="detail-row">
               <div class="detail-item"><strong>Name:</strong> {{ $service_detail->spouse_name ?? '-' }}</div>
               <div class="detail-item"><strong>Address:</strong> {{ $service_detail->spouse_address ?? '-' }}</div>
               <div class="detail-item"><strong>DOB:</strong> {{ \Carbon\Carbon::parse($service_detail->spouse_dob)->format('d M, Y') ?? '-' }}</div>
               <div class="detail-item"><strong>Education:</strong> {{ $service_detail->spouse_education ?? '-' }}</div>
               <div class="detail-item"><strong>Mobile No:</strong> {{ $service_detail->spouse_mobile ?? '-' }}</div>
               <div class="detail-item"><strong>Aadhar No:</strong> {{ $service_detail->spouse_aadhar_card ?? '-' }}</div>
               <div class="detail-item"><strong>PAN No:</strong> {{ $service_detail->spouse_pan_card ?? '-' }}</div>
               <div class="detail-item"><strong>ECHS No:</strong> {{ $service_detail->spouse_echs_card ?? '-' }}</div>
               <div class="detail-item"><strong>CSD No:</strong> {{ $service_detail->spouse_csd_card ?? '-' }}</div>
               <div class="detail-item"><strong>Bank Account No:</strong> {{ $service_detail->spouse_bank_acc_no ?? '-' }}</div>
               <div class="detail-item"><strong>Bank Name:</strong> {{ $service_detail->spouse_bank_name ?? '-' }}</div>
               <div class="detail-item"><strong>IFSC Code:</strong> {{ $service_detail->spouse_ifsc_code ?? '-' }}</div>
               <div class="detail-item"><strong>MICR Code:</strong> {{ $service_detail->spouse_micr_code ?? '-' }}</div>
            </div>
            <br>
            <div class="mt-4 d-flex">
               <div>
                  <strong>Photograph:</strong><br>
                  @if($service_detail->spouse_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->spouse_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
               <div>
                  <strong>Aadhar Card:</strong><br>
                  @if($service_detail->spouse_aadhar_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->spouse_aadhar_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
               <div>
                  <strong>Pan Card:</strong><br>
                  @if($service_detail->spouse_pan_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->spouse_pan_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
            </div>
         </div>
      </div>
      <!--FATHER-->
      <div id="father" class="tab-content">
         <div class="card-body">
            <h5>Father Details</h5>
            <div class="detail-row">
               <div class="detail-item"><strong>Name:</strong> {{ $service_detail->father_name ?? '-' }}</div>
               <div class="detail-item"><strong>Address:</strong> {{ $service_detail->father_address ?? '-' }}</div>
               <div class="detail-item"><strong>DOB:</strong> {{ \Carbon\Carbon::parse($service_detail->father_dob)->format('d M, Y') ?? '-' }}</div>
               <div class="detail-item"><strong>Education:</strong> {{ $service_detail->father_education ?? '-' }}</div>
               <div class="detail-item"><strong>Mobile No:</strong> {{ $service_detail->father_mobile ?? '-' }}</div>
               <div class="detail-item"><strong>Aadhar No:</strong> {{ $service_detail->father_aadhar_card ?? '-' }}</div>
               <div class="detail-item"><strong>Pan No:</strong> {{ $service_detail->father_pan_card ?? '-' }}</div>
               <div class="detail-item"><strong>ECHS No:</strong> {{ $service_detail->father_echs_card ?? '-' }}</div>
               <div class="detail-item"><strong>CSD No:</strong> {{ $service_detail->father_csd_card ?? '-' }}</div>
               <div class="detail-item"><strong>Bank Account No:</strong> {{ $service_detail->father_bank_acc_no ?? '-' }}</div>
               <div class="detail-item"><strong>Bank Name:</strong> {{ $service_detail->father_bank_name ?? '-' }}</div>
               <div class="detail-item"><strong>IFSC Code:</strong> {{ $service_detail->father_ifsc_code ?? '-' }}</div>
               <div class="detail-item"><strong>MICR Code:</strong> {{ $service_detail->father_micr_code ?? '-' }}</div>
            </div>
            <br>
            <div class="mt-4 d-flex">
               <div>
                  <strong>Photograph:</strong><br>
                  @if($service_detail->father_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->father_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
               <div>
                  <strong>Aadhar Card:</strong><br>
                  @if($service_detail->father_aadhar_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->father_aadhar_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
               <div>
                  <strong>Pan Card:</strong><br>
                  @if($service_detail->father_pan_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->father_pan_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
            </div>
         </div>
      </div>
      <!--MOTHER-->
      <div id="mother" class="tab-content">
         <div class="card-body">
            <h5>Mother Details</h5>
            <div class="detail-row">
               <div class="detail-item"><strong>Name:</strong> {{ $service_detail->mother_name ?? '-' }}</div>
               <div class="detail-item"><strong>Address:</strong> {{ $service_detail->mother_address ?? '-' }}</div>
               <div class="detail-item"><strong>DOB:</strong> {{ \Carbon\Carbon::parse($service_detail->mother_dob)->format('d M, Y') ?? '-' }}</div>
               <div class="detail-item"><strong>Education:</strong> {{ $service_detail->mother_education ?? '-' }}</div>
               <div class="detail-item"><strong>Mobile No:</strong> {{ $service_detail->mother_mobile ?? '-' }}</div>
               <div class="detail-item"><strong>Aadhar No:</strong> {{ $service_detail->mother_aadhar_card ?? '-' }}</div>
               <div class="detail-item"><strong>Pan No:</strong> {{ $service_detail->mother_pan_card ?? '-' }}</div>
               <div class="detail-item"><strong>ECHS No:</strong> {{ $service_detail->mother_echs_card ?? '-' }}</div>
               <div class="detail-item"><strong>CSD No:</strong> {{ $service_detail->mother_csd_card ?? '-' }}</div>
               <div class="detail-item"><strong>Bank Account No:</strong> {{ $service_detail->mother_bank_acc_no ?? '-' }}</div>
               <div class="detail-item"><strong>Bank Name:</strong> {{ $service_detail->mother_bank_name ?? '-' }}</div>
               <div class="detail-item"><strong>IFSC Code:</strong> {{ $service_detail->mother_ifsc_code ?? '-' }}</div>
               <div class="detail-item"><strong>MICR Code:</strong> {{ $service_detail->mother_micr_code ?? '-' }}</div>
            </div>
            <br>
            <div class="mt-4 d-flex">
               <div>
                  <strong>Photograph:</strong><br>
                  @if($service_detail->mother_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->mother_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
               <div>
                  <strong>Aadhar No:</strong><br>
                  @if($service_detail->mother_aadhar_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->mother_aadhar_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
               <div>
                  <strong>Pan Card:</strong><br>
                  @if($service_detail->mother_pan_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->mother_pan_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
            </div>
         </div>
      </div>
      <!-- WINDOW-->
      <div id="window" class="tab-content">
         <div class="card-body">
            <h5>Widow Details</h5>
            <div class="detail-row">
               <div class="detail-item"><strong>Name:</strong> {{ $service_detail->window_name ?? '-' }}</div>
               <div class="detail-item"><strong>Date of Death:</strong> {{ \Carbon\Carbon::parse($service_detail->date_of_death)->format('d M, Y') ?? '-' }}</div>
            </div>
            <br>
            <div class="mt-4 d-flex">
               <div>
                  <strong>Photograph:</strong><br>
                  @if($service_detail->window_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->window_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
               <div>
                  <strong>Aadhar Card:</strong><br>
                  @if($service_detail->window_aadhar_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->window_aadhar_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
               <div>
                  <strong>Pan Card:</strong><br>
                  @if($service_detail->window_pan_image)
                  <img src="{{ asset('public/uploads/ex-images/'.$service_detail->window_pan_image) }}" class="img-thumbnail">
                  @else - @endif
               </div>
            </div>
         </div>
      </div>
      <!--VEER NARI-->
      <div id="veera" class="tab-content">
         <div class="card-body">
            <h5>Veer Nari Details</h5>
            <div class="detail-row">
               <div class="detail-item"><strong>Name:</strong> {{ $service_detail->veer_nari_name ?? '-' }}</div>
               <div class="detail-item"><strong>Expose Year:</strong> {{ $service_detail->veer_nari_expose_year ?? '-' }}</div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   document.querySelectorAll('.tab').forEach(tab => {
       tab.addEventListener('click', () => {
           document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
           document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
           tab.classList.add('active');
           document.getElementById(tab.dataset.tab).classList.add('active');
       });
   });
</script>