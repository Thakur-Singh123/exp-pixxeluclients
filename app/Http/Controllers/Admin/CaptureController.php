<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaptureController extends Controller
{
    //Function for add capture
    public function add_capture() {
        return view('admin.captures.create');
    }

    //Function for submit capture form
    public function submit_capture() {
        
    }
}
