<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LeavingCertificate;
use DB;

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
        $branchId = DB::table('leaving_certificates')->max('id');
        // dd($branchId);
        $leaving = new LeavingCertificate();
        $leaving->adm_reg_no = $request->adm_reg_no;
        $leaving->serial_no = $request->serial_no;
        $leaving->page_no = $request->page_no;
        if(!empty($branchId))
        {
            $leaving->tc_no = $branchId + 1;
        }
        else{
            $leaving->tc_no = 1;
        }
        $leaving->name = $request->name;
        $leaving->parent_name = $request->parent_name;
        $leaving->caste = $request->caste;
        $leaving->session_from = $request->session_from;
        $leaving->session_to = $request->session_to;
        $leaving->leave_on = $request->leave_day;
        $leaving->leave_date = $request->leave_month.' '.$request->leave_year;
        $leaving->end_date = $request->fee_date.' '.$request->fee_year;
        $leaving->dob = $request->dob;
        $leaving->class = $request->class;
        $leaving->year = $request->passing_season.' '.$request->passing_year;
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

    public function edit($id)
    {
        $leaving = LeavingCertificate::findorfail($id);
        return view('admin.leaving.edit', compact('leaving'));
    }
    
    public function update(Request $request, $id)
    {
        $leaving = LeavingCertificate::findorfail($id);
        $leaving->adm_reg_no = $request->adm_reg_no;
        $leaving->serial_no = $request->serial_no;
        $leaving->page_no = $request->page_no;
        $leaving->name = $request->name;
        $leaving->parent_name = $request->parent_name;
        $leaving->caste = $request->caste;
        $leaving->session_from = $request->session_from;
        $leaving->session_to = $request->session_to;
        $leaving->leave_on = $request->leave_day;
        $leaving->leave_date = $request->leave_month.' '.$request->leave_year;
        $leaving->end_date = $request->fee_date.' '.$request->fee_year;
        $leaving->dob = $request->dob;
        $leaving->class = $request->class;
        $leaving->year = $request->passing_season.' '.$request->passing_year;
        $leaving->enroll_class = $request->enroll_class;
        $leaving->prn_no = $request->prn_no;
        $leaving->performance = $request->performance;
        $leaving->total_fee = $request->received_fee;
        $leaving->reason_leaving = $request->leaving_reason;
        $leaving->remark = $request->remarks;
        $leaving->date = $request->date;
        $leaving->update($request->all());
        return redirect('/leaving-certificate')->with('success', 'Certificate Updated Successfully');
    }
}
