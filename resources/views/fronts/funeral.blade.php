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
                As per Army Headquarter letter number B/45322/AG/ADLRS/R&W-4 dated 8 july 2016. On behalf of (COAS)
                ADLRs
                ceremony is being organised and RS; 10000 is being paid to NOK on death of EMS. The following document
                the detailed is as under. to be
                produced are grant of ADLRs: <strong> <br> 1. Copy of discharge Book <br> 2. Copy of PPO <br> 3. Copy of
                    Death certificate <br> 4. Copy
                    of
                    Addhar card <br> 5. Copy of bankers details of NOK <br> 6. copy of CSD cards both (Liq and Gross)
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

                <div class="org-box">field officer(not depended on Veteran pollution) </div>
                <div class="arrow">↓</div>

                <div class="org-box">document required for the grant adlrs is as under</div>
                <div class="arrow">↓</div>
                <div class="split">
                    
            <div class="org-box org-box-1">
                <p><strong>ESM ISSUES TO BE DISCUSSED DURING INTERACTION</strong></p>

                <a href="{{ url('public/admin/images/Issues_to_be_Discussed_Form.pdf') }}"
                   target="_blank">
                    <button type="button" class="btn btn-primary view-pdf-01">
                        View / Download PDF
                    </button>
                </a>
            </div>

            <div class="org-box org-box-1">
                <p><strong>FORM FOR GRIEVANCE / COMPLAINT BY ESM OR DEPENDENT OF ESM</strong></p>

                <a href="{{ url('public/admin/images/Grievance_Complaint_Form.pdf') }}"
                   target="_blank">
                    <button type="button" class="btn btn-primary view-pdf-01">
                        View / Download PDF
                    </button>
                </a>
            </div>

                </div>

            </div>
        </div>


    </div>

    <!-- DEMISE TAB -->
    <div class="tab-pane fade" id="demise" role="tabpanel" aria-labelledby="demise-tab">

    <h2>Demise Grant</h2>

        <div class="main-adlrs">
            <span class="adlrs-content">
                The following document are required for payment of demised Grant: <strong> <br> 1. Personal Application
                    <br> 2.Copy of
                    discharge Book <br> 3. Copy of PPO <br> 4. Copy of Death certificate <br> 5. Copy of Addhar card
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
            <div class="row g-3">
                <div class="col-md-4 col-6"><img src="public/admin/images/funeral-1.jpeg" class="img-fluid rounded">
                </div>
                <div class="col-md-4 col-6"><img src="public/admin/images/funeral-2.jpeg" class="img-fluid rounded">
                </div>
                <div class="col-md-4 col-6"><img src="public/admin/images/funeral-3.jpeg" class="img-fluid rounded">
                </div>

                <div class="col-md-4 col-6"><img src="public/admin/images/funeral-4.jpeg" class="img-fluid rounded">
                </div>
                <div class="col-md-4 col-6"><img src="public/admin/images/funeral-5.jpeg" class="img-fluid rounded">
                </div>
                <div class="col-md-4 col-6"><img src="public/admin/images/funeral-6.jpeg" class="img-fluid rounded">
                </div>
            </div>

        </div>
    </div>

</div>




@endsection