@extends('layouts.master')
@section('content')


<!-- ECHS Title -->
<div class="container">
    <h1 style="font-size:70px; font-weight:900; color:#cc0000;">ECHS</h1>

    <!-- ONLINE FACILITIES SECTION -->
    <div class="text-center mt-5">
        <div class="online-circle">Online<br>Facilities</div>
    </div>

    <div class="facility-line mt-3"></div>

    <div class="d-flex justify-content-between text-center facility-wrap mt-2">
        <div class="facility-box">Change Polyclinic</div>
        <div class="facility-box">Change in Mob No of Dependents</div>
        <div class="facility-box">Data Amendment</div>
        <div class="facility-box">Card Management</div>
        <div class="facility-box">Claim Processing</div>
    </div>

    <!-- RECENT INITIATIVES -->
    <h4 class="mt-5"><b>Recent Initiatives</b></h4>

    <ul style="line-height: 30px; font-size: 17px;">
        <li>23 New Polyclinics have been sanctioned and 50 upgraded in 2024.</li>
        <li>Enhanced Common Drug List implemented to ensure availability of medicines.</li>
        <li>AIIMS Bhopal, Raipur, Allahabad, Hyderabad, Gorakhpur empanelled last year.</li>
        <li>Upgraded Mobile App designed and developed by ECHS launched.</li>
        <li>E-SeHAT software being developed for telemedicine consultation.</li>
        <li>Medicine delivery through Authorised Local Chemist (ALC) under process.</li>
    </ul>

    <!-- TREATMENT PROCEDURE SECTION -->
    <div class="text-center mt-5">
        <h3 class="fw-bold">TREATMENT PROCEDURE</h3>
    </div>

    <div class="procedure-container">

        <!-- 01 -->
        <div class="circle-box">
            <div class="circle circle-red">01</div>
            <h5 class="mt-2">Routine</h5>
            <p>Treatment at Polyclinic</p>
        </div>

        <!-- 02 -->
        <div class="circle-box">
            <div class="circle circle-blue">02</div>
            <h5 class="mt-2">Specialist Treatment</h5>
            <p>Service / Empanelled Hospital after referral from PC</p>
            <small class="text-primary d-block">Referral exempted above 70 yrs</small>
        </div>

        <!-- 03 -->
        <div class="circle-box">
            <div class="circle circle-orange">03</div>
            <h5 class="mt-2">Emergency Treatment</h5>
            <p>At Empanelled Hospital — no payment</p>
        </div>

        <!-- 04 -->
        <div class="circle-box">
            <div class="circle circle-green">04</div>
            <h5 class="mt-2">Emergency Treatment</h5>
            <p>At Non-Empanelled Hospital — pay & reimburse</p>
        </div>

    </div>
</div>


@endsection