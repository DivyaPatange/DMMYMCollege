<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\InternshipCompletionCertificate;

class InternshipController extends Controller
{
    public function index()
    {
        $internship = InternshipCompletionCertificate::orderBy('id', 'DESC')->get();
        return view('admin.internship.index', compact('internship'));
    }

    public function view()
    {
        return view('admin.internship.certificate');
    }

    public function store(Request $request)
    {
        $internship = new InternshipCompletionCertificate();
        $internship->certificate_no = $request->certi_no;
        $internship->dated = $request->dated;
        $internship->name = $request->student_name;
        $internship->course = $request->course;
        $internship->exam_session = $request->exam_session;
        $internship->exam_year = $request->exam_year;
        $internship->prn_no = $request->prn_no;
        $internship->pro_reg_no = $request->pro_reg_no;
        $internship->intern_duration = $request->duration;
        $internship->days = $request->days;
        $internship->from_date = $request->from;
        $internship->to_date = $request->to;
        $internship->save();
        return redirect('/internship-certificate')->with('success', 'Certificate Generated Successfully!');
    }

    public function show($id)
    {
        $internship = InternshipCompletionCertificate::findorfail($id);
        return view('admin.internship.show', compact('internship'));
    }
}
