<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\InternshipCertificate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\OfflineInternship;
use App\OfflineInternshipWorkDetail;
use App\InternshipCompletion;
use App\InternshipCompletionStudent;
use App\InternshipCompletionYear;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDF;


class CertificateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  

   public function addCertificate()
   {
        return view('admin.certificate.internship.addInternship');
   }

   public function offlineInternship(Request $request)
   {

    $request->validate([
        'firstname' =>'required',
    ]);
    $offlineinternship = new OfflineInternship();
    $offlineinternship->firstname = $request->firstname;
    $offlineinternship->middlename = $request->middlename;
    $offlineinternship->lastname = $request->lastname;
    $offlineinternship->sessionyear = $request->sessionyear;
    $offlineinternship->sessonseason = $request->sessionseason;
    $offlineinternship->date = $request->date;
    if(!empty($offlineinternship->certificate_no))
    {
        $last_certificate_no = $offlineinternship->certificate_no;
        $offlineinternship->certificate_no = $last_certificate_no+1;
        
    }
    else
        {
         $offlineinternship->certificate_no = $offlineinternship->count() + 1;
        }
    $offlineinternship->save();
    $insertId = $offlineinternship->id;
              
    if(!empty($insertId) && $insertId>0)
    {   
        if($request->checkbox1 == 1)
        {
            $workDetail = new OfflineInternshipWorkDetail();
            $workDetail->offline_id = $insertId;
            $workDetail->schedule = $request->schedule1;
            $workDetail->duration = $request->duration1;
            $workDetail->startDate = $request->startDate1;
            $workDetail->endDate = $request->endDate1;
            $workDetail->oriattationPrgmCollegeName = $request->oriattationPrgmCollegeName1;
            $workDetail->place = $request->place1;
            $workDetail->save();
             
            
        }
        if($request->checkbox2 == 1)
        {
            $workDetail = new OfflineInternshipWorkDetail();
            $workDetail->offline_id = $insertId;
            $workDetail->schedule = $request->schedule2;
            $workDetail->duration = $request->duration2;
            $workDetail->startDate = $request->startDate2;
            $workDetail->endDate = $request->endDate2;
            $workDetail->oriattationPrgmCollegeName = $request->oriattationPrgmCollegeName2;
            $workDetail->place = $request->place2; 
            $workDetail->save();
        }
        
        if($request->checkbox3 == 1)
        {
            $workDetail = new OfflineInternshipWorkDetail();
            $workDetail->offline_id = $insertId;
            $workDetail->schedule = $request->schedule3;
            $workDetail->duration = $request->duration3;
            $workDetail->startDate = $request->startDate3;
            $workDetail->endDate = $request->endDate3;
            $workDetail->oriattationPrgmCollegeName = $request->oriattationPrgmCollegeName3;
            $workDetail->place = $request->place3;
            $workDetail->save(); 
        }
        if($request->checkbox4 == 1)
        {
            $workDetail = new OfflineInternshipWorkDetail();
            $workDetail->offline_id = $insertId;
            $workDetail->schedule = $request->schedule4;
            $workDetail->duration = $request->duration4;
            $workDetail->startDate = $request->startDate4;
            $workDetail->endDate = $request->endDate4;
            $workDetail->oriattationPrgmCollegeName = $request->oriattationPrgmCollegeName4;
            $workDetail->place = $request->place4;
            $workDetail->save();  
        }
        return Redirect::back()->with('success', 'Data Successfully inserted!');
    }
   
   }

   public function offlineInternshipList()
   {
    $data = DB::table('offline_internships')
        ->join('offline_internship_work_details', 'offline_internship_work_details.offline_id', '=', 'offline_internships.id')->orderby('offline_internships.id','desc')
        ->get()->unique('offline_id');
        
        return view('admin.certificate.internship.offlineInternshipList',compact('data'));
   }


   public function viewCertificate($id)
   {
        $offlineinternship = OfflineInternship::findorfail($id);
        $workDetail = OfflineInternshipWorkDetail::where('offline_id',$offlineinternship->id)->orderBy('schedule')->get();
        return view('admin.certificate.internship.viewInternshipCertificate',compact('offlineinternship','workDetail'));
   }

   public function deleteOfflineCertificate($id)
   {
    $offlineinternship = OfflineInternship::findorfail($id);
    
     $offlineinternship->delete();
   
     OfflineInternshipWorkDetail::where('offline_id',$id)->delete();
    
    return Redirect::back()->with('success', 'Entry Deleted Successfully!'); 
   }

   public function editOfflineIntern($id)
   {
    $offlineinternship = OfflineInternship::findorfail($id);
    $workDetail1 = OfflineInternshipWorkDetail::where('offline_id',$id)->where('schedule',  'A')->first();
    $workDetail2 = OfflineInternshipWorkDetail::where('offline_id',$id)->where('schedule',  'B')->first();
    $workDetail3 = OfflineInternshipWorkDetail::where('offline_id',$id)->where('schedule',  'C')->first();
    $workDetail4 = OfflineInternshipWorkDetail::where('offline_id',$id)->where('schedule',  'D')->first();

    
    return view('admin.certificate.internship.editInternship',compact('offlineinternship','workDetail1','workDetail2','workDetail3','workDetail4'));
   }

   public function updateOfflineIntern(Request $request, $id)
   {
    $offlineinternship = OfflineInternship::findorfail($id);
        $offlineinternship->firstname = $request->firstname;
        $offlineinternship->middlename = $request->middlename;
        $offlineinternship->lastname = $request->lastname;
        $offlineinternship->sessionyear = $request->sessionyear;
        $offlineinternship->sessonseason = $request->sessionseason;
        $offlineinternship->date = $request->date;
        $offlineinternship->update($request->all());
        $wd = OfflineInternshipWorkDetail::where('offline_id',$id);
        $wd->delete();

        $insertId = $offlineinternship->id;
                 
    if(!empty($insertId) && $insertId>0)
    {   
        if($request->checkbox1 == 1)
        {
            $workDetail = new OfflineInternshipWorkDetail();
            $workDetail->offline_id = $insertId;
            $workDetail->schedule = $request->schedule1;
            $workDetail->duration = $request->duration1;
            $workDetail->startDate = $request->startDate1;
            $workDetail->endDate = $request->endDate1;
            $workDetail->oriattationPrgmCollegeName = $request->oriattationPrgmCollegeName1;
            $workDetail->place = $request->place1;
            $workDetail->save();
             
            
        }
        if($request->checkbox2 == 1)
        {
            $workDetail = new OfflineInternshipWorkDetail();
            $workDetail->offline_id = $insertId;
            $workDetail->schedule = $request->schedule2;
            $workDetail->duration = $request->duration2;
            $workDetail->startDate = $request->startDate2;
            $workDetail->endDate = $request->endDate2;
            $workDetail->oriattationPrgmCollegeName = $request->oriattationPrgmCollegeName2;
            $workDetail->place = $request->place2; 
            $workDetail->save();
        }
        
        if($request->checkbox3 == 1)
        {
            $workDetail = new OfflineInternshipWorkDetail();
            $workDetail->offline_id = $insertId;
            $workDetail->schedule = $request->schedule3;
            $workDetail->duration = $request->duration3;
            $workDetail->startDate = $request->startDate3;
            $workDetail->endDate = $request->endDate3;
            $workDetail->oriattationPrgmCollegeName = $request->oriattationPrgmCollegeName3;
            $workDetail->place = $request->place3;
            $workDetail->save(); 
        }
        if($request->checkbox4 == 1)
        {
            $workDetail = new OfflineInternshipWorkDetail();
            $workDetail->offline_id = $insertId;
            $workDetail->schedule = $request->schedule4;
            $workDetail->duration = $request->duration4;
            $workDetail->startDate = $request->startDate4;
            $workDetail->endDate = $request->endDate4;
            $workDetail->oriattationPrgmCollegeName = $request->oriattationPrgmCollegeName4;
            $workDetail->place = $request->place4;
            $workDetail->save();  
        }

    }
    return redirect('admin/internship/list');
   } 
