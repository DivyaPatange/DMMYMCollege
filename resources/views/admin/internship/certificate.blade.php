<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>DMMYM | Internship Certificate</title>
  <!-- plugins:css -->
  <style>
    .hidden{
        display:none;
    }
 </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body style="">
<form method="POST" action="{{ route('store.internship.certificate') }}" id="submit-form">
@csrf
    <div class="container">
        <div id="printdiv">
            <div style="border: 1px solid;">
            <div class="row" >
                <div class="col-md-12">
                    <table  class="p-5" style="width:100%">
                        <tr>
                          <td colspan="2" style="text-align: center;padding-top:1rem;">
                            <h5 style="font-family: serif; font-weight:bold; margin-bottom:0px">Maharashtra State Government Grant-in-aid</h5>
                            <h5 style="font-family: serif; font-weight:bold; margin-bottom:0px">Affiliated to Maharashtra University of Health Science Nashik</h5>
                            <h5 style="font-family: serif; font-weight:bold; margin-bottom:0px">Ayurved Seva Samiti's</h5>
                            <h2 style="font-family: serif; font-weight:bold;padding-left: 56px; padding-right: 56px;text-align: justify;" class="text-uppercase">Dayabhai Maoji Majithia Ayurved Mahavidyalaya & Laxmanrao Kalaspurkar Ayurved Hospital, Yavatmal</h2>
                            <h5 style="font-family: serif; font-weight:bold; margin-bottom:0px">Shivaji Nagar, Arni Road, Yavatmal 445 001 (M.S.)</h5>

                          </td>
                        </tr>
                        <tr>
                          <td style="padding-top:1rem;padding-bottom: 0.5rem;">
                            <h5 style="font-family: serif; font-weight:bold; margin-bottom:0px">Ph : (07232) 243896 (College)</h5>
                            <h5 style="font-family: serif; font-weight:bold; margin-bottom:0px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(07232) 245896 (Hosp.)</h5>
                          </td>
                          <td style="padding-top:1rem;padding-bottom: 0.5rem;">
                            <h5 style="font-family: serif; font-weight:bold; margin-bottom:0px">Email - pridmmamytl@rediffmail.com</h5>
                            <h5 style="font-family: serif; font-weight:bold; margin-bottom:0px">Website - www.dmmamy.in</h5>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2" style="text-align: center;">
                            <hr style="margin-top: 0; margin-bottom: 0; border-bottom: 3px dashed black; border-top: 3px dashed black; padding: 1px;">
                          </td>
                        </tr>
                        <tr>
                          <td >
                            <h5 style="font-family: serif; font-weight:bold; margin-bottom:0px">No. DMMAM/YTL/BAMS/ICC/<input type="text" name="certi_no" id="certi_no" style="border: none; border-bottom: 1px solid black;"> <span class="text-danger" id="certi_err"></span>/2021</h5>
                          </td>
                          <td>
                            <h5 style="font-family: serif; font-weight:bold; margin-bottom:0px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date :- <input type="date" name="dated" id="dated" style="border: none; border-bottom: 1px solid black;"> <span class="text-danger" id="date_err"></span></h5>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2" style="text-align: center; padding-top:1rem;"><h2 style="font-family: serif;font-weight: bold;text-decoration:underline;margin:36px;"><i>Internship Completion Certificate</i></h2></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p style="font-size: 22px; text-align: justify; padding: 10px; margin-top: 15px;text-indent: 100px;line-height: 2.5rem;">This is to Certify that Mr/Miss/Mrs. <input type="text" name="student_name" id="student_name" style="border: none;
    border-bottom: 1px solid black;"><span  style="color:red" id="student_err"> </span> has passed the final year examination of <input type="text" name="course" id="course" style="border: none;
    border-bottom: 1px solid black;"><span  style="color:red" id="course_err"> </span> Course Conducted by the Maharashtra University of Health Sciences, Nashik held in <input type="radio" name="exam_session" id="exam_session" value="Summer"> Summer / <input type="radio" name="exam_session" id="exam_session" value="Winter" Checked> Winter<span  style="color:red" id="session_err"> </span>
    <select name="exam_year" id="exam_year"> @for($i=2015; $i < 2030; $i++)<option value="{{ $i }}">{{ $i }}</option>@endfor </select>. He/She is Bonafide Student of this College/Institute, having University Examination Permanent Registration Number <input type="text" name="prn_no" id="prn_no" style="border: none; border-bottom: 1px solid black;"><span class="text-danger" id="prn_err"></span> 
    and Provisional Registration Number <input type="text" name="pro_reg_no" id="pro_reg_no" style="border: none; border-bottom: 1px solid black;"> <span class="text-danger" id="pro_err"></span> of State Council as Maharashtra.</p>

    <p style="font-size: 22px; text-align: justify; padding: 10px; margin-top: 15px;text-indent: 100px;line-height: 2.5rem;">That Mr/Miss/Mrs. <input type="text" name="name" id="name" style="border: none;border-bottom: 1px solid black;"><span  style="color:red" id="name_err"> </span> has satisfactory completed Compulsory Rotatory Internship Training programme of <input type="text" name="duration" id="duration" style="border: none; border-bottom: 1px solid black;"><span  style="color:red" id="duration_err"> </span> duration i.e for <input type="text" name="days" id="days" style="border: none; border-bottom: 1px solid black;"> <span class="text-danger" id="days_err"></span> from date <input type="date" name="from" id="from" style="border: none; border-bottom: 1px solid black;"> <span class="text-danger" id="from_err"></span> to date <input type="date" name="to" id="to" style="border: none; border-bottom: 1px solid black;"> <span class="text-danger" id="to_err"></span> as per the Central Council and University norms. During this period his / her clinical work and conduct was found satisfactory and there is no Legal or Admission Eligibility related matter is pending with the student and thus
    he/she found eligible for the award of <input type="text" name="award_course" id="award_course" style="border: none; border-bottom: 1px solid black;"> <span class="text-danger" id="a_course_err"></span> degree by the University.</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p style="font-size:22px;">Date :- <input type="date" name="dated1" id="dated1" style="border: none; border-bottom: 1px solid black;"> <span class="text-danger" id="date1_err"></span></p>
                                <p style="font-size:22px;">Place :- Yavatmal</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div style="text-align:center; width:40%; margin-left:auto">
                                    <p style="font-size:22px; margin-bottom:0px">(Vd. R.J. Mundane)</p>
                                    <p style="font-size:22px; margin-bottom:0px">Name of Dean/Principal with Sign</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                
            </div>
                
        </div>
    </div>
    <div class="col-md-12 text-center mt-3">
        <button type="button" onclick="return checkError()" class="btn btn-success">Save</button>
    </div>
