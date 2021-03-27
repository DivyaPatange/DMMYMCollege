<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BonafideCertificate;

class BonafideController extends Controller
{
    public function index()
    {
        $bonafide = BonafideCertificate::orderBy('id', 'DESC')->get();
        return view('admin.bonafide.index', compact('bonafide'));
    }

    public function view()
    {
        return view('admin.bonafide.certificate');
    }

    public function store(Request $request)
    {
        $bonafied = new BonafideCertificate();
        $bonafied->student_name = $request->student_name;
        $bonafied->class = $request->class;
        $bonafied->year = $request->year;
        $bonafied->dob = $request->dob;
        $bonafied->date = $request->date;
        $bonafied->save();
        return redirect('/bonafide-certificate')->with('success', 'Certificate Generated Successfully');

    }

    public function show($id)
    {
        $bonafied = BonafideCertificate::findorfail($id);
        return view('admin.bonafide.show', compact('bonafied'));
    }
}
