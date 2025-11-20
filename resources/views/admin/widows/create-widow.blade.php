@extends('admin.layouts.master')
@section('content')
<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            @include('admin.notification')
            <div class="card shadow-sm">
               <div class="card-header text-white">
                  <h4 class="card-title mb-0">Add Widow</h4>
               </div>
               <div class="card-body">
                  <form action="{{ route('admin.submit.widow') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="row">
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Select Army No *</label>
                           <select name="army_no" class="form-control">
                              <option value="">-- Select Army No --</option>
                              @foreach ($army_numbers as $number)
                              <option value="{{ $number->army_no }}">
                                 {{ $number->army_no }}
                              </option>
                              @endforeach
                           </select>
                           @error('army_no')
                              <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Name *</label>
                           <input type="text" name="window_name" class="form-control" value="{{ old('window_name') }}">
                           @error('window_name')
                              <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">DOD (Date of Death) *</label>
                           <input type="date" name="date_of_death" class="form-control" value="{{ old('date_of_death') }}">
                           @error('date_of_death')
                              <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                     </div>
                     <!--Photograph section-->
                     <div class="row">
                        <div class="col-md-12 mb-3 d-flex align-items-start">
                           <div class="me-3" style="width:31%;">
                              <label>Photograph</label>
                              <input type="file" name="window_image" class="form-control upload-input">
                           </div>
                           <div class="preview-box"></div>
                        </div>
                        <div class="col-md-12 mb-3 d-flex align-items-start">
                           <div class="me-3" style="width: 31%;">
                              <label>Aadhar Card</label>
                              <input type="file" name="window_aadhar_image" class="form-control upload-input">
                           </div>
                           <div class="preview-box"></div>
                        </div>
                        <div class="col-md-12 mb-3 d-flex align-items-start">
                           <div class="me-3" style="width:31%;">
                              <label>PAN Card</label>
                              <input type="file" name="window_pan_image" class="form-control upload-input">
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
   $(document).ready(function() {
      $('input[type="file"]').each(function() {
         let fileInput = $(this);
         fileInput.on('change', function(e) {
               const file = e.target.files[0];
               if (!file) return;
               fileInput.next('.upload-preview').remove();
               const previewContainer = $('<div class="upload-preview"></div>');
               const progress = $('<div class="progress"><div class="progress-bar"></div></div>');
               const removeBtn = $('<button type="button" class="remove-btn">&times;</button>');
   
               fileInput.after(previewContainer);
               previewContainer.html(progress);
   
               let progressVal = 0;
               const progressInterval = setInterval(() => {
                  progressVal += 5;
                  progress.find('.progress-bar').css('width', progressVal + '%');
                  if (progressVal >= 100) {
                     clearInterval(progressInterval);
   
                     const reader = new FileReader();
                     reader.onload = function(e) {
                           previewContainer.html(`
                              <img src="${e.target.result}" alt="Preview">
                              <div class="mt-1 small text-muted">${file.name}</div>
                           `);
                           previewContainer.append(removeBtn);
                     };
                     reader.readAsDataURL(file);
                  }
               }, 80); 
   
               removeBtn.on('click', function() {
                  previewContainer.remove();
                  fileInput.val('');
               });
         });
      });
   });
</script>
@endsection