</form>
<!-- plugins:js -->
@include('admin.admin_layouts.scripts')
<script>
  function printContent(el){
      
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
  }
  function checkError()
{
    var certi_no = $("#certi_no").val();
    var dated = $("#dated").val();
    var student_name = $("#student_name").val();
    var course = $("#course").val();
    var exam_session = $("input[name=exam_status]:checked").val();
    var exam_year = $("#exam_year").val();
    var prn_no = $("#prn_no").val();
    var pro_reg_no = $("#pro_reg_no").val();
    var duration = $("#duration").val();
    var days = $("#days").val();
    var from = $("#from").val();
    var to = $("#to").val();
    if (certi_no=="") {
        $("#certi_err").fadeIn().html("Required");
        setTimeout(function(){ $("#certi_err").fadeOut(); }, 3000);
        $("#certi_no").focus();
        return false;
    }
    if (dated=="") {
        $("#date_err").fadeIn().html("Required");
        setTimeout(function(){ $("#date_err").fadeOut(); }, 3000);
        $("#dated").focus();
        return false;
    }
    if (student_name=="") {
        $("#student_err").fadeIn().html("Required");
        setTimeout(function(){ $("#student_err").fadeOut(); }, 3000);
        $("#student_name").focus();
        return false;
    }
    if (course=="") {
        $("#course_err").fadeIn().html("Required");
        setTimeout(function(){ $("#course_err").fadeOut(); }, 3000);
        $("#course").focus();
        return false;
    }
    if (exam_session=="") {
        $("#session_err").fadeIn().html("Required");
        setTimeout(function(){ $("#session_err").fadeOut(); }, 3000);
        $("input[name=exam_status]").focus();
        return false;
    }
    if (prn_no=="") {
        $("#prn_err").fadeIn().html("Required");
        setTimeout(function(){ $("#prn_err").fadeOut(); }, 3000);
        $("#prn_no").focus();
        return false;
    }
    if (pro_reg_no=="") {
        $("#pro_err").fadeIn().html("Required");
        setTimeout(function(){ $("#pro_err").fadeOut(); }, 3000);
        $("#pro_reg_no").focus();
        return false;
    }
    if (duration=="") {
        $("#duration_err").fadeIn().html("Required");
        setTimeout(function(){ $("#duration_err").fadeOut(); }, 3000);
        $("#duration").focus();
        return false;
    }
    if (days=="") {
        $("#days_err").fadeIn().html("Required");
        setTimeout(function(){ $("#days_err").fadeOut(); }, 3000);
        $("#days").focus();
        return false;
    }
    if (from=="") {
        $("#from_err").fadeIn().html("Required");
        setTimeout(function(){ $("#from_err").fadeOut(); }, 3000);
        $("#from").focus();
        return false;
    }
    if (to=="") {
        $("#to_err").fadeIn().html("Required");
        setTimeout(function(){ $("#to_err").fadeOut(); }, 3000);
        $("#to").focus();
        return false;
    }
    else
    { 
        $("#submit-form").submit();
    }
}
</script>
</body>
</html> 
