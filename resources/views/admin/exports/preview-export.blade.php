@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="page-inner py-4">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header text-white py-3"
                 style="background: linear-gradient(135deg, #6B8E23, #3CB371); border-top-left-radius: 1rem; border-top-right-radius: 1rem;">
                <h4 class="card-title mb-0">
                    <i class="fas fa-table me-2"></i> Preview Service Record Data
                </h4>
            </div>

            <div class="card-body bg-light">
                @if($records->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle bg-white">
                            <thead class="table-success text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Army No</th>
                                    <th>Name</th>
                                    <th>Rank</th>
                                    <th>Trade</th>
                                    <th>Joining Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($records as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><strong>{{ $item->army_no ?? '-' }}</strong></td>
                                    <td>{{ $item->name ?? '-' }}</td>
                                    <td>{{ $item->rank ?? '-' }}</td>
                                    <td>{{ $item->trade ?? '-' }}</td>
                                    <td>{{ $item->joining_date ?? '-' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-4">
                        <a href="{{ route('export.download') }}" class="btn btn-success btn-lg px-4">
                            <i class="fas fa-download me-2"></i> Export to Excel
                        </a>
                        <a href="{{ route('export.page') }}" class="btn btn-secondary btn-lg px-4 ms-2">
                            <i class="fas fa-arrow-left me-2"></i> Back
                        </a>
                    </div>
                @else
                    <div class="text-center py-5">
                        <i class="fas fa-info-circle fa-3x text-muted mb-3"></i>
                        <p>No records found to preview.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
