@extends('layouts.master')
@section('content')

<div class="container my-4">

    <div class="section-box-1">
        <h3 class="section-title-1">Recent Rallies</h3>

        <!-- RALLY 1 -->
        <div class="rally-card">
            <div class="rally-date-badge">14 November 2025</div>

            <h4 class="rally-heading">Rally Credited in Jammu</h4>

            <p class="rally-info">
                This rally will be conducted at <strong>Satwari, Jammu</strong> on 
                <strong>14 November 2025</strong>. All eligible candidates are informed to 
                report as per schedule and instructions issued by the authorities.
            </p>
        </div>

        <!-- RALLY 2 -->
        <div class="rally-card">
            <div class="rally-date-badge">5 December 2025</div>

            <h4 class="rally-heading">Rally Credited in Jammu</h4>

            <p class="rally-info">
                The second rally is scheduled in <strong>Jammu</strong> on 
                <strong>5 December 2025</strong>. The Job Rally was successfully conducted in Jammu on 05 December 2025. Eligible candidates from various districts participated in the recruitment process.
            </p>
        </div>


        <!-- RALLY IMAGES -->
            <div class="row g-3 mt-3">

                <div class="col-6 col-md-3">
                    <img src="public/admin/images/rally-1.jpeg" class="img-fluid rounded" alt="Rally image 1">
                </div>

                <div class="col-6 col-md-3">
                    <img src="public/admin/images/rally-2.jpeg" class="img-fluid rounded" alt="Rally image 2">
                </div>

                <div class="col-6 col-md-3">
                    <img src="public/admin/images/rally-3.jpeg" class="img-fluid rounded" alt="Rally image 3">
                </div>

                <div class="col-6 col-md-3">
                    <img src="public/admin/images/rally-4.jpeg" class="img-fluid rounded" alt="Rally image 4">
                </div>

                <div class="col-6 col-md-3">
                    <img src="public/admin/images/rally-5.jpeg" class="img-fluid rounded" alt="Rally image 5">
                </div>

                <div class="col-6 col-md-3">
                    <img src="public/admin/images/rally-6.jpeg" class="img-fluid rounded" alt="Rally image 6">
                </div>

                <div class="col-6 col-md-3">
                    <img src="public/admin/images/rally-7.jpeg" class="img-fluid rounded" alt="Rally image 7">
                </div>

                <div class="col-6 col-md-3">
                    <img src="public/admin/images/rally-8.jpeg" class="img-fluid rounded" alt="Rally image 8">
                </div>

            </div>
            <!-- END IMAGES -->

    </div>
</div>

@endsection
