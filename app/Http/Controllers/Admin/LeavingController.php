<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LeavingCertificate;

class LeavingController extends Controller
{
    public function index()
    {
        $leaving = LeavingCertificate::orderBy('id', 'DESC')->get();
        return view('admin.leaving.index', compact('leaving'));
    }

    public function view()
    {
        return view('admin.leaving.certificate');
    }

    public function store(Request $request)
    {
        $leaving = new LeavingCertificate();
        $leaving->adm_reg_no = $request->adm_reg_no;
        $leaving->serial_no = $request->serial_no;
        $leaving->page_no = $request->page_no;
        $leaving->name = $request->name;
        $leaving->parent_name = $request->parent_name;
        $leaving->caste = $request->caste;
        $leaving->session_from = $request->session_from;
        $leaving->session_to = $request->session_to;
        $leaving->leave_on = $request->leave_day;
        $leaving->leave_date = $request->leave_date;
        $leaving->end_date = $request->fee_date;
        $leaving->dob = $request->dob;
        $leaving->class = $request->class;
        $leaving->year = $request->passing_year;
        $leaving->enroll_class = $request->enroll_class;
        $leaving->prn_no = $request->prn_no;
        $leaving->performance = $request->performance;
        $leaving->total_fee = $request->received_fee;
        $leaving->reason_leaving = $request->leaving_reason;
        $leaving->remark = $request->remarks;
        $leaving->date = $request->date;
        $leaving->save();
        return redirect('/leaving-certificate')->with('success', 'Certificate Generated Successfully');

    }

    public function show($id)
    {
        $leaving = LeavingCertificate::findorfail($id);
        return view('admin.leaving.show', compact('leaving'));
    }
}