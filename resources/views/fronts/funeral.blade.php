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
<h2>ADLRS/Demise Grant and Military Funeral</h2>

<div class="tab-content mt-4" id="mainTabsContent">

    <!-- ADLRS TAB -->
    <div class="tab-pane fade show active" id="adlrs" role="tabpanel" aria-labelledby="adlrs-tab">
        <div class="main-adlrs">
            <span class="adlrs-content">
                As per Army Headquarter letter number B/45322/AG/ADLRS/R&W-4 dated 8 july 2016. On behalf of (COAS)
                ADLRs
                ceremony is being organised and RS; 10000 is being paid to NOK on death of EMS. The following document
                to be
                produced are grant of ADLRs: Copy of discharge Book 2. Copy of PPO 3. Copy of Death certificate 4. Copy
                of
                Addhar card 5. Copy of bankers details of NOK 6. copy of CSD cards both (Liq and Gross)
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
                        <th>Current year</th>
                        <th>NOK</th>
                        <th>Number of Amount</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>2025-26</td>
                        <td>103</td>
                        <td>10,30,000</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

    <!-- DEMISE TAB -->
    <div class="tab-pane fade" id="demise" role="tabpanel" aria-labelledby="demise-tab">

        <div class="main-adlrs">
            <span class="adlrs-content">
                The following document are required for payment of demised Grant: 1. Personal Application 2.Copy of
                discharge Book 3. Copy of PPO 4. Copy of Death certificate 5. Copy of Addhar card 6. Copy of bankers
                details of NOK.
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
                        <td>207</td>
                        <td>14,28,000</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

    <!-- MILITARY TAB -->
    <div class="funeral-gallery">
        <div class="tab-pane fade" id="military" role="tabpanel" aria-labelledby="military-tab">
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