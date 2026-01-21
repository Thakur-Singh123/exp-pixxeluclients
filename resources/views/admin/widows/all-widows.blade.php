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
                        <h4 class="card-title mb-0">All Widows</h4>
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
                                                colspan="1" style="width: 187.688px;">Window Name
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 84.5px;">Date Of Death
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Documents
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Action
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <!--Get widows records-->
                                          @php $count = 1; @endphp
                                          @foreach ($all_widows as $widow)
                                          <tr role="row">
                                             <td>{{ $count ++ }}.</td>
                                             <td>
                                                <a href="{{ url('admin/single-widow-detail/' . $widow->id) }}" style="color: #6B8E23;">
                                                   {{ $widow->serviceman_detail->army_no ?? '-' }}
                                                </a>
                                             </td>
                                             <td>{{ $widow->window_name ?? '-' }}</td>
                                             <td>{{ \Carbon\Carbon::parse($widow->date_of_death)->format('d M, Y') ?? '-' }}</td>
                                             <td class="text-center">
                                             @if(!empty($widow->wd_documents))
                                                <a href="{{ asset('public/uploads/documents/'.$widow->wd_documents) }}"
                                                   target="_blank"
                                                   style="color:#4135dfc7; font-weight:600;">
                                                   View
                                                </a>
                                             @else
                                                -
                                             @endif
                                             </td>
                                             <td>
                                                <div class="form-button-action">
                                                   <a href="{{ url('admin/edit-widow', $widow->id) }}" class="icon-button edit-btn custom-tooltip" data-tooltip="Edit">
                                                      <i class="fa fa-edit"></i>
                                                   </a>
                                                   <a class="icon-button delete-btn custom-tooltip delete_widow_record" data-widow_id="{{ $widow->id }}" data-tooltip="Delete">
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