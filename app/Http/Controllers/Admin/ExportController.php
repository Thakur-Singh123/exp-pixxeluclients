<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\ExServiceManExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    //Function for show export page
    public function export_page() {
        return view('admin.exports.confirm-export');
    }

    //Function for service record export
    public function export_service() {
        return Excel::download(new ExServiceManExport, 'service_record.xlsx');
    }
}
