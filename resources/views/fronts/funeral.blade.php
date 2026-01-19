@extends('layouts.master')
@section('content')



<ul class="nav nav-tabs" id="mainTabs" role="tablist">

    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="adlrs-tab" data-bs-toggle="tab" data-bs-target="#adlrs" type="button"
            role="tab" aria-controls="adlrs" aria-selected="true">
            ADLRS
        </button>
    </li>

    <li class="nav-item" role="presentation">
        <button class="nav-link" id="demise-tab" data-bs-toggle="tab" data-bs-target="#demise" type="button" role="tab"
            aria-controls="demise" aria-selected="false">
            Demise Grant
        </button>
    </li>

    <li class="nav-item" role="presentation">
        <button class="nav-link" id="military-tab" data-bs-toggle="tab" data-bs-target="#military" type="button"
            role="tab" aria-controls="military" aria-selected="false">
            Military Funeral
        </button>
    </li>

</ul>


<!-- PAGE TITLE -->


<div class="tab-content mt-4" id="mainTabsContent">

    <!-- ADLRS TAB -->
    <div class="tab-pane fade show active" id="adlrs" role="tabpanel" aria-labelledby="adlrs-tab">
        <h2>ADLRS</h2>
        <div class="main-adlrs">
            <span class="adlrs-content">
                As per Army HQ letter No B/45322/AG/ADLRS/R&W-4 dated 8 July 2016. On behalf of (COAS)
                ADLRS
                ceremony is being organised and RS 10,000/- is being paid to NOK on death of ESM. The following documents are required for
                grant of ADLRS. The details is as under:- <strong> <br> 1. Personal Application <br>2. Copy of Discharge Book <br> 3. Copy of PPO <br> 4. Copy of
                    Death Certificate <br> 5. Copy
                    of
                    Aadhar Card of NOK <br> 6. Copy of Bankers details of NOK <br> 7. Copy of CSD Cards both (Liq and Grocery)<br>
                    
                </strong>
            </span>
        </div>
        <!-- TABLE SECTION -->
        <div class="table-box">

            <div class="table-controls">
                <div>
                    <label>Entries Per Page</label>
                    <select>
                        <option>50</option>
                        <option>25</option>
                        <option>10</option>
                    </select>
                </div>

                <div>
                    <label>Search:</label>
                    <input type="text" placeholder="">
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Year</th>
                        <th>NOK</th>
                        <th>Number of Amount</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Current year</td>
                        <td>114</td>
                        <td>11,40,000</td>
                    </tr>
                </tbody>
            </table>

        </div>

        


    </div>

    <!-- DEMISE TAB -->
    <div class="tab-pane fade" id="demise" role="tabpanel" aria-labelledby="demise-tab">

        <h2>Demise Grant</h2>

        <div class="main-adlrs">
            <span class="adlrs-content">
                The following documents are required for payment of Demise Grant: <strong> <br> 1. Personal Application
                    <br> 2.Copy of
                    Discharge Book <br> 3. Copy of PPO <br> 4. Copy of Death Certificate <br> 5. Copy of Aadhar Card of NOK
                    <br> 6. Copy of bankers
                    details of NOK. </strong>
            </span>
        </div>
        <!-- TABLE SECTION -->
        <div class="table-box">

            <div class="table-controls">
                <div>
                    <label>Entries Per Page</label>
                    <select>
                        <option>50</option>
                        <option>25</option>
                        <option>10</option>
                    </select>
                </div>

                <div>
                    <label>Search:</label>
                    <input type="text" placeholder="">
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Financial year</th>
                        <th>NOK</th>
                        <th>Number of Amount</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>2025-26</td>
                        <td>150</td>
                        <td>17,50,000</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

    <!-- MILITARY TAB -->
    <div class="funeral-gallery">
        <div class="tab-pane fade" id="military" role="tabpanel" aria-labelledby="military-tab">
            <h2>Military Funeral</h2>
            <p>Military Funeral is beaing carried out on demise on ESM by the following team:-</p>
            <div class="container">
            <div class="org-chart">

                <div class="org-main-heading">
                    <h2>Organization</h2>
                </div>
                <div class="org-box">Station Commander</div>
                <div class="arrow">↓</div>

                <div class="org-box">Canteen manager</div>
                <div class="arrow">↓</div>

                <div class="org-box">
                    Wellfare officer
                </div>
                <div class="arrow">↓</div>

                <div class="org-box">field officer(not depended on Veteran population) </div>
                <!-- <div class="arrow">↓</div> -->

                <!-- <div class="org-box">Document required for the grant adlrs is as under</div>
                <div class="arrow">↓</div> -->
                <!-- <div class="split-3">
                    <div>
                        <div class="arrow">↓</div>
                        <div class="org-box org-box-1">
                            <p><strong>ESM ISSUES TO BE DISCUSSED DURING INTERACTION</strong></p>

                            <a href="{{ url('public/admin/images/Issues_to_be_Discussed_Form.pdf') }}" target="_blank">
                                <button type="button" class="btn btn-primary view-pdf-01">
                                    View / Download PDF
                                </button>
                            </a>
                        </div>
                    </div>


                    <div>
                        <div class="arrow">↓</div>
                        <div class="org-box org-box-1">
                            <p><strong>FORM FOR GRIEVANCE / COMPLAINT BY ESM OR DEPENDENT OF ESM</strong></p>

                            <a href="{{ url('public/admin/images/Grievance_Complaint_Form.pdf') }}" target="_blank">
                                <button type="button" class="btn btn-primary view-pdf-01">
                                    View / Download PDF
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
 -->




            </div>
        </div>

        </div>
    </div>




    

</div>




@endsection