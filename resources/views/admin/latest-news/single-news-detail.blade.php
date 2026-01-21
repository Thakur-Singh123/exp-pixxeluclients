@extends('admin.layouts.master')
@section('content')
<style>
   .news-box {
      border-radius: 14px;
      background: #ffffff;
      padding: 25px;
      box-shadow: 0px 4px 20px rgba(0,0,0,0.08);
   }
   .news-title {
      font-size: 22px;
      font-weight: 700;
      color: #2c3e50;
      line-height: 1.4;
   }
   .news-label {
      font-weight: 600;
      color: #555;
      margin-bottom: 6px;
      display: block;
   }
   .news-value {
      font-size: 16px;
      background: #f8f9fa;
      padding: 12px 15px;
      border-radius: 10px;
      border: 1px solid #eaeaea;
   }
   .news-date {
      font-size: 15px;
      padding: 10px 14px;
      background: #eef3ff;
      border-radius: 8px;
      display: inline-block;
      border: 1px solid #d8e1ff;
      color: #2c3e50;
      font-weight: 600;
   }
   .card-header h4 {
      font-weight: 600;
      letter-spacing: .5px;
   }
   .back-btn {
      background: #6B8E23;
      color: #2c3e50 !important;
      font-weight: 600;
      border-radius: 8px;
      padding: 7px 18px;
      border: 1px solid #dcdcdc;
      box-shadow: 0px 3px 10px rgba(0,0,0,0.12);
      transition: all 0.25s ease-in-out;
   }
</style>
<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            @include('admin.notification')
            <div class="card shadow-lg">
               <div class="card-header d-flex justify-content-between align-items-center text-white">
                  <div style="width:10%;"></div>
                  <h4 class="card-title mb-0 text-center" style="flex:1;">
                     Single News Detail
                  </h4>
                  <a href="{{ url('admin/news') }}" class="back-btn">
                     ←Back
                  </a>
               </div>
               <div class="card-body">
                  <div class="news-box">
                     <div class="row">
                        <div class="col-md-10 mb-4">
                           <span class="news-label">Title</span>
                           <div class="news-value">
                              {{ $news_detail->title ?? 'N/A' }}
                           </div>
                        </div>
                        <div class="col-md-2 mb-4">
                           <span class="news-label">Created Date</span>
                           <div class="news-date">
                              {{ date('d M Y', strtotime($news_detail->date ?? now())) }}
                           </div>
                        </div>
                        <div class="row upload-section">
                           <div class="col-md-12 mb-3 d-flex align-items-start upload-row">
                              <div class="preview-box">
                                 <label class="preview-label">View Uploaded Pdf</label><br><br>
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
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection