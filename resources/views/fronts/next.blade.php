<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Data Banks | VSK CELL Dharamshala</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="{{ asset('public/admin/assets/vendor/fontawesome/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public/admin/assets/vendor/intl-tel-input/css/intlTelInput.css') }}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('public/admin/assets/datatables/css/dataTables.dataTables.min.css') }}">
      <script src="{{ asset('public/admin/assets/datatables/js/dataTables.min.js') }}"></script>
      <style>
      body {
         margin: 0;
         font-family: "Poppins", sans-serif;
         background: #f0f4f9;
      }
      .tabs {
         display: flex;
         justify-content: center;
         background: #1e3c72;
         padding: 10px;
      }
      .tab {
         color: #fff;
         background: transparent;
         border: none;
         padding: 10px 20px;
         cursor: pointer;
         font-size: 1rem;
         font-weight: 600;
         transition: 0.3s;
      }
      .tab.active {
         background: #ffcc00;
         color: #000;
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
         background: #1e3c72;
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
      </style>
   </head>
   <body>
      <div class="tabs">
         <button class="tab active" data-target="exman">Ex-Man Data Bank</button>
         <button class="tab" data-target="widow">Widows Data Bank</button>
         <button class="tab" data-target="veer">Veer Naries Data Bank</button>
         <a href="{{ route('login') }}" class="tab-link">
         <i class="fa-solid fa-right-to-bracket"></i> Login
         </a>
      </div>
      <!--Ex-Man-->
      <div id="exman" class="content active">
         <h2>Data Bank of Ex-Man</h2>
         <table id="exmanTable" class="display">
            <thead>
               <tr>
                  <th>Ser.No</th>
                  <th>Army No</th>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>Village</th>
                  <th>Post Office</th>
                  <th>Tehsil</th>
                  <th>District</th>
                  <th>State</th>
                  <th>Pin Code</th>
                  <th>Mobile No</th>
                  <th>Regiment/Corps</th>
                  <th>DOB</th>
                  <th>DOE</th>
                  <th>DOR</th>
                  <th>Education</th>
                  <th>Present Occupation</th>
                  <th>Bank Account Number</th>
                  <th>Bank Name</th>
                  <th>IFSC Code</th>
                  <th>MICR Code</th>
                  <th>Aadhar Card Number</th>
                  <th>Pan Card Numbe</th>
                  <th>ECHS Card Number</th>
                  <th>CSD Card Number</th>
                  <th>Decorator Soldier</th>
                  <th>Disabled</th>
                  <th>Registor On DGR Portal</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <!--Get services-->
               @forelse($all_services as $service)
               <tr data-details>
                  <td>{{ $service->sr_no ?? '-' }}</td>
                  <td>{{ $service->army_no ?? '-' }}</td>
                  <td>{{ $service->rank ?? '-' }}</td>
                  <td>{{ $service->name ?? '-' }}</td>
                  <td>{{ $service->village ?? '-' }}</td>
                  <td>{{ $service->post_office ?? '-' }}</td>
                  <td>{{ $service->tehsil ?? '-' }}</td>
                  <td>{{ $service->district ?? '-' }}</td>
                  <td>{{ $service->state ?? '-' }}</td>
                  <td>{{ $service->pin_code ?? '-' }}</td>
                  <td>{{ $service->mobile_no ?? '-' }}</td>
                  <td>{{ $service->regiment_corps ?? '-' }}</td>
                  <td>{{ $service->dob ?? '-' }}</td>
                  <td>{{ $service->doe ?? '-' }}</td>
                  <td>{{ $service->dor ?? '-' }}</td>
                  <td>{{ $service->education ?? '-' }}</td>
                  <td>{{ $service->present_occupation ?? '-' }}</td>
                  <td>{{ $service->bank_acc_no ?? '-' }}</td>
                  <td>{{ $service->bank_name ?? '-' }}</td>
                  <td>{{ $service->ifsc_code ?? '-' }}</td>
                  <td>{{ $service->micr_code ?? '-' }}</td>
                  <td>{{ $service->aadhar_card_no ?? '-' }}</td>
                  <td>{{ $service->pan_card_no ?? '-' }}</td>
                  <td>{{ $service->echs_card_no ?? '-' }}</td>
                  <td>{{ $service->csd_card_no ?? '-' }}</td>
                  <td>{{ $service->decorator_soldier ?? '-' }}</td>
                  <td>{{ $service->disabled ?? '-' }}</td>
                  <td>{{ $service->reg_on_dgr_portal ?? '-' }}</td>
                  <td><i class="fa-solid fa-eye view-icon" data-id="{{ $service->id }}"></i></td>
               </tr>
               @empty
               <tr>
                  <td colspan="10" class="text-center">No data bank of Ex-Man found</td>
               </tr>
               @endforelse
            </tbody>
         </table>
      </div>
      <!-- Widow -->
      <div id="widow" class="content">
         <h2>Data Bank of Widows</h2>
         <table id="widowTable" class="display">
            <thead>
               <tr>
                  <th>Ser.No</th>
                  <th>Army No</th>
                  <th>Name</th>
                  <th>Date of Death</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <!--Get windos-->
               @forelse($all_services as $service)
               <tr data-details>
                  <td>{{ $service->sr_no ?? '-' }}</td>
                  <td>{{ $service->army_no ?? '-' }}</td>
                  <td>{{ $service->window_name ?? '-' }}</td>
                  <td>{{ \Carbon\Carbon::parse($service->date_of_death)->format('d M, Y') ?? '-' }}</td>
                  <td><i class="fa-solid fa-eye view-icon" data-id="{{ $service->id }}"></i></td>
               </tr>
               @empty
               <tr>
                  <td colspan="10" class="text-center">No data bank of Widows found</td>
               </tr>
               @endforelse
            </tbody>
         </table>
      </div>
      <!-- Veer Naries -->
      <div id="veer" class="content">
         <h2>Data Bank of Veer Naries</h2>
         <table id="veerTable" class="display">
            <thead>
               <tr>
                  <th>Ser.No</th>
                  <th>Army No</th>
                  <th>Name</th>
                  <th>Expose Year</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <!--Get veer naries-->
               @forelse($all_services as $service)
               <tr data-details>
                  <td>{{ $service->sr_no ?? '-' }}</td>
                  <td>{{ $service->army_no ?? '-' }}</td>
                  <td>{{ $service->veer_nari_name ?? '-' }}</td>
                  <td>{{ $service->veer_nari_expose_year ?? '-' }}</td>
                  <td><i class="fa-solid fa-eye view-icon" data-id="{{ $service->id }}"></i></td>
               </tr>
               @empty
               <tr>
                  <td colspan="10" class="text-center">No data bank of Ex-Man found</td>
               </tr>
               @endforelse
            </tbody>
         </table>
      </div>
      <!--Modal-->
      <div class="modal" id="detailModal">
         <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3 id="detailTitle" class="mb-3 text-primary border-bottom pb-2">Person Details</h3>
            <div id="detailBody"></div>
         </div>
      </div>
      <script src="{{ asset('public/admin/assets/js/jquery-3.6.0.min.js') }}"></script>
      <script src="{{ asset('public/admin/assets/datatables/js/dataTables.min.js') }}"></script>
      <script src="{{ asset('public/admin/assets/vendor/intl-tel-input/js/intlTelInput.min.js') }}"></script>
      <script src="{{ asset('public/admin/assets/vendor/intl-tel-input/js/utils.js') }}"></script>
      <script>
         $(document).ready(function() {
         $(".tab").on("click", function() {
         $(".tab").removeClass("active");     
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
            $(document).on("click", ".view-icon", function() {
               let id = $(this).data("id");
               let modal = $("#detailModal");
               let detailBody = $("#detailBody");
               let detailTitle = $("#detailTitle");
            
               $.ajax({
                  url: "{{ url('single-service-detail') }}/" + id,
                  type: "GET",
                  beforeSend: function() {
                        detailBody.html("<p style='text-align:center;'>Loading details...</p>");
                        modal.css("display", "flex");
                  },
                  success: function(response) {
                     if (response.status) {
                        detailBody.html(response.html);
                     } else {
                        detailBody.html("<p class='text-danger text-center'>Record not found!</p>");
                     }
                  },
                  error: function() {
                     detailBody.html("<p class='text-danger text-center'>Something went wrong!</p>");
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