<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\StaffAttendance;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
use App\Http\Common\Helper;
use Carbon\Carbon;

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
             'salary' => Input::get('salary'), 
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
          'salary' => Input::get('salary'), 
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

    public function attendance(){
      $today_date = Carbon::parse(now())->isoformat('YYYY-MM-DD');
      
      // $filter_date = '2020-02-25';
      // return $filter_date;
      $data['staffs'] = Staff::with(
        ['attendance' => function($q) use($today_date) {

                            $q->where('present_date', $today_date); 
                        }]
                      )->get();

      $data['today_date'] = Carbon::parse($today_date)->isoformat('DD/MMM/YYYY (dddd)');
      // return $data;

      return view('staff.attendance',$data);
    }


    public function markPresent(Request $request){
      $today_date = Carbon::parse(now())->isoformat('YYYY-MM-DD');
      // $today_date = '2020-02-25';
      $staff = Staff::where('id',$request->id)->with(
              ['attendance' => function($q) use($today_date) { $q->where('present_date', $today_date); }]
            )->first();
      
      if( count($staff->attendance) == 1 ) {
        $data['status'] = false;
        $data['message'] = "Already Marked Present";
        return $data;
      }

      $present = new StaffAttendance;
      $present->staff_id = $request->id;
      $present->present_date = $today_date;
      if( $present->save() ) {
        $data['status'] = true;
        $data['message'] = "Attendance has been Marked";
        return $data;
      }else {
        $data['status'] = false;
        $data['message'] = "Something went wrong, Please Try Again!";
        return $data;
      }
      
    }

    public function testView() {
      return view('batch.cage');
    }
}
