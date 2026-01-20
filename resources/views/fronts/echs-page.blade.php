@extends('layouts.master')
@section('content')
<style>
.pdf-card {
    border: 2px solid #000;
    border-radius: 6px;
    padding: 25px;
    max-width: 420px;
}

.pdf-btn {
    background-color: #c9973f;
    color: #fff;
    font-weight: 500;
}

.pdf-btn:hover {
    background-color: #b88934;
    color: #fff;
}

.amin-pdf-section {
    margin: 48px auto !important;
    width: fit-content !important;
}
</style>


<ul class="nav nav-tabs" id="mainTabs" role="tablist">

    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="echs-tab" data-bs-toggle="tab" data-bs-target="#echs" type="button"
            role="tab" aria-controls="echs" aria-selected="true">
            ECHS
        </button>
    </li>

    <li class="nav-item" role="presentation">
        <button class="nav-link" id="polyclinic-tab" data-bs-toggle="tab" data-bs-target="#polyclinic" type="button"
            role="tab" aria-controls="polyclinic" aria-selected="false">
            ECHS POLYCLINIC
        </button>
    </li>

    <li class="nav-item" role="presentation">
        <button class="nav-link" id="facilites-tab" data-bs-toggle="tab" data-bs-target="#facilites" type="button"
            role="tab" aria-controls="facilites" aria-selected="false">
            FACILITIES IN ECHS POLYCLINIC
        </button>
    </li>

    <li class="nav-item" role="presentation">
        <button class="nav-link" id="laboratory-tab" data-bs-toggle="tab" data-bs-target="#laboratory" type="button"
            role="tab" aria-controls="laboratory" aria-selected="false">
            LABORATORY
        </button>
    </li>

    <li class="nav-item" role="presentation">
        <button class="nav-link" id="dental-tab" data-bs-toggle="tab" data-bs-target="#dental" type="button" role="tab"
            aria-controls="dental" aria-selected="false">
            DENTAL FACILITIES
        </button>
    </li>

    <li class="nav-item" role="presentation">
        <button class="nav-link" id="echs-card-tab" data-bs-toggle="tab" data-bs-target="#echs-card" type="button"
            role="tab" aria-controls="echs-card" aria-selected="false">
            APPLICATION FOR ECHS CARD
        </button>
    </li>



</ul>


<!-- PAGE TITLE -->

