@extends('admin.layouts.master')
@section('content')
<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
           <!--success message section-->
            @include('admin.notification')
            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header text-white">
                        <h4 class="card-title mb-0">All Ex-Serviceman</h4>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <div id="basic-datatables_wrapper"
                              class="dataTables_wrapper container-fluid dt-bootstrap4">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <table id="serviceTable" class="display">
                                       <thead>
                                          <tr role="row">
                                             <th class="sorting_asc" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                style="width: 242.688px;">Sr.No
                                             </th>
                                             <th class="sorting_asc" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                style="width: 242.688px;">Army No
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 366.578px;">Rank
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 187.688px;">Name
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Dob
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Doe
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Dor
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Regiment / Corps
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Action
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @php $count = 1; @endphp
                                          <!--Get service records-->
                                          @foreach ($all_services as $service)
                                          <tr role="row">
                                             <td>{{ $count ++ }}.</td>
                                             <td>
                                                <a href="{{ url('admin/single-service-detail/' . $service->id) }}" style="color: #6B8E23;">
                                                   {{ $service->army_no ?? '-' }}
                                                </a>
                                             </td>
                                             <td>{{ $service->rank ?? '-' }}</td>
                                             <td>{{ $service->name ?? '-' }}</td>
                                             <td>{{ \Carbon\Carbon::parse($service->dob)->format('d M, Y') ?? '-' }}</td>
                                             <td>{{ \Carbon\Carbon::parse($service->doe)->format('d M, Y') ?? '-' }}</td>
                                             <td>{{ \Carbon\Carbon::parse($service->dor)->format('d M, Y') ?? '-' }}</td>
                                             <td>{{ $service->regiment_corps ?? '-' }}</td>
                                             <td>
                                                <div class="form-button-action">
                                                   <a href="{{ url('admin/edit-service', $service->id) }}" class="icon-button edit-btn custom-tooltip" data-tooltip="Edit">
                                                      <i class="fa fa-edit"></i>
                                                   </a>
                                                   <a class="icon-button delete-btn custom-tooltip delete_service_record" data-service_id="{{ $service->id }}" data-tooltip="Delete">
                                                      <i class="fa fa-trash"></i>
                                                   </a>
                                                </div>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection