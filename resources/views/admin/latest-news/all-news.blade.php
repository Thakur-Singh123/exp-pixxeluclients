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
                        <h4 class="card-title mb-0">All News</h4>
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
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 187.688px;">Title
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 84.5px;">Created Date
                                             </th>
                                             <th class="sorting" tabindex="0"
                                                aria-controls="basic-datatables" rowspan="1"
                                                colspan="1" style="width: 156.312px;">Action
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <!--Get news records-->
                                          @php $count = 1; @endphp
                                          @foreach ($all_news as $news)
                                          <tr role="row">
                                             <td>
                                                <a href="{{ url('admin/single-news-detail/' . $news->id) }}" style="color: #6B8E23;">
                                                   {{ $count ++ }}.
                                                </a>
                                             </td>
                                             <td>{{ $news->title ?? '-' }}</td>
                                             <td>{{ \Carbon\Carbon::parse($news->date)->format('d M, Y') ?? '-' }}</td>
                                             <td>
                                                <div class="form-button-action">
                                                   <a href="{{ url('admin/edit-news', $news->id) }}" class="icon-button edit-btn custom-tooltip" data-tooltip="Edit"><i class="fa fa-edit"></i></a>
                                                   <a class="icon-button delete-btn custom-tooltip delete_news_record" data-news_id="{{ $news->id }}" data-tooltip="Delete"><i class="fa fa-trash"></i></a>
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