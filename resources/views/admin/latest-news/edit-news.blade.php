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
   .upload-preview {
      margin-top: 8px;
      padding: 10px 14px;
      border: 1px solid #d9d9d9;
      border-radius: 6px;
      background: #ffffff;
      width: 300px;
      font-size: 13px;
   }
   .upload-preview .progress {
      height: 6px;
      background-color: #ececec;
      border-radius: 4px;
      overflow: hidden;
      margin-bottom: 6px;
   }
   .upload-preview .progress-bar {
      height: 100%;
      width: 0%;
      background-color: #6b8e23; 
      transition: width 0.3s ease;
   }
   .upload-preview .small.text-muted {
      font-size: 13px;
      color: #444;
      font-weight: 500;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
   }
   .upload-preview .remove-btn {
      display: none !important;
   }
   .upload-preview img {
      display: none !important;
   }
   @media (max-width: 576px) {
      .upload-preview {
         width: 100%;
      }
   }
</style>
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
                        <div class="col-md-6 mb-3">
                           <label class="form-label">Title</label>
                           <textarea type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Enter title">{{ old('title', $news_detail->title) }}</textarea>
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
                              value="{{ old('date', $news_detail->date) }}">
                           @error('date')
                           <small class="text-danger">
                              {{ $message }}
                           </small>
                           @enderror
                        </div>
                     </div>
                     <!--Photograph section-->
                     <div class="row upload-section">
                        <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                           <div class="upload-field">
                              <label>Upload Documents (PDF only)</label>
                              <input type="file" name="document" class="form-control upload-input" accept="application/pdf">
                           </div>
                           <div class="preview-box">
                              <label class="preview-label">View Uploaded Pdf</label>
                              @if (!empty($news_detail->document))
                              <a href="{{ asset('public/uploads/news/'.$news_detail->document) }}"
                                 target="_blank"
                                 class="btn btn-sm btn-outline-primary mt-1">
                                 View Pdf
                              </a>
                              @else 
                                 <span class="no-image-text">No Documents found</span>
                              @endif
                           </div>
                        </div>
                     </div>
                  <!--End photograph section-->
                  <div class="form-submit-left">
                     <button type="submit" class="btn btn-primary">Update</button>
                  </div>
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