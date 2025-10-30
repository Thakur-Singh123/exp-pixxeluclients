@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
               <!--success message section-->
                @include('admin.notification')
                <div class="card shadow-sm">
                    <div class="card-header text-white">
                        <h4 class="card-title mb-0">Add service</h4>
                    </div>

                    <div class="card-body">
                        <form id="captureForm" action="{{ route('admin.service.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Step Navigation -->
                            <div class="d-flex flex-wrap justify-content-between mb-4 step-header">
                                <button type="button" class="btn btn-outline-primary step-btn active" data-step="1">Personal Details</button>
                                <button type="button" class="btn btn-outline-primary step-btn" data-step="2">Spouse Details</button>
                                <button type="button" class="btn btn-outline-primary step-btn" data-step="3">Father Details</button>
                                <button type="button" class="btn btn-outline-primary step-btn" data-step="4">Mother Details</button>
                                <button type="button" class="btn btn-outline-primary step-btn" data-step="5">Document Details</button>
                                <button type="button" class="btn btn-outline-primary step-btn" data-step="6">Dependent Details</button>
                            </div>

                            <!-- Step 1: Personal Details -->
                            <div class="step-content" id="step-1">
                                <h5 class="mb-3 text-primary fw-bold">Personal Details</h5>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Army No *</label>
                                        <input type="text" name="army_no" class="form-control" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Rank *</label>
                                        <input type="text" name="rank" class="form-control" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Name *</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Aadhar No</label>
                                        <input type="number" name="aadhar_no" maxlength="12" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Category of Ward</label>
                                        <input type="text" name="category_of_ward" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Force Type</label>
                                        <input type="text" name="force_type" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Unit / Regt / Corps</label>
                                        <input type="text" name="unit_regt_corps" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2: Address Details -->
                            <div class="step-content d-none" id="step-2">
                                <h5 class="mb-3 text-primary fw-bold">Address Details</h5>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Village</label>
                                        <input type="text" name="vill" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Post Office</label>
                                        <input type="text" name="po" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Tehsil</label>
                                        <input type="text" name="tehsil" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">District</label>
                                        <input type="text" name="distt" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Pin Code</label>
                                        <input type="number" name="pin" maxlength="6" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: Service Details -->
                            <div class="step-content d-none" id="step-3">
                                <h5 class="mb-3 text-primary fw-bold">Service Details</h5>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Mobile No</label>
                                        <input type="number" name="mob_no" maxlength="10" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" name="dob" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Date of Enrolment</label>
                                        <input type="date" name="doe" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Date of Retirement</label>
                                        <input type="date" name="dor" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Present PC</label>
                                        <input type="text" name="present_pc" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">PPO No</label>
                                        <input type="text" name="ppo_no" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!-- Step 4: Dependent Details -->
                            <div class="step-content d-none" id="step-4">
                                <h5 class="mb-3 text-primary fw-bold">Dependent Details</h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Name of Dependents</label>
                                        <input type="text" name="dependent_name" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">No of Dependents</label>
                                        <input type="number" name="no_of_dependent" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Relation with ESM</label>
                                        <input type="text" name="relation_with_esm" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Dependent DOB</label>
                                        <input type="date" name="dependent_dob" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Occupation</label>
                                        <input type="text" name="dependent_occupation" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Aadhar No (Dependent)</label>
                                        <input type="text" name="dependent_aadhar" maxlength="12" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!-- Step 5: Bank Details -->
                            <div class="step-content d-none" id="step-5">
                                <h5 class="mb-3 text-primary fw-bold">Bank Details</h5>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Bank Details</label>
                                        <textarea name="bank_details" rows="3" class="form-control" placeholder="Enter bank name, branch, IFSC, account number, etc."></textarea>
                                    </div>
                                </div>
                            </div>


                                    <!-- Step 6 -->
                            <div class="step-content d-none" id="step-6">
                                <h5 class="mb-3 text-primary">Dependent Details</h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Dependent Name</label>
                                        <input type="text" name="dependent_name" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Relation</label>
                                        <input type="text" name="relation" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary" id="prevBtn">Prev</button>
                                <button type="button" class="btn btn-primary" id="nextBtn">Next</button>
                                <button type="submit" class="btn btn-success d-none" id="submitBtn">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- jQuery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    let currentStep = 1;

    function showStep(step) {
        $('.step-content').addClass('d-none');
        $('#step-' + step).removeClass('d-none');

        $('.step-btn').removeClass('active');
        $('.step-btn[data-step="' + step + '"]').addClass('active');

        $('#prevBtn').toggle(step > 1);
        if (step === $('.step-btn').length) {
            $('#nextBtn').hide();
            $('#submitBtn').removeClass('d-none');
        } else {
            $('#nextBtn').show();
            $('#submitBtn').addClass('d-none');
        }
    }

    $('#nextBtn').on('click', function () {
        if (currentStep < $('.step-btn').length) {
            currentStep++;
            showStep(currentStep);
        }
    });

    $('#prevBtn').on('click', function () {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    });

    $('.step-btn').on('click', function () {
        currentStep = parseInt($(this).data('step'));
        showStep(currentStep);
    });

    $(document).ready(function () {
        showStep(currentStep);
    });
</script>

@endsection
