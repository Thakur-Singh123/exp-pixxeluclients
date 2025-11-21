<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VeerNari;
use App\Models\ExServiceMan;
use App\Models\ChildDetail;

class VeerNariController extends Controller
{
    //Function for veer naris
    public function all_veer_naries() {
        //Get veer naris
        $all_veer_naris = VeerNari::with('serviceman_detail')->OrderBy('ID', 'DESC')->get();
        return view('admin.veer-naries.all-veer-naries', compact('all_veer_naris'));
    }

    //Function for add veer nari
    public function add_veer_nari() {
        //Get army numbers
        $army_numbers = ExServiceMan::select('army_no')->get();
        return view('admin.veer-naries.create-veer-nari', compact('army_numbers'));
    }
    
    //Function for submit veer nari
    public function submit_veer_nari(Request $request) {
        $request->validate([
            'army_no' => 'required',
            'veer_nari_name' => 'required',
            'veer_nari_expose_year' => 'required',
        ]);

        //image folder
        $folder = public_path('uploads/ex-images');
        //Check if folder exists or not
        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }
        //veer nari image
        $veer_image = "";
        if ($request->hasFile('veer_image')) {
            $file = $request->file('veer_image');
            $veer_image = time() . '_veer_nari.' . $file->getClientOriginalExtension();
            $file->move($folder, $veer_image);
        }
        //veer nari aadhar
        $veer_aadhar_image = "";
        if ($request->hasFile('veer_aadhar_image')) {
            $file = $request->file('veer_aadhar_image');
            $veer_aadhar_image = time() . '_veer-nari_aadhar_image.' . $file->getClientOriginalExtension();
            $file->move($folder, $veer_aadhar_image);
        }
        //veer nari pan
        $veer_pan_image = "";
        if ($request->hasFile('veer_pan_image')) {
            $file = $request->file('veer_pan_image');
            $veer_pan_image = time() . '_veer_nari_pan_image.' . $file->getClientOriginalExtension();
            $file->move($folder, $veer_pan_image);
        }
        //create record
        $is_create_veer_nari = VeerNari::create([
            'ex_service_man_id' => $request->army_no,
            'veer_nari_name' => $request->veer_nari_name,
            'veer_nari_expose_year' => $request->veer_nari_expose_year,
            //images
            'veer_image' => $veer_image,
            'veer_aadhar_image' => $veer_aadhar_image,
            'veer_pan_image' => $veer_pan_image,
            'status' => 'Active',
        ]);
        //Check if record created or not
        if ($is_create_veer_nari) {
            return redirect()->route('veer.index')->with('success', 'Veer nari created successfully');
        } else {
            return back()->with('unsuccess', 'Oops! Something went wrong');
        }
    }

    //Function for edit veer nari
    public function edit_veer_nari($id) {
        //Get army numbers
        $army_numbers = ExServiceMan::select('army_no')->get();
        //Get veer nari detail
        $veer_nari_detail = VeerNari::with('serviceman_detail')->find($id);
        return view('admin.veer-naries.edit-veer-nari', compact('veer_nari_detail','army_numbers'));
    }

     //Function for update veer nari
    public function update_veer_nari(Request $request, $id) {
        //Get veer nari detail
        $veer_nari  = VeerNari::findOrFail($id);
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

        $veer_image = handleImage($request, 'veer_image', $veer_nari->veer_image, 'veer_image', $folder);
        $veer_aadhar_image = handleImage($request, 'veer_aadhar_image', $veer_nari->veer_aadhar_image, 'veer_aadhar_image', $folder);
        $veer_pan_image = handleImage($request, 'veer_pan_image', $veer_nari->veer_pan_image, 'veer_pan_image', $folder);

        //Update veer nari
        $is_update_veer_nari = $veer_nari->update([
            //veer nari
            'army_no' => $request->army_no,
            'veer_nari_name' => $request->veer_nari_name,
            'veer_nari_expose_year' => $request->veer_nari_expose_year,
            //images
            'veer_image' => $veer_image,
            'veer_aadhar_image' => $veer_aadhar_image,
            'veer_pan_image' => $veer_pan_image,
            'status' => 'Active',
        ]);
        //Check if veer nari updated or not
        if ($is_update_veer_nari) {
            return redirect()->route('veer.index')->with('success', 'Veer nari updated successfully');
        } else {
            return back()->with('unsuccess', 'Oops! Something went wrong');
        }
    }

    //Function for single veer nari detail page
    public function single_veer_nari($id) {
        //Get single detail
        $veerNari_detail = VeerNari::with('serviceman_detail','children')->find($id);
        return view('admin.veer-naries.single-veer-nari', compact('veerNari_detail'));
    }

    //Function for delete veer nari
    public function destroy(Request $request) {
        //Get ajax request veer nari id
        $veer_nari_id = $request->veer_nari_id;
        //Delete veer nari
        $is_delete_veer_nari = VeerNari::where('id', $veer_nari_id)->delete();
        //Check if veer nari deleted or not
        if ($is_delete_veer_nari) {
              return redirect()->route('veer.index')->with('success', 'Veer nari deleted successfully');
        } else {
            return back()->with('unsuccess', 'Oops! Something went wrong');
        }
    }
}
