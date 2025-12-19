@extends('layouts.master')
@section('content')



    <ul class="nav nav-tabs" id="mainTabs" role="tablist">

    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="adlrs-tab" data-bs-toggle="tab" data-bs-target="#adlrs"
        type="button" role="tab" aria-controls="adlrs" aria-selected="true">
        ADLRS
        </button>
    </li>

    <li class="nav-item" role="presentation">
        <button class="nav-link" id="demise-tab" data-bs-toggle="tab" data-bs-target="#demise"
        type="button" role="tab" aria-controls="demise" aria-selected="false">
        Demise Grant
        </button>
    </li>

    <li class="nav-item" role="presentation">
        <button class="nav-link" id="military-tab" data-bs-toggle="tab" data-bs-target="#military"
        type="button" role="tab" aria-controls="military" aria-selected="false">
        Military Funeral
        </button>
    </li>

    </ul>

    <!-- PAGE TITLE -->
    <h2>ADLRS/Demise Grant and Military Funeral</h2>

    <div class="tab-content mt-4" id="mainTabsContent">

    <!-- ADLRS TAB -->
    <div class="tab-pane fade show active" id="adlrs" role="tabpanel" aria-labelledby="adlrs-tab">
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
                            <td>10,30,000</td>
                        </tr>
                    </tbody>
                </table>

            </div>
    </div>

    <!-- DEMISE TAB -->
    <div class="tab-pane fade" id="demise" role="tabpanel" aria-labelledby="demise-tab">
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
                            <td>103</td>
                            <td>14,49,000</td>
                        </tr>
                    </tbody>
                </table>

            </div>
    </div>

    <!-- MILITARY TAB -->
    <div class="tab-pane fade" id="military" role="tabpanel" aria-labelledby="military-tab">
        <h4>Military Funeral</h4>
        <p>Your Military Funeral content...</p>
    </div>

    </div>




@endsection