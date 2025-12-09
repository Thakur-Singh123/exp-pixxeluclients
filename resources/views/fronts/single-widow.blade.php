<style>
    .tabs {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .tab {
        background: transparent;
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
        background: #6B8E23;
        color: #fff;
        border-radius: 8px;
    }
    .modal {
        display: flex;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.6);
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
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.3);
        padding: 25px 30px;
        position: relative;
    }
    .close-btn {
        position: absolute;
        top: 0px;
        right: 8px;
        font-size: 50px;
        color: #6b8e23;
        cursor: pointer;
    }
    .card {
        border: 1px solid #e5e5e5;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        margin-bottom: 25px;
    }
    .card-body {
        padding: 20px;
        margin-top: 20px;
    }
    .card-body h5 {
        font-size: 28px;
        text-transform: uppercase;
        text-decoration: underline;
        font-weight: 700;
        text-align: center;
        color: #333333;
        padding-bottom: 8px;
        margin: 0 0 20px 0;
    }
    .detail-row {
        display: flex;
        flex-wrap: wrap;
        gap: 10px 25px;
    }
    .detail-item {
        font-size: 16px;
        margin-bottom: 0;
        flex: 1 1 22%;
        min-width: 200px;
    }
    .detail-item strong {
        font-size: 18px;
    } 
    .mt-4.d-flex {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 20px;
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 20px;
    }
    .mt-4.d-flex strong:before {
        content: '▼';
        position: absolute;
        top: 18px;
        width: 100%;
        margin: 5px auto 0;
    }
    .mt-4.d-flex>div {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 100%;
    }
    .mt-4.d-flex strong {
        font-size: 18px;
        color: #333;
        margin-bottom: 8px;
        position: relative;
    }
    .mt-4.d-flex img {
        width: 99%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        border: 1px solid #ddd;
    }
    .tab-content {
        display: none;
    }
    .tab-content.active {
        display: block;
    }
    .detail-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0;
    }
    .detail-item {
        padding: 10px 12px;
        border-radius: 6px;
        border: 1px solid #fff;
    }
    .detail-item:nth-child(4n-3),
    .detail-item:nth-child(4n-2) {
        background: #ddd;
    }
    .detail-item:nth-child(4n-1),
    .detail-item:nth-child(4n) {
        background: #ddd;
    }
    td.text-center {
        color: red;
        padding: 10px 360px;
        font-size: 12px;
    }
    .detail-item strong {
        font-size: 16px;
    }
