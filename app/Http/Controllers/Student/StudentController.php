<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }


}
