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
                                                colspan="1" style="width: 84.5px;">Aadhar No</th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 184.234px;">Category of Ward
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1"
                                                aria-label="Salary: activate to sort column ascending"
                                                style="width: 156.312px;">Force Type
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Unit/Regt/Corps
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Vill
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Po
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
                                                colspan="1" style="width: 156.312px;">Pin
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Mob no
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
                                                colspan="1" style="width: 156.312px;">Present PC
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Pro No
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Name of Dependents
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">No of Dependents
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Relation with ESM
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Dependent DOB
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Occupation
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Aadhar No
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Bank Detail
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
                                          @php $count = 1 @endphp
                                          @forelse ($all_services as $tada_record)
                                          <tr role="row">
                                             <td class="sorting_1">{{ $count++ }}.</td>
                                             <td>{{ $tada_record->army_no }}</td>
                                             <td>{{ $tada_record->rank }}</td>
                                             <td>{{ $tada_record->name }}</td>
                                             <td>{{ $tada_record->aadhar_no }}</td>
                                             <td>{{ $tada_record->category_of_ward }}</td>
                                             <td>{{ $tada_record->force_type }}</td>
                                             <td>{{ $tada_record->unit_regt_corps }}</td>
                                             <td>{{ $tada_record->vill }}</td>
                                             <td>{{ $tada_record->po }}</td>
                                             <td>{{ $tada_record->tehsil }}</td>
                                             <td>{{ $tada_record->distt }}</td>
                                             <td>{{ $tada_record->pin }}</td>
                                             <td>{{ $tada_record->mob_no }}</td>
                                             <td>{{ \Carbon\Carbon::parse($tada_record->dob)->format('d M, Y') }}</td>
                                             <td>{{ \Carbon\Carbon::parse($tada_record->doe)->format('d M, Y') }}</td>
                                             <td>{{ \Carbon\Carbon::parse($tada_record->dor)->format('d M, Y') }}</td>
                                             <td>{{ $tada_record->present_pc }}</td>
                                             <td>{{ $tada_record->ppo_no }}</td>
                                             <td>{{ $tada_record->dependent_name }}</td>
                                             <td>{{ $tada_record->no_of_dependent }}</td>
                                             <td>{{ $tada_record->relation_with_esm }}</td>
                                             <td>{{ \Carbon\Carbon::parse($tada_record->dependent_dob)->format('d M, Y') }}</td>
                                             <td>{{ $tada_record->dependent_occupation }}</td>
                                             <td>{{ $tada_record->dependent_aadhar }}</td>
                                             <td>{{ $tada_record->bank_details }}</td>
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