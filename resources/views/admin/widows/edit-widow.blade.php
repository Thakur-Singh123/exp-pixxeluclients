@extends('admin.layouts.master')
@section('content')
<style>
   .upload-section {
      margin-top: 15px;   
   }
   .upload-row {
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px dashed #ccc;
      padding-bottom: 10px;
   }
   .upload-field {
      width: 32%;
   }
   .preview-box {
      width: 31%;
      display: flex;
      flex-direction: column; 
      align-items: flex-start;
      justify-content: flex-start;
      gap: 6px;
      padding-top: 4px;
   }
   .preview-label {
      font-weight: 600;
      color: #222;
      font-size: 0.9rem;
      margin-bottom: 2px;
   }
   .preview-img {
      width: 300px;
      height: 180px;
      border-radius: 6px;
      object-fit: cover;
      border: 2px solid #ddd;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
      transition: transform 0.3s ease;
   }
   .no-image-text {
      color: red;
      font-weight: 600;
      font-size: 0.9rem;
      display: inline-block;
      margin-top: 5px;
   }
   td.text-center {
      color: red;
      padding: 10px 360px;
      font-size: 12px;
   }
</style>
<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            @include('admin.notification')
            <div class="card shadow-sm">
               <div class="card-header text-white">
                  <h4 class="card-title mb-0">Edit Widow</h4>
               </div>
               <div class="card-body">
                  <form action="{{ route('admin.update.widow', $widow_detail->id) }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="row">
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Select Army No *</label>
                           <select name="army_no" class="form-control" disabled>
                              <option value="">-- Select Army No --</option>
                              @foreach ($army_numbers as $number)
                                 <option value="{{ $number->army_no }}"
                                    {{ optional($widow_detail->serviceman_detail)->army_no == $number->army_no ? 'selected' : '' }}>
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
                           <input type="text" name="window_name" class="form-control" value="{{ old('window_name', $widow_detail->window_name) }}" placeholder="Enter name">
                           @error('window_name')
                              <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Date of Death *</label>
                           <input type="date" name="date_of_death" class="form-control" value="{{ old('date_of_death', $widow_detail->date_of_death) }}">
                           @error('date_of_death')
                              <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                     </div>
                     <!--Photograph section-->
                     <div class="row upload-section">
                        <!-- <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                           <div class="upload-field">
                              <label>Photograph</label>
                              <input type="file" name="window_image" class="form-control upload-input">
                           </div>
                           <div class="preview-box">
                              <label class="preview-label">Uploaded Photograph</label>
                              @if ($widow_detail->window_image)
                                 <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->window_image) }}" class="preview-img">
                              @else 
                                 <span class="no-image-text">No image found</span>
                              @endif
                           </div>
                        </div> -->
                        <!-- <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                           <div class="upload-field">
                              <label>Aadhar Card</label>
                              <input type="file" name="window_aadhar_image" class="form-control upload-input">
                           </div>
                           <div class="preview-box">
                              <label class="preview-label">Uploaded Aadhar Card</label>
                              @if ($widow_detail->window_aadhar_image)
                                 <img src="{{ asset('public/uploads/ex-images/'.$widow_detail->window_aadhar_image) }}" class="preview-img">
                              @else
                                 <span class="no-image-text">No image found</span>
                              @endif
                           </div>
                        </div> -->
                        <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                           <div class="upload-field">
                              <label>Upload Documents (PDF only)</label>
                              <input type="file" name="wd_documents" class="form-control upload-input" accept="application/pdf">
                           </div>
                           <div class="preview-box">
                              <label class="preview-label">View Uploaded Documents</label>
                              @if (!empty($widow_detail->wd_documents))
                              <a href="{{ asset('public/uploads/documents/'.$widow_detail->wd_documents) }}"
                                 target="_blank"
                                 class="btn btn-sm btn-outline-primary mt-1">
                              View Documents
                              </a>
                              @else 
                                 <span class="no-image-text">No Documents found</span>
                              @endif
                           </div>
                        </div>
                     </div>
                     <!--end photograph section-->
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