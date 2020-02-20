<?php

namespace App\Http\Common;

use Illuminate\Http\Request;
use App\WebSetting;
use App\User;
use App\Activity\Activity;
use Session;
use Auth;
use Carbon\Carbon;

class Helper
{
    //Create Sweet Alert Flash Message
    static public function createSweetAlert($type,$message,$title) {

        Session::flash('message', $message);
        Session::flash('title', $title);
        Session::flash('type', $type);
         
    }

    // Create Activity log
    static public function createActivityLog( $template_id,$params = [] ){
    	try{
    	   $user = Auth::user()->id;
    	   Activity::create([
    			'activity_template_id' => $template_id,
    			'user_id' => $user,
    			'activity_time' => date('Y-m-d h:i:s'),
    			'json_params' => json_encode($params)
    		]);
    	}catch(\Exception $e) {
    		return "false";
    	} 
    	return "true";
    }

    // Create Activity log for Login
    static public function createActivityAuth( $template_id,$user_id,$params = [] ){
    	try{
    		Activity::create([
    			'activity_template_id' => $template_id,
    			'user_id' => $user_id,
    			'activity_time' => date('Y-m-d h:i:s'),
    			'json_params' => json_encode($params)
    		]);
    	}catch(\Exception $e) {
    		return "false";
    	} 
    	return "true";
    }

    // Create Activity log
    static public function createMobileActivityLog($template_id,$user_id,$params = [] ){
        try{
            Activity::create([
                'activity_template_id' => $template_id,
                'user_id' => $user_id,
                'activity_time' => date('Y-m-d h:i:s'),
                'json_params' => json_encode($params)
            ]);
        }catch(\Exception $e) {
            return "false";
        } 
        return "true";
    }



}