// *********************intership end************************
    public function getInternshipCompletion()
    {
        return view('admin.certificate.internship.searchCompletionYearForm');
    }
    public function internshipCertificate($id)
    {
        $internshipRecord = InternshipCompletion::findorfail($id);
        return view('admin.certificate.internship.completion', compact('internshipRecord'));
    }
    
    public function getInternshipCompletionList(Request $request)
    {
        $request->validate([
            'sessionyear' => 'required',
            'program' => 'required',
        ]);
        $internshipRecord = new InternshipCompletion();
        $internshipRecord->session = $request->sessionyear;
        $internshipRecord->program = $request->program;
        $internshipRecord->save();
        if($request->program == "Internship Program")
        {
            return redirect()->route('internship.certificate', $internshipRecord->id);
        }
    }

    public function createPdf(Request $request)
    {
        if ($files = $request->data) {
             
            //store file into document folder
            $file = $request->file->store('public/documents');
 
            //store your file into database
            //$document = new Document();
            //$document->title = $file;
            //$document->save();
              
            return Response()->json([
                "success" => true,
                "file" => $file
            ]);
  
        }
  
        return Response()->json([
                "success" => false,
                "file" => ''
          ]);

    }

    public function internshipCompletionSave(Request $request)
    {
        if($request->ajax())
        {
            // $data = $request->only('ID','Name');
            $obj = json_decode($request->table,true);;
            foreach($obj as $item) {
                mysql_query("INSERT INTO `internship_completion_students` (serial_no, name) 
                VALUES ('".$item['ID']."', '".$item['Name']."')");
         
              }
            // InternshipCompletionStudent::create($studentDetails);
            // for($i = 0; $i<count($studentDetails); $i++)
            // {
                // $student = new InternshipCompletionStudent();
                // $student->serial_no = $studentDetails->ID;
                // $student->name = $studentDetails->Name;
                // $student->save();
            // }
            // foreach($studentDetails as $d)
            // {
            //     $student = new InternshipCompletionStudent();
            //     $student->serial_no = $d['ID'];
            //     $student->name = $d['Name'];
            //     $student->save();
            // }
            // for($i=0; $i<count($studentDetails); $i++)
            // {
            //     $student = new InternshipCompletionStudent();
            //     if(is_numeric($i))
            //     {
            //         $student->serial_no = $i;
                    
                
            //     $student->save();
            //     }
            //     if(is_string($i))
            //     {
            //         $student->name = $i;
            //     }
            // }
            return $studentDetails;
        }
    }

} // class end
