<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admissionform;
use Admin\AdmissionController;
use DB;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function studentHome()
    {   
        return view('students.studentDashboard')->with('admissionform','$admissionfroms');
    }
    public function adminHome()
    {
        return view('admin.dashboard');
    }
}
