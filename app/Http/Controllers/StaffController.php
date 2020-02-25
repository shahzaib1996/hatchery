<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
use App\Http\Common\Helper;

class StaffController extends Controller
{
    public function index() { 
        $data['staffs'] = Staff::all();
        return view('staff.index',$data);
      }
    public function create() { 
        return view('staff.add');
      }

    public function store() {
        // return Input::get();
        $staff_data = array(
             'name' => Input::get('name'), 
             'cnic' => Input::get('cnic'), 
             'designation' => Input::get('designation'), 
             'mobile' => Input::get('mobile'), 
             'address' => Input::get('address'), 
             'details' => Input::get('details'), 
            );
            $staff_id = Staff::insert($staff_data);
            
        if($staff_id) {
            Helper::createSweetAlert("success","Staff Member has been created successfully.","Success");
        } else {
            Helper::createSweetAlert("error","Failed to create, Try Again","Error");
        }
        return back();

    }
    public function delete($id)
    {   
        $staff=Staff::find($id);
        $staff->delete();
        return redirect('staff')->with('message', 'Staff deleted successfully.');
    }
    public function edit($id)
    {   
        $data['staff']=Staff::find($id);
        return view('staff.edit',$data);
    }
    public function update($id)
    {   
        
        $staff=Staff::find($id);
                                                       
        $staff_data = array(
          'name' => Input::get('name'), 
          'cnic' => Input::get('cnic'), 
          'designation' => Input::get('designation'), 
          'mobile' => Input::get('mobile'), 
          'address' => Input::get('address'), 
          'details' => Input::get('details'), 
        );
        $staff_id = Staff::where('id', '=', $id)->update($staff_data);
        if($staff_id) {
            Helper::createSweetAlert("success","Staff Member has been updated successfully.","Success");
        } else {
            Helper::createSweetAlert("error","Failed to update, Try Again","Error");
        }
        return back();
    }

    
    public function changeStatus($id)
    {   
        $staff=Staff::find($id);
        $staff->status=!$staff->status;
        $staff->save();
        return redirect('staff')->with('message', 'Change staff status successfully');
    }

     public function view($id)
    {   
        $data['staff']=Staff::find($id);
        return view('staff.view',$data);
        
    }
}
