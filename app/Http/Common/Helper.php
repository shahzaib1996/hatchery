<?php

namespace App\Http\Common;

use Illuminate\Http\Request;
use App\User;
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

   

}
