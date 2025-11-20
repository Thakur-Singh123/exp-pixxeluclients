<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widow;
use App\Models\ExServiceMan;
use App\Models\ChildDetail;

class WidowController extends Controller
{
    //Function for all widows
    public function all_widows() {
        //Get services
        $all_widows = Widow::with('serviceman_detail')->OrderBy('ID', 'DESC')->get();
        return view('admin.widows.all-widows', compact('all_widows'));
    }

    //Function for add window
    public function add_widow() {
        //Get army numbers
        $army_numbers = ExServiceMan::select('army_no')->get();
        return view('admin.widows.create-widow', compact('army_numbers'));
    }

    //Function for submit window
    public function submit_widow(Request $request) {
        $request->validate([
            'army_no' => 'required',
            'window_name' => 'required',
            'date_of_death' => 'required',
        ]);

        //image folder
        $folder = public_path('uploads/ex-images');
        //Check if folder exists or not
        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
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
        $is_create_widow = Widow::create([
            'ex_service_man_id' => $request->army_no,
            'window_name' => $request->window_name,
            'date_of_death' => $request->date_of_death,
            //images
            'window_image' => $window_image,
            'window_aadhar_image' => $window_aadhar,
            'window_pan_image' => $window_pan,
            'status' => 'Pending',
        ]);
        //Check if record created or not
        if ($is_create_widow) {
            return redirect()->route('widow.index')->with('success', 'Widow created successfully');
        } else {
            return back()->with('unsuccess', 'Oops! Something went wrong');
        }
    }

    //Function for edit widow
    public function edit_widow($id) {
        //Get army numbers
        $army_numbers = ExServiceMan::select('army_no')->get();
        //Get widow detail
        $widow_detail = Widow::with('serviceman_detail')->find($id);
        return view('admin.widows.edit-widow', compact('widow_detail','army_numbers'));
    }
    
    //Function for update widow
    public function update_widow(Request $request, $id) {
        //Get widow detail
        $widow = Widow::findOrFail($id);
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

        $window_image = handleImage($request, 'window_image', $widow->window_image, 'window', $folder);
        $window_aadhar = handleImage($request, 'window_aadhar_image', $widow->window_aadhar_image, 'window_aadhar_image', $folder);
        $window_pan = handleImage($request, 'window_pan_image', $widow->window_pan_image, 'window_pan_image', $folder);

        //Update widow
        $is_update_widow = $widow->update([
            //widow
            'army_no' => $request->army_no,
            'window_name' => $request->window_name,
            'date_of_death' => $request->date_of_death,
            //images
            'window_image' => $window_image,
            'window_aadhar_image' => $window_aadhar,
            'window_pan_image' => $window_pan,
            'status' => 'Active',
        ]);
        //Check if widow updated or not
        if ($is_update_widow) {
            return redirect()->route('widow.index')->with('success', 'Widow updated successfully');
        } else {
            return back()->with('unsuccess', 'Oops! Something went wrong');
        }
    }

    //Function for single widow detail page
    public function single_widow($id) {
        //Get single detail
        $service_detail = Widow::with('serviceman_detail','children')->find($id);
        echo "<pre>"; print_r($service_detail->toArray());exit;
        return view('admin.widows.single-widow-detail', compact('service_detail'));
    }

    //Function for delete window
    public function destroy(Request $request) {
        //Get ajax request widow id
        $widow_id = $request->widow_id;
        //Delete widow
        $is_delete_widow = Widow::where('id', $widow_id)->delete();
        //Check if widow deleted or not
        if ($is_delete_widow) {
              return redirect()->route('widow.index')->with('success', 'Widow deleted successfully');
        } else {
            return back()->with('unsuccess', 'Oops! Something went wrong');
        }
    }
}
