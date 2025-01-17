<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Common\Helper;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function dashboard() {
    	return view('admin.dashboard');
    }

}
