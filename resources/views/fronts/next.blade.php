<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>VSK CELL Dharamshala</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="{{ asset('public/admin/assets/vendor/fontawesome/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public/admin/assets/vendor/intl-tel-input/css/intlTelInput.css') }}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('public/admin/assets/datatables/css/dataTables.dataTables.min.css') }}">
      <style>
         body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background: #f0f4f9;
         }
         .name-data-bank {
            display: flex;
            justify-content: center; 
            padding: 10px;
         }
         .name-data-bank-1 {
            color: #fff;
            background: transparent !important;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: 0.3s;
         }
         .name-data-bank-1.active {
            background: #6B8E23 !important;
            color: #FFF;
            border: 0 !important;
            border-radius: 8px;
         }
         .content {
            display: none;
            padding: 20px;
            animation: fadeIn 0.5s ease-in-out;
         }
         .content.active {
            display: block;
         }
         .content.active h2 {
            text-align: center;
            font-size: 32px;
            text-transform: uppercase;
            text-decoration: underline;
         }
         .dt-length label {
    text-transform: capitalize;
}
         .main-tabs {
            background: linear-gradient(to bottom, #4B5320, #1E2F14);
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px;
         }
         .content.active .dt-layout-cell.dt-layout-start {
            margin: 0 !important;
         }
         .content.active .dt-layout-cell.dt-layout-end {
            margin: 0 !important;
         }
         .content.active .dt-layout-row {
            justify-content: left !important;
            gap: 35px;
         }
         div.dt-container {
            border: 1px solid #000000;
            padding: 15px 25px;
         }
         table.display.dataTable thead {
            font-size: 18px;
         }
         table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
         }
         th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
         }
         th {
            background: #4B5320;
            color: #fff;
         }
         tr:nth-child(even) {
            background: #f9f9f9;
         }
         @keyframes fadeIn {
            from {
               opacity: 0;
            }
            to {
            opacity: 1;
            }
         }
         .dataTables_wrapper .dataTables_filter input {
            border-radius: 6px;
            padding: 5px 8px;
            border: 1px solid #aaa;
         }
         .dataTables_wrapper .dataTables_paginate {
            margin-top: 10px;
         }
         .modal {
            display: none;
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            justify-content: center;
            align-items: center;
            z-index: 999;
         }
         .modal-content {
            background: white;
            padding: 20px;
            border-radius: 12px;
            width: 400px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            position: relative;
            animation: fadeIn 0.4s ease;
         }
         .close-btn {
            position: absolute;
            top: 8px;
            right: 12px;
            font-size: 1.2rem;
            cursor: pointer;
            color: #555;
         }
         .view-icon {
            color: #1e3c72;
            cursor: pointer;
            font-size: 1.2rem;
         }
         .view-icon:hover {
            color: #ffcc00;
         }
         .tab-link {
            color: #fff;
            background: transparent;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: 0.3s;
            text-decoration: none;
            display: inline-block;
         }
         .loader {
            width: 100px;
            height: 100px;
            border: 6px solid #ccc;
            border-top: 6px solid #4B5320;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1001;
         }
         @keyframes spin {
            0% { 
               transform: translate(-50%, -50%) rotate(0deg); 
            }
            100% { 
               transform: translate(-50%, -50%) rotate(360deg); 
            }
         }
         @keyframes spin {
            0% { 
               transform: rotate(0deg);
            }
            100% { 
               transform: rotate(360deg); 
            }
         }
         td.dt-empty {
            color: red;
            font-size: 14px;
         }
         .header-links {
            display: flex;
            align-items: center;
            gap: 12px;
         }
         .menu-btn {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            transition: 0.3s ease;
         }
         
      </style>
   </head>
   <body>
      <div class="main-tabs">
         <div class="tabs name-data-bank">
            <button class="main-data-tab active name-data-bank-1" data-target="exman">Ex-Serviceman Data Bank</button>
            <button class="main-data-tab name-data-bank-1" data-target="widow">Widows Data Bank</button>
            <button class="main-data-tab name-data-bank-1" data-target="veer">Veer Naries Data Bank</button>
         </div>
       <div class="header-links">
        <a href="{{ url('/') }}" class="menu-btn">
            <i class="fa-solid fa-arrow-left"></i> Back
        </a>

        <a href="{{ route('login') }}" class="menu-btn">
            <i class="fa-solid fa-right-to-bracket"></i> Login
        </a>
    </div>
      </div>
      <!--Ex-Man-->
      <div id="exman" class="content active">
         <h2>Data Bank of Ex-Serviceman</h2>
         <table id="exmanTable" class="display">
            <thead>
               <tr>
                  <th>Sr.No</th>
                  <th>Army No</th>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>DOB</th>
                  <th>DOE</th>
                  <th>DOR</th>
                  <th>Regiment / Corps</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <!--Get services-->
               @php $count = 1; @endphp;
               @foreach($all_services as $service)
               <tr data-details>
                  <td>{{ $count ++ }}.</td>
                  <td>{{ $service->army_no ?? '-' }}</td>
                  <td>{{ $service->rank ?? '-' }}</td>
                  <td>{{ $service->name ?? '-' }}</td>
                  <td>{{ \Carbon\Carbon::parse($service->dob)->format('d M, Y') ?? '-' }}</td>
                  <td>{{ \Carbon\Carbon::parse($service->doe)->format('d M, Y') ?? '-' }}</td>
                  <td>{{ \Carbon\Carbon::parse($service->dor)->format('d M, Y') ?? '-' }}</td>
                  <td>{{ $service->regiment_corps ?? '-' }}</td>
                  <td><i class="fa-solid fa-eye view-icon" data-type="exman" data-id="{{ $service->id }}"></i></td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
      <!--Widow-->
      <div id="widow" class="content">
         <h2>Data Bank of Widows</h2>
         <table id="widowTable" class="display">
            <thead>
               <tr>
                  <th>Sr.No</th>
                  <th>Army No</th>
                  <th>Name</th>
                  <th>Date of Death</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <!--Get windos-->
               @php $count = 1; @endphp;
               @foreach($all_widows as $widow)
               <tr data-details>
                  <td>{{ $count ++ }}.</td>
                  <td>{{ $widow->serviceman_detail->army_no ?? '-' }}</td>
                  <td>{{ $widow->window_name ?? '-' }}</td>
                  <td>{{ \Carbon\Carbon::parse($widow->date_of_death)->format('d M, Y') ?? '-' }}</td>
                  <td><i class="fa-solid fa-eye view-icon" data-type="widow" data-id="{{ $widow->id }}"></i></td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
      <!--Veer Naries-->
      <div id="veer" class="content">
         <h2>Data Bank of Veer Naries</h2>
         <table id="veerTable" class="display">
            <thead>
               <tr>
                  <th>Sr.No</th>
                  <th>Army No</th>
                  <th>Name</th>
                  <th>Expose Year</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <!--Get veer naries-->
               @php $count = 1; @endphp;
               @foreach($all_veers as $veer)
               <tr data-details>
                  <td>{{ $count ++ }}.</td>
                  <td>{{ $veer->serviceman_detail->army_no ?? '-' }}</td>
                  <td>{{ $veer->veer_nari_name ?? '-' }}</td>
                  <td>{{ $veer->veer_nari_expose_year ?? '-' }}</td>
                  <td><i class="fa-solid fa-eye view-icon" data-type="veer" data-id="{{ $veer->id }}"></i></td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
      <!--Modal-->
      <div class="modal" id="detailModal">
         <div id="loader" style="text-align:center; display:none;">
            <div class="loader"></div>
         </div>
         <div id="detailBody"></div>
      </div>
      <script src="{{ asset('public/admin/assets/js/jquery-3.6.0.min.js') }}"></script>
      <script src="{{ asset('public/admin/assets/datatables/js/dataTables.min.js') }}"></script>
      <script src="{{ asset('public/admin/assets/vendor/intl-tel-input/js/intlTelInput.min.js') }}"></script>
      <script src="{{ asset('public/admin/assets/vendor/intl-tel-input/js/utils.js') }}"></script>
      <script>
         $(document).ready(function() {
            $(".main-data-tab").on("click", function() {
            $(".main-data-tab").removeClass("active");
               $(this).addClass("active");
               let target = $(this).data("target");
               
               $(".content").removeClass("active");
               $("#" + target).addClass("active");
            });
         });
      </script>
      <script>
         $(document).ready(function () {
            $('#exmanTable').DataTable({
               pageLength: 50,
               lengthMenu: [10, 25, 50, 100]
            });
            $('#widowTable').DataTable({
               pageLength: 50,
               lengthMenu: [10, 25, 50, 100]
            });
            $('#veerTable').DataTable({
               pageLength: 50,
               lengthMenu: [10, 25, 50, 100]
            });
           $(document).on("click", ".view-icon", function () {
               let id = $(this).data("id");
               let type = $(this).data("type");
               let url = "";
               if (type === "exman") url = "{{ url('single-service-detail') }}/" + id;
               if (type === "widow") url = "{{ url('single-window-detail') }}/" + id;
               if (type === "veer")  url = "{{ url('single-veer-nari-detail') }}/" + id;

               $.ajax({
                  url: url,
                  type: "GET",
                  beforeSend: function () {
                        $("#detailModal").css("display", "flex");
                        $("#loader").show();
                        $("#detailBody").hide();
                  },
                  success: function (response) {
                        $("#loader").hide();
                        if (response.status) {
                           $("#detailBody").html(response.html).show();
                        }
                  }
               });
            });
            $(".close-btn").on("click", function() {
               $("#detailModal").hide();
            });
            $(window).on("click", function(e) {
               if ($(e.target).is("#detailModal")) $("#detailModal").hide();
            });
         });
      </script>
   </body>
</html>