<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //Function for all services
    public function all_services() {
        //Get services
        $all_services = Service::OrderBy('ID', 'DESC')->paginate(5);
        return view('admin.services.index', compact('all_services'));
    }

    //Function for add service
    public function add_service() {
        return view('admin.services.create');
    }

    //Function for submit service record
    public function submit_service(Request $request) {
        //Create service
        $is_create_service = Service::create([
            'army_no' => $request->army_no,
            'rank' => $request->rank,
            'name' => $request->name,
            'aadhar_no' => $request->aadhar_no,
            'category_of_ward' => $request->category_of_ward,
            'force_type' => $request->force_type,
            'unit_regt_corps' => $request->unit_regt_corps,
            'vill' => $request->vill,
            'po' => $request->po,
            'tehsil' => $request->tehsil,
            'distt' => $request->distt,
            'pin' => $request->pin,
            'mob_no' => $request->mob_no,
            'dob' => $request->dob,
            'doe' => $request->doe,
            'dor' => $request->dor,
            'present_pc' => $request->present_pc,
            'ppo_no' => $request->ppo_no,
            'dependent_name' => $request->dependent_name,
            'no_of_dependent' => $request->no_of_dependent,
            'relation_with_esm' => $request->relation_with_esm,
            'dependent_dob' => $request->dependent_dob,
            'dependent_occupation' => $request->dependent_occupation,
            'dependent_aadhar' => $request->dependent_aadhar,
            'bank_details' => $request->bank_details,
            'status' => 'Pending',
        ]);
        //Check if service created or not
        if ($is_create_service) {
            return back()->with('success', 'service created successfully.');
        } else {
            return back()->wiht('error', 'Opps something went wrong!');
        }
    }
}
