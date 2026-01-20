@extends('admin.layouts.master')
@section('content')
<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            @include('admin.notification')
            <div class="card shadow-sm">
               <div class="card-header text-white">
                  <h4 class="card-title mb-0">Add Latest News</h4>
               </div>
               <div class="card-body">
                  <form action="{{ route('admin.submit.news') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="row">
                        <div class="col-md-6 mb-3">
                           <label class="form-label">Title</label>
                           <textarea type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Enter title">{{ old('title') }}</textarea>
                           @error('title')
                              <small class="text-danger">
                                 {{ $message }}
                              </small>
                           @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                           <label class="form-label">Created Date *</label>
                           <input type="date"
                                 name="date"
                                 class="form-control"
                                 value="{{ old('date', date('Y-m-d')) }}">
                           @error('date')
                              <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                     </div>
                     <!--Photograph section-->
                     <div class="row">
                        <div class="col-md-12 mb-3 d-flex align-items-start">
                           <div class="me-3" style="width:31%;">
                              <label>Upload Documents (PDF only)</label>
                              <input type="file" name="document" class="form-control upload-input" accept="application/pdf">
                           </div>
                           <div class="preview-box"></div>
                        </div>
                     </div>
                     <!--End photograph section-->
                     <div class="form-submit-left">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="{{ asset('public/admin/assets/js/jquery-3.6.0.min.js') }}"></script>
<script>
   $(document).ready(function () {
      $('input[type="file"]').each(function () {
         let fileInput = $(this);
         fileInput.on('change', function (e) {
            const file = e.target.files[0];
            if (!file) return;
            fileInput.next('.upload-preview').remove();
            const previewContainer = $('<div class="upload-preview"></div>');
            const progress = $('<div class="progress"><div class="progress-bar"></div></div>');
            fileInput.after(previewContainer);
            previewContainer.html(progress);
   
            let progressVal = 0;
            const progressInterval = setInterval(() => {
               progressVal += 5;
               progress.find('.progress-bar').css('width', progressVal + '%');
   
               if (progressVal >= 100) {
                  clearInterval(progressInterval);
                  if (file.type === 'application/pdf') {
                     previewContainer.html(`
                        <div class="mt-1 small text-muted">${file.name}</div>
                     `);
                     return;
                  }
                  const reader = new FileReader();
                  reader.onload = function (e) {
                     const removeBtn = $('<button type="button" class="remove-btn">&times;</button>');
   
                     previewContainer.html(`
                        <img src="${e.target.result}" alt="Preview">
                        <div class="mt-1 small text-muted">${file.name}</div>
                     `);
   
                     previewContainer.append(removeBtn);
   
                     removeBtn.on('click', function () {
                        previewContainer.remove();
                        fileInput.val('');
                     });
                  };
                  reader.readAsDataURL(file);
               }
            }, 80);
         });
      });
   });
</script>
@endsection