<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExServiceMan;
use App\Models\ChildDetail;
use App\Models\Widow;
use App\Models\VeerNari;

class ExServiceManController extends Controller
{
    //Function for all services
    public function all_services(Request $request) {
        //Get query
        $query = ExServiceMan::query();
        //Filter by tehsil
        if ($request->filled('tehsil') && $request->tehsil !== 'all') {
            $query->where('tehsil', $request->tehsil);
        }
        //Get services
        $all_services = $query->orderBy('id','desc')->get();
        //Get army no
        $armyNumbers = ExServiceMan::select('army_no')
            ->whereNotNull('army_no')
            ->distinct()
            ->orderBy('army_no','asc')
            ->get(); 
        //Get tehsils
        $tehsils = ExServiceMan::select('tehsil')
            ->whereNotNull('tehsil')
            ->distinct()
            ->orderBy('tehsil','asc')
            ->get();

        return view('admin.services.index', compact('all_services','armyNumbers','tehsils'));
    }

    //Function for add service
    public function add_service() {
        return view('admin.services.create');
    }

    //Function for submit service
    public function submit_service(Request $request) {
        //Check if serial number already exists
        $exists = ExServiceMan::where('army_no', $request->army_no)->exists();
        if ($exists) {
            return back()->with('unsuccess', 'This Army No already exists, please try a new army No.');
        }
        //image folder
        $folder = public_path('uploads/documents');
        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }
        //Ex documents
        $ex_documents = "";
        if ($request->hasFile('ex_documents')) {
            $file = $request->file('ex_documents');
            $ex_documents = time() . '_ex.' . $file->getClientOriginalExtension();
            $file->move($folder, $ex_documents);
        }
        //Spouse documents
        $spo_documents = "";
        if ($request->hasFile('spo_documents')) {
            $file = $request->file('spo_documents');
            $spo_documents = time() . '_spo.' . $file->getClientOriginalExtension();
            $file->move($folder, $spo_documents);
        }
        //person aadhar image
        // $person_aadhar = "";
        // if ($request->hasFile('aadhar_image')) {
        //     $file = $request->file('aadhar_image');
        //     $person_aadhar = time() . '_person_aadhar_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $person_aadhar);
        // }
        //person pan mage
        // $person_pan = "";
        // if ($request->hasFile('pan_image')) {
        //     $file = $request->file('pan_image');
        //     $person_pan = time() . '_person_pan_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $person_pan);
        // }
        //joint image
        // $person_joint = "";
        // if ($request->hasFile('joint_image')) {
        //     $file = $request->file('joint_image');
        //     $person_joint = time() . '_person_joint_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $person_joint);
        // }
        //person discharge image
        // $person_discharge = "";
        // if ($request->hasFile('discharge_image')) {
        //     $file = $request->file('discharge_image');
        //     $person_discharge = time() . '_person_discharge_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $person_discharge);
        // }
        //person ppp mage
        // $person_ppo = "";
        // if ($request->hasFile('ppo_image')) {
        //     $file = $request->file('ppo_image');
        //     $person_ppo = time() . '_person_ppo_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $person_ppo);
        // }
        //person echs image
        // $person_echs = "";
        // if ($request->hasFile('echs_image')) {
        //     $file = $request->file('echs_image');
        //     $person_echs = time() . '_person_echs_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $person_echs);
        // }
        //person csd image
        // $person_csd = "";
        // if ($request->hasFile('csd_image')) {
        //     $file = $request->file('csd_image');
        //     $person_csd = time() . '_person_csd_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $person_csd);
        // }
        //person babk mage
        // $person_bank = "";
        // if ($request->hasFile('bank_image')) {
        //     $file = $request->file('bank_image');
        //     $person_bank = time() . '_person_bank_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $person_bank);
        // }
        //spouse image
        // $spouse_image = "";
        // if ($request->hasFile('spouse_image')) {
        //     $file = $request->file('spouse_image');
        //     $spouse_image = time() . '_spouse.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $spouse_image);
        // }
        //spouse aadhar
        // $spouse_aadhar = "";
        // if ($request->hasFile('spouse_aadhar_image')) {
        //     $file = $request->file('spouse_aadhar_image');
        //     $spouse_aadhar = time() . '_spouse_aadhar_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $spouse_aadhar);
        // }
        //spouse pan
        // $spouse_pan = "";
        // if ($request->hasFile('spouse_pan_image')) {
        //     $file = $request->file('spouse_pan_image');
        //     $spouse_pan = time() . '_spouse_pan_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $spouse_pan);
        // }
        //spouse joint
        // $spouse_joint = "";
        // if ($request->hasFile('spouse_joint_image')) {
        //     $file = $request->file('spouse_joint_image');
        //     $spouse_joint = time() . '_spouse_joint_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $spouse_joint);
        // }
        //spouse echs
        // $spouse_echs = "";
        // if ($request->hasFile('spouse_echs_image')) {
        //     $file = $request->file('spouse_echs_image');
        //     $spouse_echs = time() . '_spouse_echs_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $spouse_echs);
        // }
        //spouse csd
        // $spouse_csd = "";
        // if ($request->hasFile('spouse_csd_image')) {
        //     $file = $request->file('spouse_csd_image');
        //     $spouse_csd = time() . '_spouse_csd_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $spouse_csd);
        // }
        //spouse bank
        // $spouse_bank = "";
        // if ($request->hasFile('spouse_bank_image')) {
        //     $file = $request->file('spouse_bank_image');
        //     $spouse_bank = time() . '_spouse_bank_image.' . $file->getClientOriginalExtension();
        //     $file->move($folder, $spouse_bank);
        // }
        //create record
        $is_create_record = ExServiceMan::create([
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
            'bank_acc_no' => $request->bank_acc_no,
            'bank_name' => $request->bank_name,
            'ifsc_code' => $request->ifsc_code,
            'micr_code' => $request->micr_code,
            'echs_card_no' => $request->echs_card_no,
            'aadhar_card_no' => $request->aadhar_card_no,
            'pan_card_no' => $request->pan_card_no,
            'csd_card_no' => $request->csd_card_no,
            //spouse details
            'spouse_name' => $request->spouse_name,
            'spouse_address' => $request->spouse_address,
            'spouse_dob' => $request->spouse_dob,
            'spouse_education' => $request->spouse_education,
            'spouse_mobile' => $request->spouse_mobile,
            'spouse_aadhar_card' => $request->spouse_aadhar_card,
            // 'spouse_pan_card' => $request->spouse_pan_card,
            // 'spouse_echs_card' => $request->spouse_echs_card,
            // 'spouse_csd_card' => $request->spouse_csd_card,
            // 'spouse_bank_acc_no' => $request->spouse_bank_acc_no,
            // 'spouse_bank_name' => $request->spouse_bank_name,
            // 'spouse_ifsc_code' => $request->spouse_ifsc_code,
            // 'spouse_micr_code' => $request->spouse_micr_code,
            //images
            // 'image' => $image,
            // 'aadhar_image' => $person_aadhar,
            // 'pan_image' => $person_pan,
            // 'joint_image' => $person_joint,
            // 'discharge_image' => $person_discharge,
            // 'ppo_image' => $person_ppo,
            // 'echs_image' => $person_echs,
            // 'csd_image' => $person_csd,
            // 'bank_image' => $person_bank,
            // 'spouse_image' => $spouse_image,
            // 'spouse_aadhar_image' => $spouse_aadhar,
            // 'spouse_pan_image' => $spouse_pan,
            // 'spouse_joint_image' => $spouse_joint,
            // 'spouse_echs_image' => $spouse_echs,
            // 'spouse_csd_image' => $spouse_csd,
            // 'spouse_bank_image' => $spouse_bank,
            'ex_documents' => $ex_documents,
            'spo_documents' => $spo_documents,
            'status' => 'Pending',
        ]);
        //Check if record created or not
        if ($is_create_record) {
            //Get request input
            foreach ($request->children_name as $key => $name) {
                ChildDetail::create([
                    'ex_service_man_id' => $is_create_record->army_no,
                    'name' => $name,
                    'age' => $request->children_age[$key] ?? null,
                    'gender' => $request->children_gender[$key] ?? null,
                    'education' => $request->children_education[$key] ?? null,
                    'occupation' => $request->children_occupation[$key] ?? null,
                ]);
            }
            return redirect()->route('admin.index')->with('success', 'Ex-ServiceMan record created successfully');
        } else {
            return back()->with('unsuccess', 'Oops! Something went wrong');
        }
    }

    //Function for single detail page
    public function single_service($id) {
        //Get single detail
        $service_detail = ExServiceMan::with('children')->find($id);
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
        //Check folder exists or not
        $folder = public_path('uploads/documents');
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

        $ex_documents = handleImage($request, 'ex_documents', $service->ex_documents, 'ex', $folder);
        $spo_documents = handleImage($request, 'spo_documents', $service->spo_documents, 'spo', $folder);

        //Handle all image uploads
        // $image = handleImage($request, 'image', $service->image, 'person', $folder);
        // $person_aadhar = handleImage($request, 'aadhar_image', $service->aadhar_image, 'person_aadhar_image', $folder);
        // $person_pan = handleImage($request, 'pan_image', $service->pan_image, 'person_pan_image', $folder);
        // $person_joint = handleImage($request, 'joint_image', $service->joint_image, 'person_joint_image', $folder);
        // $person_discharge = handleImage($request, 'discharge_image', $service->discharge_image, 'person_discharge_image', $folder);
        // $person_ppo = handleImage($request, 'ppo_image', $service->ppo_image, 'person_ppo_image', $folder);

        // $person_echs = handleImage($request, 'echs_image', $service->echs_image, 'person_echs_image', $folder);
        // $person_csd = handleImage($request, 'csd_image', $service->csd_image, 'person_csd_image', $folder);
        // $person_bank = handleImage($request, 'bank_image', $service->bank_image, 'person_bank_image', $folder);

        // $spouse_image = handleImage($request, 'spouse_image', $service->spouse_image, 'spouse', $folder);
        // $spouse_aadhar = handleImage($request, 'spouse_aadhar_image', $service->spouse_aadhar_image, 'spouse_aadhar_image', $folder);
        // $spouse_pan = handleImage($request, 'spouse_pan_image', $service->spouse_pan_image, 'spouse_pan_image', $folder);

        // $spouse_joint = handleImage($request, 'spouse_joint_image', $service->spouse_joint_image, 'spouse_joint_image', $folder);
        // $spouse_echs = handleImage($request, 'spouse_echs_image', $service->spouse_echs_image, 'spouse', $folder);
        // $spouse_csd = handleImage($request, 'spouse_csd_image', $service->spouse_csd_image, 'spouse_csd_image', $folder);
        // $spouse_bank = handleImage($request, 'spouse_bank_image', $service->spouse_bank_image, 'spouse_bank_image', $folder);

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
            'bank_acc_no' => $request->bank_acc_no,
            'bank_name' => $request->bank_name,
            'ifsc_code' => $request->ifsc_code,
            'micr_code' => $request->micr_code,
            'echs_card_no' => $request->echs_card_no,
            'aadhar_card_no' => $request->aadhar_card_no,
            'pan_card_no' => $request->pan_card_no,
            'csd_card_no' => $request->csd_card_no,
            //spouse
            'spouse_name' => $request->spouse_name,
            'spouse_address' => $request->spouse_address,
            'spouse_dob' => $request->spouse_dob,
            'spouse_education' => $request->spouse_education,
            'spouse_mobile' => $request->spouse_mobile,
            'spouse_aadhar_card' => $request->spouse_aadhar_card,
            // 'spouse_pan_card' => $request->spouse_pan_card,
            // 'spouse_echs_card' => $request->spouse_echs_card,
            // 'spouse_csd_card' => $request->spouse_csd_card,
            // 'spouse_bank_acc_no' => $request->spouse_bank_acc_no,
            // 'spouse_bank_name' => $request->spouse_bank_name,
            // 'spouse_ifsc_code' => $request->spouse_ifsc_code,
            // 'spouse_micr_code' => $request->spouse_micr_code,
            //images
            // 'image' => $image,
            // 'aadhar_image' => $person_aadhar,
            // 'pan_image' => $person_pan,
            // 'joint_image' => $person_joint,
            // 'discharge_image' => $person_discharge,
            // 'ppo_image' => $person_ppo,
            // 'echs_image' => $person_echs,
            // 'csd_image' => $person_csd,
            // 'bank_image' => $person_bank,
            // 'spouse_image' => $spouse_image,
            // 'spouse_aadhar_image' => $spouse_aadhar,
            // 'spouse_pan_image' => $spouse_pan,
            // 'spouse_joint_image' => $spouse_joint,
            // 'spouse_echs_image' => $spouse_echs,
            // 'spouse_csd_image' => $spouse_csd,
            // 'spouse_bank_image' => $spouse_bank,
            'ex_documents' => $ex_documents,
            'spo_documents' => $spo_documents,
            'status' => 'Active',
        ]);
        // Update children
        if($request->children_name) {
            //Delete existing children
            ChildDetail::where('ex_service_man_id', $service->army_no)->delete();
            //Create new children
            foreach ($request->children_name as $key => $name) {
                ChildDetail::create([
                    'ex_service_man_id'=> $service->army_no ?? '',
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
            return redirect()->route('admin.index')->with('success', 'Ex-ServiceMan record updated successfully');
        } else {
            return back()->with('unsuccess', 'Oops! Something went wrong');
        }
    }

    //Function for delete service record
    public function delete_service(Request $request) {
        //Get ajax id
        $service_id  = $request->service_id;
        //Get servide detail
        $service = ExServiceMan::find($service_id);
        //Check if service deleted or not
        if ($service) {
            //Child delete
            ChildDetail::where('ex_service_man_id', $service->army_no)->delete();
            //Window delete
            Widow::where('ex_service_man_id', $service->army_no)->delete();
            //Veer nari delete
            VeerNari::where('ex_service_man_id', $service->army_no)->delete();
            //Delete record
            $service->delete();
            return back()->with('success', 'Service delete successfully.');
        } else {
            return back()->with('unsuccess', 'Oops! something went wrong');
        }
    }
}