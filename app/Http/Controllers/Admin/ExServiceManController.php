<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExServiceMan;

class ExServiceManController extends Controller
{
    //Function for all services
    public function all_services() {
        //Get services
        $all_services = ExServiceMan::OrderBy('ID', 'DESC')->paginate(5);
        return view('admin.services.index', compact('all_services'));
    }

    //Function for add service
    public function add_service() {
        return view('admin.services.create');
    }

    //Function for submit service
    public function submit_service(Request $request) {
        //Check if serial number already exists
        $exists = ExServiceMan::where('sr_no', $request->sr_no)->exists();
        if ($exists) {
            return back()->with('unsuccess', 'This Serial No already exists, please try a new Serial No.');
        }
        //image folder
        $folder = public_path('uploads/ex-images');
        //Check if folder exists or not
        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }
        //person image
        $image = "";
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . '_person.' . $file->getClientOriginalExtension();
            $file->move($folder, $image);
        }
        //spouse image
        $spouse_image = "";
        if ($request->hasFile('spouse_image')) {
            $file = $request->file('spouse_image');
            $spouse_image = time() . '_spouse.' . $file->getClientOriginalExtension();
            $file->move($folder, $spouse_image);
        }
        //father image
        $father_image = "";
        if ($request->hasFile('father_image')) {
            $file = $request->file('father_image');
            $father_image = time() . '_father.' . $file->getClientOriginalExtension();
            $file->move($folder, $father_image);
        }
        //mother image
        $mother_image = "";
        if ($request->hasFile('mother_image')) {
            $file = $request->file('mother_image');
            $mother_image = time() . '_mother.' . $file->getClientOriginalExtension();
            $file->move($folder, $mother_image);
        }
        //window image
        $window_image = "";
        if ($request->hasFile('window_image')) {
            $file = $request->file('window_image');
            $window_image = time() . '_window.' . $file->getClientOriginalExtension();
            $file->move($folder, $window_image);
        }
        //veer nari image
        $veer_nari_image = "";
        if ($request->hasFile('veer_nari_image')) {
            $file = $request->file('veer_nari_image');
            $veer_nari_image = time() . '_veer_nari.' . $file->getClientOriginalExtension();
            $file->move($folder, $veer_nari_image);
        }
        //create record
        $is_create_record = ExServiceMan::create([
            'sr_no' => $request->sr_no,
            'army_no' => $request->army_no,
            'rank' => $request->rank,
            'name' => $request->name,
            'village' => $request->village,
            'post_office' => $request->post_office,
            'tehsil' => $request->tehsil,
            'district' => $request->district,
            'state' => $request->state,
            'pin_code' => $request->pin_code,
            'mobile_no' => $request->mobile_no,
            'regiment_corps' => $request->regiment_corps,
            'dob' => $request->dob,
            'doe' => $request->doe,
            'dor' => $request->dor,
            'education' => $request->education,
            'present_occupation' => $request->present_occupation,
            'bank_acc_no' => $request->bank_acc_no,
            'bank_name' => $request->bank_name,
            'ifsc_code' => $request->ifsc_code,
            'micr_code' => $request->micr_code,
            'echs_card_no' => $request->echs_card_no,
            'aadhar_card_no' => $request->aadhar_card_no,
            'pan_card_no' => $request->pan_card_no,
            'csd_card_no' => $request->csd_card_no,
            'decorator_soldier' => $request->decorator_soldier,
            'disabled' => $request->disabled,
            'reg_on_dgr_portal' => $request->reg_on_dgr_portal,
            //spouse details
            'spouse_name' => $request->spouse_name,
            'spouse_address' => $request->spouse_address,
            'spouse_dob' => $request->spouse_dob,
            'spouse_education' => $request->spouse_education,
            'spouse_mobile' => $request->spouse_mobile,
            'spouse_aadhar_card' => $request->spouse_aadhar_card,
            'spouse_pan_card' => $request->spouse_pan_card,
            'spouse_echs_card' => $request->spouse_echs_card,
            'spouse_csd_card' => $request->spouse_csd_card,
            'spouse_bank_acc_no' => $request->spouse_bank_acc_no,
            'spouse_bank_name' => $request->spouse_bank_name,
            'spouse_ifsc_code' => $request->spouse_ifsc_code,
            'spouse_micr_code' => $request->spouse_micr_code,
            //father
            'father_name' => $request->father_name,
            'father_address' => $request->father_address,
            'father_dob' => $request->father_dob,
            'father_education' => $request->father_education,
            'father_mobile' => $request->father_mobile,
            'father_aadhar_card' => $request->father_aadhar_card,
            'father_pan_card' => $request->father_pan_card,
            'father_echs_card' => $request->father_echs_card,
            'father_csd_card' => $request->father_csd_card,
            'father_bank_acc_no' => $request->father_bank_acc_no,
            'father_bank_name' => $request->father_bank_name,
            'father_ifsc_code' => $request->father_ifsc_code,
            'father_micr_code' => $request->father_micr_code,
            //mother
            'mother_name' => $request->mother_name,
            'mother_address' => $request->mother_address,
            'mother_dob' => $request->mother_dob,
            'mother_education' => $request->mother_education,
            'mother_mobile' => $request->mother_mobile,
            'mother_aadhar_card' => $request->mother_aadhar_card,
            'mother_pan_card' => $request->mother_pan_card,
            'mother_echs_card' => $request->mother_echs_card,
            'mother_csd_card' => $request->mother_csd_card,
            'mother_bank_acc_no' => $request->mother_bank_acc_no,
            'mother_bank_name' => $request->mother_bank_name,
            'mother_ifsc_code' => $request->mother_ifsc_code,
            'mother_micr_code' => $request->mother_micr_code,
            //window 
            'window_name' => $request->window_name,
            'date_of_death' => $request->date_of_death,
            //veer nari 
            'veer_nari_name' => $request->veer_nari_name,
            'veer_nari_expose_year' => $request->veer_nari_expose_year,
            //images
            'image' => $image,
            'spouse_image' => $spouse_image,
            'father_image' => $father_image,
            'mother_image' => $mother_image,
            'window_image' => $window_image,
            'veer_nari_image' => $veer_nari_image,
            'status' => 'Pending',
        ]);
        //Check if record created or not
        if ($is_create_record) {
            return back()->with('success', 'Service created successfully');
        } else {
            return back()->with('unsuccess', 'Oops! Something went wrong');
        }
    }

    //Function for single detail page
    public function single_service($id) {
        //Get single detail
        $service = ExServiceMan::find($id);
        return view('admin.services.single-detail', compact('service'));
    }
}