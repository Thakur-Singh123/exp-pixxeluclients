@extends('layouts.master')
@section('content')
<!-- hero section -->
<section class="hero-line-text">
<div class="main-hero-flex">
<div class="hero-about-1">
    <div class="about-image-1">
        <img src="public/admin/images/award.jpg" alt="GENERAL MANOJ PANDE, PVSM, AVSM, VSM, ADC">
    </div>
    <h3 class="title mt-0 mb-10 text-uppercase text-center">
        <span class="cosa-msg-1">History</span>
    </h3>
    <div class="dis-message-1">
        <p>Under the authority of HQ 21 Sub Area SOP No. 2010/A4 date 24 March 2017, Veteran Sahayta Kendra
            was established at Station HQ Dharamshala with effect from 17 July2017, for registration of
            veteran and also addressing issues related to welfare of ESM/Widows/Veer Naris including grievances,
            pension anomalies and other issues!
        </p>
    </div>
    <!--<div class="table-responsive">
    <table class="table table-bordered table-striped text-center align-middle popamij">
        <thead class="table-dark">
            <tr>
                <th>S.No</th>
                <th>Tehsil / Sub Tehsil</th>
                <th>Total No of Panchayat</th>
                <th>Unit Responsible</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Dharamsala</td>
                <td>Municipal Corporation (Ward No. 01 to 11)</td>
                <td>8 JAK LI</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Shahpur</td>
                <td>40</td>
                <td rowspan="4">100 FD Regt</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Harchakian</td>
                <td>09</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Sihunta</td>
                <td>22</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Jawali</td>
                <td>45</td>
            </tr>
        </tbody>
    </table>
    </div> -->
</div>
<div class="hero-slider">
    <div><img src="public/admin/images/full-army.jpeg" alt=""></div>
</div>
<div class="latest-news-details">
    <div class="news-marquee1 mb-0">
        <h2 class="latest-updates">Latest News</h2>
        <div class="bg-theme-colored p-10 main-cll-news-scroll">
            <marquee class="news-scroll h-200" behavior="scroll" scrollamount="3" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                <ul>
                    @foreach($latestNews as $news)
                    <li>
                        <label class="newslabel">*&nbsp;&nbsp;&nbsp;</label>
                        <a href="{{ asset('public/uploads/news/'.$news->document) }}"
                            target="_blank"
                            class="preview_pdf">
                            {{ $news->title }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </marquee>
        </div>
    </div>
</div>
</section>
@endsection