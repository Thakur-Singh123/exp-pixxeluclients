@extends('admin.layouts.master')
@section('content')
<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success">
               {{ session('success') }}
            </div>
            @endif
            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">All service records</h4>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <div id="basic-datatables_wrapper"
                              class="dataTables_wrapper container-fluid dt-bootstrap4">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <table id="basic-datatables" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="basic-datatables_info">
                                       <thead>
                                          <tr role="row">
                                             <th class="sorting_asc" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                style="width: 242.688px;">Sr No.
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
                                                colspan="1" style="width: 84.5px;">Village
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Post Office
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Tehsil
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Distt
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">State
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Pin Code
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Mobile Number
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Regiment / Corps
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
                                                colspan="1" style="width: 156.312px;">Education
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Present Occupation
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Registration On DGR Portal
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Status
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Action
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <!--Get records-->
                                          @forelse ($all_services as $tada_record)
                                          <tr role="row">
                                             <td>{{ $tada_record->sr_no }}</td>
                                             <td>
                                                <a href="{{ url('admin/single-service-detail/' . $tada_record->id) }}">
                                                   {{ $tada_record->army_no }}
                                                </a>
                                             </td>

                                             <td>{{ $tada_record->rank }}</td>
                                             <td>{{ $tada_record->name }}</td>
                                             <td>{{ $tada_record->village }}</td>
                                             <td>{{ $tada_record->post_office }}</td>
                                             <td>{{ $tada_record->tehsil }}</td>
                                             <td>{{ $tada_record->district }}</td>
                                             <td>{{ $tada_record->state }}</td>
                                             <td>{{ $tada_record->pin_code }}</td>
                                             <td>{{ $tada_record->mobile_no }}</td>
                                             <td>{{ $tada_record->regiment_corps }}</td>
                                             <td>{{ \Carbon\Carbon::parse($tada_record->dob)->format('d M, Y') }}</td>
                                             <td>{{ \Carbon\Carbon::parse($tada_record->doe)->format('d M, Y') }}</td>
                                             <td>{{ \Carbon\Carbon::parse($tada_record->dor)->format('d M, Y') }}</td>
                                             <td>{{ $tada_record->education }}</td>
                                             <td>{{ $tada_record->present_occupation }}</td>
                                             <td>{{ $tada_record->reg_on_dgr_portal }}</td>
                                             <td>
                                                <span class="status-badge 
                                                   {{ $tada_record->status == 'Pending' ? 'status-pending' : '' }}
                                                   {{ $tada_record->status == 'Reject' ? 'status-suspend' : '' }}
                                                   {{ $tada_record->status == 'Active' ? 'status-approved' : '' }}">
                                                      {{ ucfirst($tada_record->status) }}
                                                </span>
                                             </td>
                                             <td>
                                                <div class="form-button-action">
                                                   <a href="{{ url('admin/edit-service', $tada_record->id) }}" class="icon-button edit-btn custom-tooltip" data-tooltip="Edit">
                                                   <i class="fa fa-edit"></i>
                                                   </a>
                                                   <a href="{{ url('admin/delete-service', $tada_record->id) }}" class="icon-button delete-btn custom-tooltip" data-tooltip="Delete">
                                                   <i class="fa fa-trash"></i>
                                                   </a>
                           
                                                </div>
                                             </td>
                                          </tr>
                                          @empty
                                          <tr>
                                             <td colspan="10" class="text-center">No service record found</td>
                                          </tr>
                                          @endforelse
                                       </tbody>
                                    </table>
                                    {{ $all_services->links('pagination::bootstrap-5') }}
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