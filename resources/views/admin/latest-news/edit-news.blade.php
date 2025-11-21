@extends('admin.layouts.master')
@section('content')
<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            @include('admin.notification')
            <div class="card shadow-sm">
               <div class="card-header text-white">
                  <h4 class="card-title mb-0">Edit News</h4>
               </div>
               <div class="card-body">
                  <form action="{{ route('admin.update.news', $news_detail->id) }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="row">
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Title *</label>
                           <textarea name="title" class="form-control" rows="3" placeholder="Enter title">{{ old('title', $news_detail->title) }}</textarea>
                           @error('title')
                              <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Created Date *</label>
                           <input type="date" name="date" class="form-control" value="{{ old('date', $news_detail->date) }}">
                           @error('date')
                              <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                     </div>
                     <!--End photograph section-->
                     <div class="form-submit-left">
                        <button type="submit" class="btn btn-primary">Update</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection