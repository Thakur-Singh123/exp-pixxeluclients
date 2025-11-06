<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExServiceMan;

class FrontController extends Controller
{
    //Function for welcome page
    public function welcome() {
        return view('fronts.welcome');
    }

    //Function for next page
    public function next() {
        //Get services
        $all_services = ExServiceMan::OrderBy('ID', 'DESC')->get();
        return view('fronts.next', compact('all_services'));
    }

    //Function for get single service detail
    public function get_service_detail($id) {
        //Get service detail
        $service_detail = ExServiceMan::with('children')->find($id);
        //Check if service fond or not
        if (!$service_detail) {
            return response()->json(['status' => false, 'message' => 'Record not found']);
        }
        //Return full HTML (Blade render)
        $html = view('fronts.single-service', compact('service_detail'))->render();
        //Response
        return response()->json([
            'status' => true,
            'html' => $html
        ]);
    }
}
