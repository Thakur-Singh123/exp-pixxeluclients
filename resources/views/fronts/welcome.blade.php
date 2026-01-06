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
                <p>Under the authority of headquarter 21 sub area SOP no. 2010/A4 date 24 March2017, Veteran Sahayta Kendra was established at station headquarters Dharamshala with effect from 17July2017, for registration of veteran and also addressing issues related to welfare of ESM/Widow/Virnari including girvensiros, pension anomalies and other issues!
                </p>
            </div>
            <div class="table-responsive">
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
            </div>

        </div>

        <div class="hero-slider">
            <div><img src="public/admin/images/full-army.jpeg" alt=""></div>
        </div>
        <div class="latest-news-details">
            <div class="news-marquee1 mb-0">
                <h2 class="latest-updates">Latest
                    News
                </h2>
                <!-- Top Static Links (Outside Marquee) -->
                <div class="bg-theme-colored p-10 main-cll-news-scroll">
                    <!-- Scrolling Dynamic News -->
                    <marquee class="news-scroll h-200" behavior="scroll" scrollamount="3" direction="up"
                        onmouseover="this.stop();" onmouseout="this.start();">
                        <ul>
                            <li><label class="newslabel">*&nbsp;&nbsp;&nbsp;</label>
                                <input type="hidden" id="list3" name="" value="5" wfd-id="id40"> <a class="preview_pdf">
                                    Discontinuation of Annual Renewal of CSD Smart Cards</a>
                            </li>
                            <li><label class="newslabel">*&nbsp;&nbsp;&nbsp;</label>
                                <input type="hidden" id="list4" name="" value="6" wfd-id="id41"> <a
                                    class="preview_pdf">Submission of Annual Life Certificates by Pensioners through
                                    Bank</a>
                            </li>
                            <li><label class="newslabel">*&nbsp;&nbsp;&nbsp;</label>
                                <input type="hidden" id="list5" name="" value="7" wfd-id="id42"> <a
                                    class="preview_pdf">Reservation of Paramedical and Nursing Course seats and
                                    Concession in fee structure for the wards of Defence Personnel</a>
                            </li>
                            <li><label class="newslabel">*&nbsp;&nbsp;&nbsp;</label>
                                <input type="hidden" id="list6" name="" value="8" wfd-id="id43"> <a
                                    class="preview_pdf">PCDA Circular No 667 Regarding Payment of OROP Arrears in
                                    One Instalment before 15 March 2023.CHEERS!!!</a>
                            </li>
                            <li><label class="newslabel">*&nbsp;&nbsp;&nbsp;</label>
                                <input type="hidden" id="list7" name="" value="9" wfd-id="id44"> <a
                                    class="preview_pdf">Concessional fees for wards of serving and retired personnel
                                    of Armed Forces PMF and Veer Naris</a>
                            </li>
                            <li><label class="newslabel">*&nbsp;&nbsp;&nbsp;</label>
                                <input type="hidden" id="list3" name="" value="5" wfd-id="id40"> <a class="preview_pdf">
                                    Discontinuation of Annual Renewal of CSD Smart Cards</a>
                            </li>
                            <li><label class="newslabel">*&nbsp;&nbsp;&nbsp;</label>
                                <input type="hidden" id="list4" name="" value="6" wfd-id="id41"> <a
                                    class="preview_pdf">Submission of Annual Life Certificates by Pensioners through
                                    Bank</a>
                            </li>
                            <li><label class="newslabel">*&nbsp;&nbsp;&nbsp;</label>
                                <input type="hidden" id="list5" name="" value="7" wfd-id="id42"> <a
                                    class="preview_pdf">Reservation of Paramedical and Nursing Course seats and
                                    Concession in fee structure for the wards of Defence Personnel</a>
                            </li>
                            <li><label class="newslabel">*&nbsp;&nbsp;&nbsp;</label>
                                <input type="hidden" id="list6" name="" value="8" wfd-id="id43"> <a
                                    class="preview_pdf">PCDA Circular No 667 Regarding Payment of OROP Arrears in
                                    One Instalment before 15 March 2023.CHEERS!!!</a>
                            </li>
                            <li><label class="newslabel">*&nbsp;&nbsp;&nbsp;</label>
                                <input type="hidden" id="list7" name="" value="9" wfd-id="id44"> <a
                                    class="preview_pdf">Concessional fees for wards of serving and retired personnel
                                    of Armed Forces PMF and Veer Naris</a>
                            </li>
                        </ul>
                        <span class="dot"></span>
                    </marquee>
                </div>
            </div>
        </div>
</section>
@endsection