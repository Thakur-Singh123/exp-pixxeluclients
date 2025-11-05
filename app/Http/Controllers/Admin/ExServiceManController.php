<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExServiceMan;
use App\Models\ChildDetail;

class ExServiceManController extends Controller
{
    //Function for all services
    public function all_services() {
        //Get services
        $all_services = ExServiceMan::OrderBy('ID', 'DESC')->get();
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
        //person aadhar image
        $person_aadhar = "";
        if ($request->hasFile('aadhar_image')) {
            $file = $request->file('aadhar_image');
            $person_aadhar = time() . '_person_aadhar_image.' . $file->getClientOriginalExtension();
            $file->move($folder, $person_aadhar);
        }
        //person pan mage
        $person_pan = "";
        if ($request->hasFile('pan_image')) {
            $file = $request->file('pan_image');
            $person_pan = time() . '_person_pan_image.' . $file->getClientOriginalExtension();
            $file->move($folder, $person_pan);
        }
        //spouse image
        $spouse_image = "";
        if ($request->hasFile('spouse_image')) {
            $file = $request->file('spouse_image');
            $spouse_image = time() . '_spouse.' . $file->getClientOriginalExtension();
            $file->move($folder, $spouse_image);
        }
        //spouse aadhar
        $spouse_aadhar = "";
        if ($request->hasFile('spouse_aadhar_image')) {
            $file = $request->file('spouse_aadhar_image');
            $spouse_aadhar = time() . '_spouse_aadhar_image.' . $file->getClientOriginalExtension();
            $file->move($folder, $spouse_aadhar);
        }
        //spouse pan
        $spouse_pan = "";
        if ($request->hasFile('spouse_pan_image')) {
            $file = $request->file('spouse_pan_image');
            $spouse_pan = time() . '_spouse_pan_image.' . $file->getClientOriginalExtension();
            $file->move($folder, $spouse_pan);
        }
        //father image
        $father_image = "";
        if ($request->hasFile('father_image')) {
            $file = $request->file('father_image');
            $father_image = time() . '_father.' . $file->getClientOriginalExtension();
            $file->move($folder, $father_image);
        }
        //father aadhar
        $father_aadhar = "";
        if ($request->hasFile('father_aadhar_image')) {
            $file = $request->file('father_aadhar_image');
            $father_aadhar = time() . '_father_aadhar_image.' . $file->getClientOriginalExtension();
            $file->move($folder, $father_aadhar);
        }
        //father pan
        $father_pan = "";
        if ($request->hasFile('father_pan_image')) {
            $file = $request->file('father_pan_image');
            $father_pan = time() . '_father_pan_image.' . $file->getClientOriginalExtension();
            $file->move($folder, $father_pan);
        }
        //mother image
        $mother_image = "";
        if ($request->hasFile('mother_image')) {
            $file = $request->file('mother_image');
            $mother_image = time() . '_mother.' . $file->getClientOriginalExtension();
            $file->move($folder, $mother_image);
        }
        //mother aadhar
        $mother_aadhar= "";
        if ($request->hasFile('mother_aadhar_image')) {
            $file = $request->file('mother_aadhar_image');
            $mother_aadhar = time() . '_mother_aadhar_image.' . $file->getClientOriginalExtension();
            $file->move($folder, $mother_aadhar);
        }
        //mother pan
        $mother_pan = "";
        if ($request->hasFile('mother_pan_image')) {
            $file = $request->file('mother_pan_image');
            $mother_pan = time() . '_mother_pan_image.' . $file->getClientOriginalExtension();
            $file->move($folder, $mother_pan);
        }
        //window image
        $window_image = "";
        if ($request->hasFile('window_image')) {
            $file = $request->file('window_image');
            $window_image = time() . '_window.' . $file->getClientOriginalExtension();
            $file->move($folder, $window_image);
        }
        //window aadhar
        $window_aadhar = "";
        if ($request->hasFile('window_aadhar_image')) {
            $file = $request->file('window_aadhar_image');
            $window_aadhar = time() . '_window_aadhar_image.' . $file->getClientOriginalExtension();
            $file->move($folder, $window_aadhar);
        }
        //window pan
        $window_pan = "";
        if ($request->hasFile('window_pan_image')) {
            $file = $request->file('window_pan_image');
            $window_pan = time() . '_window_pan_image.' . $file->getClientOriginalExtension();
            $file->move($folder, $window_pan);
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
            'aadhar_image' => $person_aadhar,
            'pan_image' => $person_pan,
            'spouse_image' => $spouse_image,
            'spouse_aadhar_image' => $spouse_aadhar,
            'spouse_pan_image' => $spouse_pan,
            'father_image' => $father_image,
            'father_aadhar_image' => $father_aadhar,
            'father_pan_image' => $father_pan,
            'mother_image' => $mother_image,
            'mother_aadhar_image' => $mother_aadhar,
            'mother_pan_image' => $mother_pan,
            'window_image' => $window_image,
            'window_aadhar_image' => $window_aadhar,
            'window_pan_image' => $window_pan,
            'status' => 'Pending',
        ]);
        //Check if record created or not
        if ($is_create_record) {
            //Get request input
            foreach ($request->children_name as $key => $name) {
                ChildDetail::create([
                    'ex_service_man_id' => $is_create_record->id,
                    'army_no' => $is_create_record->army_no,
                    'name' => $name,
                    'age' => $request->children_age[$key] ?? null,
                    'gender' => $request->children_gender[$key] ?? null,
                    'education' => $request->children_education[$key] ?? null,
                    'occupation' => $request->children_occupation[$key] ?? null,
                ]);
            }
            return redirect()->route('admin.index')->with('success', 'Service created successfully');
        } else {
            return back()->with('unsuccess', 'Oops! Something went wrong');
        }
    }

    //Function for single detail page
    public function single_service($id) {
        //Get single detail
        $service_detail = ExServiceMan::with('children')->find($id);
        // echo "<pre>"; print_r($service_detail->toArray());exit;
        return view('admin.services.single-detail', compact('service_detail'));
    }

    //Function for edit service
    public function edit_service($id) {
        //Get service detail
        $service_detail = ExServiceMan::with('children')->find($id);
        return view('admin.services.edit-service', compact('service_detail'));
    }
    
    //Function for update service
    public function update_service(Request $request, $id) {
        //Get servide detail
        $service = ExServiceMan::findOrFail($id);
        //Check if serial number already exists (except current record)
        // $exists = ExServiceMan::where('sr_no', $request->sr_no)
        //     ->where('id', '!=', $id)
        //     ->exists();
        // if ($exists) {
        //     return back()->with('unsuccess', 'This Serial No already exists, please try a new Serial No.');
        // }
        //Check folder exists or not
        $folder = public_path('uploads/ex-images');
        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }
        //Helper to handle image uploads
        function handleImage($request, $fieldName, $oldImageName, $prefix, $folder)
        {
            if ($request->hasFile($fieldName)) {
                $file = $request->file($fieldName);
                $newName = time() . "_{$prefix}." . $file->getClientOriginalExtension();
                $file->move($folder, $newName);
                return $newName;
            }
            return $oldImageName;
        }

        //Handle all image uploads
        $image = handleImage($request, 'image', $service->image, 'person', $folder);
        $person_aadhar = handleImage($request, 'aadhar_image', $service->aadhar_image, 'person_aadhar_image', $folder);
        $person_pan = handleImage($request, 'pan_image', $service->pan_image, 'person_pan_image', $folder);

        $spouse_image = handleImage($request, 'spouse_image', $service->spouse_image, 'spouse', $folder);
        $spouse_aadhar = handleImage($request, 'spouse_aadhar_image', $service->spouse_aadhar_image, 'spouse_aadhar_image', $folder);
        $spouse_pan = handleImage($request, 'spouse_pan_image', $service->spouse_pan_image, 'spouse_pan_image', $folder);

        $father_image = handleImage($request, 'father_image', $service->father_image, 'father', $folder);
        $father_aadhar = handleImage($request, 'father_aadhar_image', $service->father_aadhar_image, 'father_aadhar_image', $folder);
        $father_pan = handleImage($request, 'father_pan_image', $service->father_pan_image, 'father_pan_image', $folder);

        $mother_image = handleImage($request, 'mother_image', $service->mother_image, 'mother', $folder);
        $mother_aadhar = handleImage($request, 'mother_aadhar_image', $service->mother_aadhar_image, 'mother_aadhar_image', $folder);
        $mother_pan = handleImage($request, 'mother_pan_image', $service->mother_pan_image, 'mother_pan_image', $folder);

        $window_image = handleImage($request, 'window_image', $service->window_image, 'window', $folder);
        $window_aadhar = handleImage($request, 'window_aadhar_image', $service->window_aadhar_image, 'window_aadhar_image', $folder);
        $window_pan = handleImage($request, 'window_pan_image', $service->window_pan_image, 'window_pan_image', $folder);

        //Update Service
        $is_update_record = $service->update([
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
            //spouse
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
            //widow
            'window_name' => $request->window_name,
            'date_of_death' => $request->date_of_death,
            //veer nari
            'veer_nari_name' => $request->veer_nari_name,
            'veer_nari_expose_year' => $request->veer_nari_expose_year,
            //images
            'image' => $image,
            'aadhar_image' => $person_aadhar,
            'pan_image' => $person_pan,
            'spouse_image' => $spouse_image,
            'spouse_aadhar_image' => $spouse_aadhar,
            'spouse_pan_image' => $spouse_pan,
            'father_image' => $father_image,
            'father_aadhar_image' => $father_aadhar,
            'father_pan_image' => $father_pan,
            'mother_image' => $mother_image,
            'mother_aadhar_image' => $mother_aadhar,
            'mother_pan_image' => $mother_pan,
            'window_image' => $window_image,
            'window_aadhar_image' => $window_aadhar,
            'window_pan_image' => $window_pan,
            'status' => 'Active',
        ]);
        // Update children
        if($request->children_name) {
            //Delete existing children
            ChildDetail::where('ex_service_man_id', $service->id)->delete();
            //Create new children
            foreach ($request->children_name as $key => $name) {
                ChildDetail::create([
                    'ex_service_man_id'=> $service->id,
                    'army_no'=> $service->army_no,
                    'name' => $name,
                    'age' => $request->children_age[$key] ?? null,
                    'gender' => $request->children_gender[$key] ?? null,
                    'education' => $request->children_education[$key] ?? null,
                    'occupation' => $request->children_occupation[$key] ?? null,
                ]);
            }
        }
        //Check if service updated or not
        if ($is_update_record) {
            return redirect()->route('admin.index')->with('success', 'Service updated successfully');
        } else {
            return back()->with('unsuccess', 'Oops! Something went wrong');
        }
    }

    //Function for delete service record
    public function delete_service(Request $request) {
        //Get ajax id
        $service_id  = $request->service_id;
        //Delete serive record
        $is_delete_service = ExServiceMan::where('id', $service_id)->delete();
        //Check if service deleted or not
        if ($is_delete_service) {
            return back()->with('success', 'Service delete successfully.');
        } else {
            return back()->with('unsuccess', 'Oops! something went wrong');
        }
    }
}