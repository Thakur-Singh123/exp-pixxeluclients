<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExServiceMan;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExServiceManImport;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    //Function for add import file
    public function add_import() {
        return view('admin.imports.import-record');
    }

    //Function for submit data
    public function submi_import(Request $request) {
        //Validate input fileds
        $request->validate([
            'image' => 'required|mimes:xlsx,xls,csv'
        ]);
        //Import call
        Excel::import(new ExServiceManImport, $request->file('image'));
        return back()->with('success', 'Data Imported Successfully!');
    }
}
