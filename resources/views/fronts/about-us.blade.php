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
            <p>Under the authority of HQ 21 Sub Area SOP No. 2010/A4 date 24 March 2017, Veteran Sahayta Kendra
                was established at Station HQ Dharamshala with effect from 17 July2017, for registration of
                veteran and also addressing issues related to welfare of ESM/Widows/Veer Naris including grievances,
                pension anomalies and other issues!</p>
        </div>


        {{-- ORGANIZATION CHART --}}
        <div class="org-chart">

            <div class="org-main-heading">
                <h2>Organization</h2>
            </div>

            <div class="org-box">Station Commander</div>
            <div class="arrow">↓</div>

            <div class="org-box">Adm Comdt</div>
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

        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-11 col-10 bg-white border p-4">

                    <!-- TITLE -->
                    <h5 class="text-center fw-bold text-uppercase mb-3 fs-2">
                        Area of STN HQ Dharamsala
                    </h5>

                    <!-- SUB TITLE -->
                    <p class="text-center small fw-semibold mb-4 fs-4">
                        Kangra Tehsil Map
                    </p>

                    <!-- MAP IMAGE -->
                    <div class="text-center mb-4">
                        <img src="{{ asset('public/admin/images/kangra_map.jpeg') }}"
                            alt="Area of STN HQ Dharamsala Map" class="img-fluid border">
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 col-8 bg-white border p-4">

                    <!-- TITLE -->
                    <h6 class="text-center fw-bold text-uppercase mb-1 fs-2">
                        Dependency State: STN HQ Dharamsala
                    </h6>

                    <h6 class="text-center fw-bold text-uppercase text-decoration-underline mb-4 fs-4">
                        Summary
                    </h6>

                    <!-- TABLE -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm align-middle text-center fs-6">
                            <thead>
                                <tr>
                                    <th>Ser No</th>
                                    <th>Name of Tehsil</th>
                                    <th>No of ESM</th>
                                    <th>No of Widows</th>
                                    <th>No of Veer Naris</th>
                                    <th>Dependents</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-start">Shahpur (Distt-Kangra)</td>
                                    <td>1849</td>
                                    <td>561</td>
                                    <td>08</td>
                                    <td>2389</td>
                                    <td>4807</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="text-start">Jawali</td>
                                    <td>1407</td>
                                    <td>314</td>
                                    <td>07</td>
                                    <td>1398</td>
                                    <td>3126</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="text-start">Harchakian</td>
                                    <td>361</td>
                                    <td>62</td>
                                    <td>03</td>
                                    <td>498</td>
                                    <td>924</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="text-start">Dharamsala</td>
                                    <td>262</td>
                                    <td>116</td>
                                    <td>03</td>
                                    <td>203</td>
                                    <td>584</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="text-start">Shunta (Distt-Chamba)</td>
                                    <td>438</td>
                                    <td>142</td>
                                    <td>06</td>
                                    <td>787</td>
                                    <td>1373</td>
                                </tr>
                                <tr class="fw-bold">
                                    <td colspan="2">Grand Total</td>
                                    <td>4317</td>
                                    <td>1195</td>
                                    <td>27</td>
                                    <td>5275</td>
                                    <td>10814</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="content-detail">
            <h2 class="content-heading">Contact Us</h2>

            <div class="location-details">
                <p><strong>Location:</strong> Veteran Sahayta Kendra, Station Headquarters, Dharamshala, HP-176215</p>
                <p><strong>Helpline No:</strong> 7834023404 </p>
                <p><strong>Landline No:</strong> 01892-220216 </p>
                <p><strong>Email ID:</strong> 
                    <a href="mailto:echscelldharamshala@gmail.com">echscelldharamshala@gmail.com</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection