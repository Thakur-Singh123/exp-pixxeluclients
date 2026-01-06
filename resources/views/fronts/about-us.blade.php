@extends('layouts.master')
@section('content')
<div class="container">
    <div class="hero-about">
        <div class="about-image">
            <img src="public/admin/images/award.jpg" alt="GENERAL MANOJ PANDE, PVSM, AVSM, VSM, ADC">
        </div>
        <h3 class="title mt-0 mb-10 text-uppercase text-center">
            <span class="cosa-msg">History</span>
        </h3>
        <div class="dis-message">
            <p>Under the authority of headquarter 21 sub area SOP no. 2010/A4 date 24 March2017, Veteran Sahayta Kendra
                was established at station headquarters Dharamshala with effect from 17July2017, for registration of
                veteran and also addressing issues related to welfare of ESM/Widow/Virnari including girvensiros,
                pension anomalies and other issues!</p>
        </div>


        {{-- ORGANIZATION CHART --}}
        <div class="org-chart">

            <div class="org-main-heading">
                <h2>Organization</h2>
            </div>

            <div class="org-box">Station Commander</div>
            <div class="arrow">↓</div>

            <div class="org-box">Adam Commended</div>
            <div class="arrow">↓</div>

            {{-- HQ FLOW --}}
            <div class="split">
                <div>
                    <div class="arrow">↓</div>
                    <div class="org-box">HQ Section</div>
                </div>

                <div>
                    <div class="arrow">↓</div>
                    <div class="org-box">Q Section</div>
                </div>
                <div>
                    <div class="arrow">↓</div>
                    <div class="org-box">Accounts Section</div>
                </div>

                <div>
                    <div class="arrow">↓</div>
                    <div class="org-box">Store Section</div>
                </div>
            </div>

            {{-- OIC --}}
            <div class="arrow">↓</div>
            <div class="org-box">OIC ECHS Cell – SSO</div>
            <div class="arrow">↓</div>

            {{-- SPLIT CELLS --}}
            <div class="split-1">
                <div>
                    <div class="arrow">↓</div>
                    <div class="org-box">ECHS Cell</div>
                </div>

                <div>
                    <div class="arrow">↓</div>
                    <div class="org-box">VSK Cell</div>
                </div>
            </div>

        </div>

        <div class="content-detail">
            <h2 class="content-heading">Content Us</h2>

            <div class="location-details">
                <p><strong>Location:</strong> Veteran Sahayta Kendra, Station Headquarters, Dharamshala, HP-176215</p>
                <p><strong>Helpline No:</strong> 01892-224330 (OIC VSK)</p>
                <p><strong>Landline No:</strong> 01892-224330 (OIC VSK)</p>
                <p><strong>Email ID:</strong> <a href="mailto:echscelldharamshala@gmail.com">echscelldharamshala@gmail.com</a></p>
            </div>
        </div>
    </div>
</div>

@endsection