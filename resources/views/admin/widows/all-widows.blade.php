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
                     <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">All Widows</h4>
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
                                                style="width: 242.688px;">Ser.No
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
                                                colspan="1" style="width: 187.688px;">Window Name
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 84.5px;">Date Of Death
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <!--Get service records-->
                                          @foreach ($all_services as $service)
                                          <tr role="row">
                                             <td>{{ $service->sr_no ?? '-' }}</td>
                                             <td>
                                                <a href="{{ url('admin/single-widow-detail/' . $service->id) }}" style="color: #6B8E23;">
                                                   {{ $service->army_no ?? '-' }}
                                                </a>
                                             </td>
                                             <td>{{ $service->rank ?? '-' }}</td>
                                             <td>{{ $service->window_name ?? '-' }}</td>
                                             <td>{{ \Carbon\Carbon::parse($service->date_of_death)->format('d M, Y') ?? '-' }}</td>
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