@extends('layouts.master')
@section('content')
<div class="container">

    <div class="main-outreach">
        <span class="outreach-content">
            <strong>Method:</strong>To interact/contact with ESM/Widows/Veer Naris of Station HQ
            Dharamshala(AOR) and there is any query/issue reveals during outreach the same will be revolved on priority. Grievance form are kept with
            outreach team if required the same will be filled up by beneficially and nil report will also be assumed.
        </span>
        <br>
        <br>
        <span class="outreach-content">
            <strong>Mode:</strong>The mode of Outreach to interact/contact with maximum strength of Ex-serviceman and
            Widows of Station
            HQ AOR so that max footfall can be interacted and max Grievances can be collected and the same will
            be resolved on priority through DIAV portal.
        </span>
    </div>
    <div class="my-gallery">
        <div class="gallery-item">
            <img src="public/admin/images/image1.jpeg" alt="Image 1">

        </div>
        <div class="gallery-item">
            <img src="public/admin/images/image2.jpeg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="public/admin/images/image3.jpeg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="public/admin/images/image4.jpeg" alt="Image 4">
        </div>
    </div>

    <div class="split-3">
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



</div>
@endsection