<div class="tab-content mt-4" id="mainTabsContent">

    <!-- ECHS TAB -->
    <div class="tab-pane fade show active" id="echs" role="tabpanel" aria-labelledby="echs-tab">
        <h2>Introduction of ECHS Shahpur</h2>
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 bg-white border p-4">

                    <!-- MAIN TITLE -->
                    <h6 class="text-center fw-bold text-uppercase mb-3 fs-3">
                        Ex-Servicemen Contributory Health Scheme
                    </h6>

                    <!-- INTRODUCTION -->
                    <h6 class="fw-bold text-decoration-underline fs-4">Introduction</h6>
                    <p class="small text-justify fs-6">
                        The Ex-servicemen Contributory Health Scheme (ECHS), which is a flagship scheme
                        of the Department of Ex-servicemen Welfare, Ministry of Defence, was launched on
                        1st April 2003. The Scheme aims at providing Quality Medicare to Ex-servicemen
                        pensioners and their dependents through a network of ECHS Polyclinics, Armed
                        Forces medical facilities and private empanelled/government hospitals spread
                        across the Country. The Scheme is structured on the lines of the Central
                        Government Health Scheme (CGHS) and endeavours to provide cashless treatment to
                        its beneficiaries. Only allopathic treatment is provided under ECHS.
                    </p>

                    <!-- MEMBERSHIP -->
                    <h6 class="fw-bold text-decoration-underline mt-3 fs-4">
                        Membership / Eligibility
                    </h6>

                    <p class="small mb-2 fs-6">
                        1. The Scheme entitles all Ex-servicemen drawing pension from Controller of
                        Defence Accounts, including those in receipt of Disability / Family Pension
                        and their dependents (as applicable under CGHS) to be eligible for membership
                        of ECHS. ECHS membership has also been extended to the following:
                    </p>

                    <ul class="small fs-6">
                        <li>Territorial Army (TA) pensioners.</li>
                        <li>Defence Security Corps (DSC) pensioners.</li>
                        <li>Uniformed Indian Coast Guard (ICG) pensioners.</li>
                        <li>Military Nursing Service (MNS) pensioners.</li>
                        <li>Special Frontier Force (SFF) pensioners.</li>
                        <li>Nepal Domiciled Gorkha (NDG) pensioners.</li>
                        <li>Whole time NCC Officers.</li>
                        <li>Eligible APS pensioners.</li>
                        <li>Assam Rifles pensioners.</li>
                        <li>WW II Veterans, SSCOs, ECOs & Pre-Mature Retirees.</li>
                    </ul>

                    <p class="small fs-6">
                        2. Membership of ECHS has been made compulsory for all pensioners with effect
                        from 1st April 2003 and is optional for earlier retirees.
                    </p>

                    <!-- CONTRIBUTION -->
                    <h6 class="fw-bold text-decoration-underline mt-3 fs-4">
                        Contribution
                    </h6>

                    <p class="small fs-6">
                        1. The amount of contribution paid for becoming an ECHS member is the same as
                        that of CGHS. Presently, it varies from Rs 30,000/- for Recruit to Rs 1,20,000/-
                        for Officers. The Ex-servicemen who have retired prior to 1st January 1996, war
                        widows and war disabled, including those disabled in internal security duties,
                        are exempted from payment of ECHS contribution.
                    </p>

                    <p class="small fw-bold text-decoration-underline fs-4">
                        Rates of contribution presently are as follows:
                    </p>

                    <!-- TABLE -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm align-middle">
                            <thead class="text-center">
                                <tr>
                                    <th>Ser No</th>
                                    <th>Ranks</th>
                                    <th>One Time Contribution (in Rupees)</th>
                                    <th>Ward Entitlement</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">(a)</td>
                                    <td>Recruit to Havs & equivalent in Navy & AF</td>
                                    <td class="text-center">30,000/-</td>
                                    <td class="text-center">General</td>
                                </tr>
                                <tr>
                                    <td class="text-center">(b)</td>
                                    <td>
                                        Nb Sub/Sub Maj or equivalent in Navy & AF
                                        (including Hony Nb Sub/MA and Hony Lt/Capt)
                                    </td>
                                    <td class="text-center">67,000/-</td>
                                    <td class="text-center">Semi Private</td>
                                </tr>
                                <tr>
                                    <td class="text-center">(c)</td>
                                    <td>All Officers</td>
                                    <td class="text-center">1,20,000/-</td>
                                    <td class="text-center">Private</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- ECHS POLYCLINIC TAB -->
    <div class="tab-pane fade" id="polyclinic" role="tabpanel" aria-labelledby="polyclinic-tab">
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 bg-white border p-4">

                    <!-- PART TITLE -->


                    <h6 class="text-center fw-bold text-uppercase text-decoration-underline mb-4 fs-3">
                        State of Staff ECHS Polyclinic Shahpur
                    </h6>

                    <!-- OFFICER IN CHARGE -->
                    <h6 class="fw-bold text-decoration-underline mb-2 fs-4">
                        Officer in Charge
                    </h6>

                    <div class="table-responsive mb-4">
                        <table class="table table-bordered table-sm text-center align-middle">
                            <thead>
                                <tr>
                                    <th>S No</th>
                                    <th>Name</th>
                                    <th>Appt</th>
                                    <th>Contact No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Lt Col PC Kaushal (Retd)</td>
                                    <td>Officer in Charge</td>
                                    <td>9459510408</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- MEDICAL STAFF -->
                    <h6 class="fw-bold text-decoration-underline mb-2 fs-4">
                        Medical Staff
                    </h6>

                    <div class="table-responsive mb-4">
                        <table class="table table-bordered table-sm text-center align-middle">
                            <thead>
                                <tr>
                                    <th>S No</th>
                                    <th>Name</th>
                                    <th>Appt</th>
                                    <th>Contact No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dr Sushil Kumar</td>
                                    <td>Medical Officer</td>
                                    <td>9418355699</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dr Manvi Thakur</td>
                                    <td>Medical Officer</td>
                                    <td>9871975037</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dr Ila</td>
                                    <td>Medical Officer</td>
                                    <td>9418469689</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Dr Milli Dev Sharma</td>
                                    <td>Dental Officer</td>
                                    <td>7018962624</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- PARA MEDICAL STAFF -->
                    <h6 class="fw-bold text-decoration-underline mb-2 fs-4">
                        Para Medical Staff
                    </h6>

                    <div class="table-responsive mb-4">
                        <table class="table table-bordered table-sm text-center align-middle">
                            <thead>
                                <tr>
                                    <th>S No</th>
                                    <th>Name</th>
                                    <th>Appt</th>
                                    <th>Contact No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Neha Sharma</td>
                                    <td>Physiotherapist</td>
                                    <td>7018316905</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ex Sub Maj Amar Nath</td>
                                    <td>Laboratory Assistant</td>
                                    <td>9874056687</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Gurvinder Singh</td>
                                    <td>Laboratory Technician</td>
                                    <td>9736191313</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Amit Kumar</td>
                                    <td>Dental Technician</td>
                                    <td>9896176120</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Mr Sushil Kumar</td>
                                    <td>Pharmacist</td>
                                    <td>9418955412</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Ex Hav Vijay Kumar</td>
                                    <td>Nursing Assistant</td>
                                    <td>8437453189</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Ex Hav Mohinder Singh</td>
                                    <td>Nursing Assistant</td>
                                    <td>9988693308</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- NON MEDICAL STAFF -->
                    <h6 class="fw-bold text-decoration-underline mb-2 fs-4">
                        Non-Medical Staff
                    </h6>

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm text-center align-middle">
                            <thead>
                                <tr>
                                    <th>S No</th>
                                    <th>Name</th>
                                    <th>Appt</th>
                                    <th>Contact No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Smt Shilpa Dhiman</td>
                                    <td>Clerk</td>
                                    <td>8988317850</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Smt Minakshi Kumari</td>
                                    <td>Female Attendant</td>
                                    <td>8219529214</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ex Hav Rakshpal Singh</td>
                                    <td>Driver</td>
                                    <td>9478930519</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Mr Lakhan Chandel</td>
                                    <td>Safiwala</td>
                                    <td>7018597920</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Ex Hav Sanjeev Kumar</td>
                                    <td>Chowkidar</td>
                                    <td>7018043214</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Ex Hav Ravi Kant</td>
                                    <td>Peon</td>
                                    <td>8627051935</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- FACILITIES IN ECHS POLYCLINIC TAB -->
    <div class="tab-pane fade" id="facilites" role="tabpanel" aria-labelledby="facilites-tab">
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 bg-white border p-4">

                    <!-- TITLE -->
                    <h6 class="text-center fw-bold text-uppercase text-decoration-underline mb-4 fs-3">
                        FACILITIES IN ECHS POLYCLINIC SHAHPUR
                    </h6>

                    <!-- INTRO -->
                    <h6 class="fw-bold text-decoration-underline mb-2 fs-4">
                        PHYSIOTHERAPY
                    </h6>
                    <p class="small">
                        Physiotherapy is an integral part of healthcare focusing on pain relief,
                        rehabilitation, and functional improvement using various therapeutic modalities.
                    </p>

                    <div class="row">
                        <!-- LEFT CONTENT -->
                        <div class="col-12 col-md-7">

                            <p class="fw-bold small mb-1 fs-5">Short Wave Diathermy (SWD)</p>
                            <ul class="small fs-6">
                                <li>Provides deep heating to tissues</li>
                                <li>Reduces pain and inflammation</li>
                                <li>Relaxes muscles</li>
                                <li>Promotes tissue healing</li>
                            </ul>

                            <p class="fw-bold small mb-1 fs-5">Wax Bath Therapy</p>
                            <ul class="small fs-6">
                                <li>Reduces post-injury stiffness</li>
                                <li>Improves joint mobility and flexibility</li>
                                <li>Relieves pain in arthritis and fibromyalgia</li>
                            </ul>

                            <p class="fw-bold small mb-1 fs-5">Hot Packs / Hydrocollator</p>
                            <ul class="small fs-6">
                                <li>Produces superficial tissue relaxation</li>
                                <li>Improves blood circulation</li>
                                <li>Reduces muscle spasm</li>
                            </ul>

                            <p class="fw-bold small mb-1 fs-5">Traction (Cervical & Lumbar)</p>
                            <ul class="small fs-6">
                                <li>Reduces nerve root compression</li>
                                <li>Improves spinal alignment</li>
                                <li>Relieves pain in disc prolapse, sciatica, and arthritis</li>
                            </ul>

                            <p class="fw-bold small mb-1 fs-5">Interferential Therapy (IFT)</p>
                            <ul class="small fs-6">
                                <li>Provides pain relief</li>
                                <li>Reduces inflammation and swelling</li>
                                <li>Promotes muscle relaxation</li>
                            </ul>

                            <p class="fw-bold small mb-1 fs-5">TENS</p>
                            <ul class="small fs-6">
                                <li>Used in back pain</li>
                                <li>Effective in OA, fibromyalgia, tendinitis, bursitis</li>
                                <li>Helpful in chronic pain conditions</li>
                            </ul>

                            <p class="fw-bold small mb-1 fs-5">Laser Therapy</p>
                            <ul class="small fs-6">
                                <li>Reduces inflammation</li>
                                <li>Accelerates healing</li>
                                <li>Improves circulation</li>
                            </ul>

                            <p class="fw-bold small mb-1 fs-5">Infrared Radiation (IRR)</p>
                            <ul class="small fs-6">
                                <li>Improves local blood circulation</li>
                                <li>Reduces muscle stiffness</li>
                            </ul>

                            <p class="fw-bold small mb-1 fs-5">Multiexercise Chair</p>
                            <ul class="small fs-6">
                                <li>Used for rehabilitation</li>
                                <li>Strengthens shoulder and quadriceps muscles</li>
                                <li>Improves functional mobility</li>
                            </ul>

                            <p class="fw-bold small mb-1 fs-5">IASTM</p>
                            <ul class="small fs-6">
                                <li>Used in tendinitis</li>
                                <li>Effective for soft tissue and fascial restrictions</li>
                                <li>Helpful in sports injuries and scar tissue management</li>
                            </ul>

                        </div>

                        <!-- RIGHT IMAGE -->
                        <!-- <div class="col-12 col-md-5 text-center">
                            <img src="{{ asset('public/admin/images/physiotherapy.jpg') }}" class="img-fluid border"
                                alt="Physiotherapy Room">
                        </div> -->
                    </div>

                    <!-- CONCLUSION -->
                    <p class="small mt-3 fs-6">
                        <strong class="fs-5">Conclusion:</strong>
                        Proper use of physiotherapy modalities enhances recovery and functional independence.
                    </p>

                </div>
            </div>
        </div>
    </div>

    <!-- LABORATORY TAB -->
    <div class="tab-pane fade" id="laboratory" role="tabpanel" aria-labelledby="laboratory-tab">
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 bg-white border p-4">

                    <!-- TITLE -->
                    <h6 class="fw-bold text-uppercase text-decoration-underline mb-3 fs-4">
                        Laboratory
                    </h6>

                    <!-- TABLE -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm align-middle">
                            <thead class="text-center">
                                <tr>
                                    <th>EQUIPMENTS</th>
                                    <th>SECTION</th>
                                    <th>LAB TEST FACILITY</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Haematology ERBA H360 Part Analyzer</td>
                                    <td>Haematology</td>
                                    <td>
                                        Hb, TLC, DLC, Platelets, Complete Haemogram
                                    </td>
                                </tr>

                                <tr>
                                    <td>Biochemistry ERBA Chem-7 Analyzer</td>
                                    <td>Biochemistry</td>
                                    <td>
                                        Sugar, Urea, Creatinine, Uric Acid, Total Protein,
                                        Albumin (RFT/KFT), Total Bilirubin (Direct + Indirect),
                                        SGOT, SGPT, Alkaline Phosphatase (LFT),
                                        Total Cholesterol, Triglycerides,
                                        HDL Cholesterol (Lipid Profile), Calcium
                                    </td>
                                </tr>

                                <tr>
                                    <td>Laura Smart ERBA Urine Analyzer</td>
                                    <td>Urine Chemistry</td>
                                    <td>
                                        Specific Gravity, pH, Sugar, Protein, Bile Salt,
                                        Bile Pigment, Nitrate, Ketone Bodies,
                                        Blood, Leukocytes
                                    </td>
                                </tr>

                                <tr>
                                    <td>Oncall A1C Accon Analyzer</td>
                                    <td>HbA1c</td>
                                    <td>HbA1c Blood Test</td>
                                </tr>

                                <tr>
                                    <td>On Slide Tests</td>
                                    <td class="text-center">–</td>
                                    <td>RA Factor, CRP, Widal Test</td>
                                </tr>

                                <tr>
                                    <td>Binocular Microscope</td>
                                    <td>Microscopy</td>
                                    <td>
                                        Hemat DLC, Parasites,
                                        Urine Deposits Microscopic Examination
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- NOTE -->
                    <p class="small fw-bold mt-3 fs-6">
                        The above mentioned routine tests are available and are being
                        performed in the laboratory of ECHS Polyclinic Shahpur.
                    </p>

                </div>
            </div>
        </div>
    </div>

    <!-- DENTAL FACILITIES TAB -->
    <div class="tab-pane fade" id="dental" role="tabpanel" aria-labelledby="dental-tab">
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 bg-white border p-4">

                    <!-- TITLE -->
                    <h6 class="fw-bold text-uppercase text-decoration-underline mb-3 fs-4">
                        Dental Facilities
                    </h6>

                    <!-- LIST -->
                    <ul class="small fs- fs-36">
                        <li>Root canal treatment (anterior / posterior)</li>
                        <li>Restoration of decayed teeth</li>
                        <li>Extraction of grossly carious teeth</li>
                        <li>Surgical extraction of wisdom teeth</li>
                        <li>Scaling and oral prophylaxis of teeth</li>
                        <li>Complete diagnostics including X-ray</li>
                        <li>Complete and partial dentures fabrication</li>
                        <li>Repair of broken prosthesis</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <!-- APPLICATION FOR ECHS CARD TAB -->
    <div class="tab-pane fade" id="echs-card" role="tabpanel" aria-labelledby="echs-card-tab">
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 bg-white border p-4">

                    <!-- TITLE -->
                    <h6 class="text-center fw-bold text-uppercase text-decoration-underline mb-4 fs-3">
                        Procedure of Online Application for ECHS Card
                    </h6>

                    <!-- 1. PREPARATION -->
                    <p class="fw-bold small text-decoration-underline mb-1 fs-4">
                        Preparation
                    </p>

                    <p class="small fw-semibold mb-1 fs-5">
                        1. Scan the following and save each document in separate file of JPEG, of 1 MB max, for
                        uploading:
                    </p>

                    <ul class="small fs-6">
                        <li>Pension Payment Order (PPO) of Primary Beneficiary i.e. Ex Service Man (ESM) if he is alive
                            or his Wife, if ESM is not alive</li>
                        <li>Old ECHS Card (front side only) / Temporary Slip of Primary Beneficiary</li>
                        <li>Photo of Primary Beneficiary (Passport size colour photo in white background)</li>
                        <li>Signature in Blue Ink of Primary Beneficiary</li>
                        <li>Photos of Dependants (Passport size colour photo in white background)</li>
                        <li>Signatures in Blue Ink or Thumb Impressions of Dependants</li>
                        <li>Death Certificate of ESM, if he is not alive</li>
                        <li>Disability certificate of ESM, if disability is battle disability</li>
                        <li>Disability certificate of dependent(s) if dependent(s) have disability</li>
                    </ul>

                    <!-- 2. FIRST TIME APPLICATION -->
                    <p class="small fw-semibold mb-1 fs-5">
                        2. For first time application of pre 2003 retiree:
                    </p>

                    <ul class="small fs-6">
                        <li>DPDO / Bank certificate, certifying that FMA (Fixed Medical Allowance) has been stopped</li>
                        <li>MRO receipt for ECHS membership fee, for those retired from 1996 to 2002</li>
                    </ul>

                    <!-- 3. KEEP READY -->
                    <p class="small fw-semibold mb-1 fs-5">
                        3. Keep the following ready, for information to be filled in the Application:
                    </p>

                    <ul class="small fs-6">
                        <li>Aadhaar and PAN Cards of Primary Beneficiary & Aadhaar Cards of all dependants</li>
                        <li>PAN cards of dependants if available</li>
                        <li>Bank Pass Book of pension account & ESM Discharge Book</li>
                        <li>Permanent and Temporary address of Pensioner</li>
                        <li>Blood group of ESM and all dependants</li>
                        <li>
                            Debit or Credit Card and its linked phone to get OTP and make payment of
                            Application Fee online (Rs 177/- per card)
                        </li>
                        <li>Email ID, if available, for retrieving Password etc.</li>
                    </ul>

                    <!-- 4. REGISTRATION -->
                    <p class="fw-bold small text-decoration-underline mb-1 fs-5">
                        Registration
                    </p>

                    <ul class="small fs-6">
                        <li>Go to website <strong>https://echs.gov.in</strong> and click “OK”</li>
                        <li>Select “ONLINE SMART CARD APPLICATION”</li>
                        <li>Select “ONLINE APPLICATION” and click “OK”</li>
                        <li>Then, register application keeping the following points in mind:</li>
                    </ul>

                    <ul class="small ms-3 fs-6">
                        <li>If there is no Prefix, leave it blank & if there is no suffix, put ‘S’ in the space</li>
                        <li>
                            Enter Mobile Number, which should be active to receive OTP immediately and all
                            messages regarding the ECHS Card subsequently
                        </li>
                        <li>
                            Create your password. Keep this Mobile Number and Password with you till your
                            ECHS Card is received, so that you can see the progress and observations on the
                            application, if any, during the processing of ECHS Card
                        </li>
                        <li>
                            Enter Mother’s Name & Place of Birth of Pensioner. Note down these with correct
                            spelling, including capital/small letters. These can be used for resetting password
                        </li>
                        <li>
                            Click “REGISTER”. Message will appear as “Registration done successfully”. Click OK
                        </li>
                        <li>
                            Login page will open. Login using Mobile No and Password given. OTP will be sent to
                            Registered Mobile and mobile verification page will open. Enter OTP and click “Verify”.
                        </li>
                        <li>
                            Message of “MOBILE NUMBER VERIFIED” will be displayed.
                        </li>
                    </ul>

                    <p class="fw-bold small text-decoration-underline mb-1 fs-5">
                        Filling the Application Form Online
                    </p>

                    <ul class="small ms-3 fs-6">
                        <li>Go to web site https://echs.gon.in. Click “OK” </li>
                        <li>
                            Select “ ONLINE SMART CARD APPLICATION
                        </li>
                        <li>
                            Select “ ONLINE APPLICATION”
                        </li>
                        <li>
                            Click “OK”
                        </li>
                        <li>
                            Click “ALREADY REGISTERED. CLICK TO LOGIN”
                        </li>
                        <li>
                            Select the Application Category by clicking “Drag down Icon, small arrow”
                        </li>
                        <li>
                            Fill in the EX SERVICEMAN (ESM) DETAILS
                        </li>
                        <li>
                            Upload Photo & Signature of Primary Beneficiary
                        </li>
                        <li>
                            Enter other details of Primary Beneficiary
                        </li>
                        <li>
                            Upload Photos/ Signatures and other details each dependan
                        </li>
                        <li>
                            Upload PPO, Old ECHS Card of Primary Beneficiary
                        </li>
                        <li>
                            Upload Death Certificate, if ESM is not alive
                        </li>
                        <li>
                            Upload Temporary Slip and other documents, if applicable.
                        </li>
                        <li>
                            Agree the SELF DECLARATION by clicking “ I AGREE”
                        </li>
                        <li>
                            Save the details entered by clicking “SAVE DETAILS” Saved details can be modified or
                            corrected if
                            necessary by logging in once again and saving the corrected details
                        </li>
                        <li>
                            Make Payment by Clicking “MAKE PAYMENT” and giving other details asked.
                        </li>
                        <li>
                            Take Print out of Application Form, Payment Receipt and Temporary Slip, by logging in, after
                            Payment of Fee. Note down Phone Number, Password, Mother’s Name and Place of Birth at the
                            end
                            of Application printed, for future reference.
                        </li>
                        <li>
                            Get the Signature of OIC ECHS on the Temp Slip, Which can be used as ECHS Card, till you
                            receive
                            the NEW ECHS CARD.
                        </li>
                        <li>
                            Check for Observations if any from Record Office, by logging in frequently till the
                            application is
                            verified by Record Office concerned. Sort out the observations by suitable actions and
                            change your
                            details by Editing your application, if necessary. Save details once again after editing the
                            application.
                        </li>
                        <li>
                            Wait for SMS giving OTP for collection of NEW ECHS Cards, to be collected from Station
                            Headquarters.
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>







</div>




@endsection