</style>
<div class="modal" id="detailModal">
    <div class="modal-content">
        <span class="close-btn" onclick="document.getElementById('detailModal').style.display='none'">&times;</span>
            <!--Tabs-->
            <div class="tabs">
                <div class="tab active" data-tab="w_profile">Widow Profile</div>
                <div class="tab" data-tab="spouse">Spouse</div>
            </div>
            <!--Spouse-->
        <div id="w_profile" class="tab-content active">
            <div class="card-body">
                <!--<h5>Spouse Details</h5>-->
                <div class="detail-row">
                    <div class="detail-item"><strong>Name:</strong> {{ $widow_detail->window_name ?? '-' }}</div>
                    <div class="detail-item"><strong>Date of Death:</strong> {{ $widow_detail->date_of_death ?? '-' }}</div>
                </div>
                <br>
                <div class="mt-4 d-flex">
                    <div>
                        <strong>Photograph:</strong><br>
                        @if($widow_detail->window_image)
                            <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->window_image) }}" class="img-thumbnail">
                        @else
                            -
                        @endif
                    </div>
                    <div>
                        <strong>Aadhar Card:</strong><br>
                        @if($widow_detail->window_aadhar_image)
                            <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->window_aadhar_image) }}" class="img-thumbnail">
                        @else 
                            -
                        @endif
                    </div>
                    <div>
                        <strong>Pan Card:</strong><br>
                        @if($widow_detail->window_pan_image)
                            <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->window_pan_image) }}" class="img-thumbnail">
                        @else 
                            -
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!--Profile-->
        <div id="spouse" class="tab-content">
            <div class="card-body">
                <!-- <h5>Profile Details</h5> -->
                <div class="detail-row">
                    <div class="detail-item"><strong>Army No:</strong> {{ $widow_detail->serviceman_detail->army_no ?? '-' }}</div>
                    <div class="detail-item"><strong>Rank:</strong> {{ $widow_detail->serviceman_detail->rank ?? '-' }}</div>
                    <div class="detail-item"><strong>Name:</strong> {{ $widow_detail->serviceman_detail->name ?? '-' }}</div>
                    <div class="detail-item"><strong>Village:</strong> {{ $widow_detail->serviceman_detail->village ?? '-' }}</div>
                    <div class="detail-item"><strong>Post Office:</strong> {{ $widow_detail->serviceman_detail->post_office ?? '-' }}</div>
                    <div class="detail-item"><strong>Tehsil:</strong> {{ $widow_detail->serviceman_detail->tehsil ?? '-' }}</div>
                    <div class="detail-item"><strong>District:</strong> {{ $widow_detail->serviceman_detail->district ?? '-' }}</div>
                    <div class="detail-item"><strong>State:</strong> {{ $widow_detail->serviceman_detail->state ?? '-' }}</div>
                    <div class="detail-item"><strong>Pin Code:</strong> {{ $widow_detail->serviceman_detail->pin_code ?? '-' }}</div>
                    <div class="detail-item"><strong>Mobile Number:</strong> {{ $widow_detail->serviceman_detail->mobile_no ?? '-' }}</div>
                    <div class="detail-item"><strong>Aadhar Number:</strong> {{ $widow_detail->serviceman_detail->aadhar_card_no ?? '-' }}</div>
                    <div class="detail-item"><strong>PAN Card Number:</strong> {{ $widow_detail->serviceman_detail->pan_card_no ?? '-' }}</div>
                    <div class="detail-item"><strong>ECHS Card Number:</strong> {{ $widow_detail->serviceman_detail->echs_card_no ?? '-' }}</div>
                    <div class="detail-item"><strong>CSD Card Number:</strong> {{ $widow_detail->serviceman_detail->csd_card_no ?? '-' }}</div>
                    <div class="detail-item"><strong>Regiment / Corps:</strong> {{ $widow_detail->serviceman_detail->regiment_corps ?? '-' }}</div>
                    <div class="detail-item"><strong>Date of Birth:</strong>{{ \Carbon\Carbon::parse($widow_detail->serviceman_detail->dob)->format('d M, Y') ?? '-' }}</div>
                    <div class="detail-item"><strong>Date of Enrollment:</strong>{{ \Carbon\Carbon::parse($widow_detail->serviceman_detail->doe)->format('d M, Y') ?? '-' }}</div>
                    <div class="detail-item"><strong>Date of Retirement:</strong>{{ \Carbon\Carbon::parse($widow_detail->serviceman_detail->dor)->format('d M, Y') ?? '-' }}</div>
                    <div class="detail-item"><strong>Bank Account Number:</strong>{{ $widow_detail->serviceman_detail->bank_acc_no ?? '-' }}</div> 
                    <div class="detail-item"><strong>Bank Name:</strong> {{ $widow_detail->serviceman_detail->bank_name ?? '-' }}</div>
                    <div class="detail-item"><strong>IFSC Code:</strong>{{ $widow_detail->serviceman_detail->ifsc_code ?? '-' }}</div>
                    <div class="detail-item"><strong>MICR Code:</strong>{{ $widow_detail->serviceman_detail->micr_code ?? '-' }}</div>
                </div>
                <br>
                <div class="mt-4 d-flex">
                    <div>
                        <strong>Photograph:</strong><br>
                        @if($widow_detail->serviceman_detail->image)
                            <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->image) }}" class="img-thumbnail">
                        @else
                            -
                        @endif
                    </div>
                    <div>
                        <strong>Joint Photograph:</strong><br>
                        @if($widow_detail->serviceman_detail->joint_image)
                            <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->joint_image) }}" class="img-thumbnail">
                        @else 
                            -
                        @endif
                    </div>
                    <div>
                        <strong>Aadhar Card:</strong><br>
                        @if($widow_detail->serviceman_detail->aadhar_image)
                            <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->aadhar_image) }}" class="img-thumbnail">
                        @else
                            -
                        @endif
                    </div>
                    <div>
                        <strong>Pan Card:</strong><br>
                        @if($widow_detail->serviceman_detail->pan_image)
                            <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->pan_image) }}" class="img-thumbnail">
                        @else 
                            -
                        @endif
                    </div>
                    <div>
                        <strong>ECHS Card:</strong><br>
                        @if($widow_detail->serviceman_detail->echs_image)
                            <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->echs_image) }}" class="img-thumbnail">
                        @else 
                            -
                        @endif
                    </div>
                    <div>
                        <strong>CSD Card:</strong><br>
                        @if($widow_detail->serviceman_detail->csd_image)
                            <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->csd_image) }}" class="img-thumbnail">
                        @else 
                            -
                        @endif
                    </div>
                    <div>
                        <strong>Discharge Book:</strong><br>
                        @if($widow_detail->serviceman_detail->discharge_image)
                            <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->discharge_image) }}" class="img-thumbnail">
                        @else 
                            -
                        @endif
                    </div>
                    <div>
                        <strong>PPO:</strong><br>
                        @if($widow_detail->serviceman_detail->ppo_image)
                            <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->ppo_image) }}" class="img-thumbnail">
                        @else 
                            -
                        @endif
                    </div>
                    <div>
                        <strong>Bank Account:</strong><br>
                        @if($widow_detail->serviceman_detail->bank_image)
                            <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->serviceman_detail->bank_image) }}" class="img-thumbnail">
                        @else 
                            -
                        @endif
                    </div>
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