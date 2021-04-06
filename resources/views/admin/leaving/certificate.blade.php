<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>DMMYM | Leaving Certificate</title>
  <!-- plugins:css -->
  <style>
    .hidden{
        display:none;
    }
    input{
        border-bottom:2px dotted black;
        border-left:0px;
        border-top:0px;
        border-right:0px;
    }
    .row{
        margin: 25px 0px;
    }
 </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body style="">
<form method="POST" action="{{ route('store.leaving.certificate') }}" id="submit-form">
@csrf
    <div id="printdiv">
        <div style="border: 1px solid;width: 80%;
    margin: auto;">
            
            <div class="container">     
                <div class="row" >
                    <div class="col-md-4">
                        <input type="text" name="adm_reg_no" id="adm_reg_no"><span id="adm_reg_err" class="text-danger"></span>Admission Reg.
                    </div>
                    <div class="col-md-4">
                        Serial No.<input type="text" name="serial_no" id="serial_no"><span id="serial_err" class="text-danger"></span>
                    </div>
                    <div class="col-md-4">
                        Page No.
                        <input type="number" name="page_no" id="page_no"><span id="page_err" class="text-danger"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('brandAssets/images/logo/dmmmLogo.png') }}" alt="" width="100%" height="85%">
                    </div>
                    <div class="col-md-6 text-center">
                        <p><b>|| Dhanwantaray Namah ||</b></p>
                        <p><b>Ayurved Seva Samiti, Yavatmal Sanchalit</b></p>
                        <p><b>Affiliated to Maharashtra University of Health Sciences, Nashik</b></p>
                        <p><b>Grant in aid by Government of Maharashtra</b></p>
                        <p><b>(Appendix II)</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase text-center"><b>dayabhai maoji majithia ayurved mahavidyalaya yavatmal</b></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-uppercase text-center"><b style="background-color: black;
    color: white;
    padding: 5px 19px;
    border-radius: 5px;">College Leaving or transfer certificate</b></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p style="text-indent:30%; word-spacing: 0.5em;
    font-size: 19px;
    line-height: 2.5rem; text-align:justify">This is to certify that <input type="text" name="name" id="name" size="50%"><span id="name_err" class="text-danger"></span> son / daughter of <input type="text" name="parent_name" id="parent_name" size="80%"><span id="parent_err" class="text-danger"></span> Caste <input type="text" name="caste" id="caste" size="40%"><span id="caste_err" class="text-danger"></span>
                            Nationality - Indian attended D. M. M. Ayurved Mahavidyalaya Yavatmal From <input type="date" id="session_from" name="session_from"><span id="s_from_err" class="text-danger"></span> to <input type="date" name="session_to" id="session_to"><span id="s_to_err" class="text-danger"></span> and now leaves on <input type="text" name="leave_day" id="leave_day" size="40%"><span id="l_day_err" class="text-danger"></span> day of 
                            <input type="text" name="leave_month" id="leave_month"><span id="l_date_err" class="text-danger"></span> <select id="leave_year" name="leave_year" style="width:14%">@for($i=2000; $i < 2050; $i++)<option value="{{ $i }}">{{ $i }}</option>@endfor</select> <span id="l_year_err" class="text-danger"></span> having paid all fees due to the college upto to end of <input type="text" id="fee_date" name="fee_date"><span id="f_date_err" class="text-danger"></span><select id="fee_year" name="fee_year" style="width:14%">@for($i=2000; $i < 2050; $i++)<option value="{{ $i }}">{{ $i }}</option>@endfor</select>
                            <span id="f_year_err" class="text-danger"></span>
                        </p>
                        <p style="text-indent:30%; word-spacing: 0.5em;
    font-size: 19px;
    line-height: 2.5rem; text-align:justify">The date of his/her Birth according to the college register is <input type="date" name="dob" id="dob"><span id="dob_err" class="text-danger"></span></p>
                        <p style="text-indent:30%; word-spacing: 0.5em;
    font-size: 19px;
    line-height: 2.5rem; text-align:justify">The last Annual Examination passed him/her was that of class <input type="text" name="class" id="class"><span id="class_err" class="text-danger"></span> in the year <input type="text" id="passing_season" name="passing_season"><span id="passing_err" class="text-danger"></span><select id="passing_year" name="passing_year" style="width:14%">@for($i=2000; $i < 2050; $i++)<option value="{{ $i }}">{{ $i }}</option>@endfor</select> <span id="passing_year_err" class="text-danger"></span></p>
                        <p style="text-indent:30%; word-spacing: 0.5em;
    font-size: 19px;
    line-height: 2.5rem; text-align:justify">He / She enrolled in a class <input type="text" name="enroll_class" id="enroll_class"><span id="enroll_err" class="text-danger"></span> & his / her PRN No. of Maharashtra University of Health Sciences, Nashik is <input type="text" name="prn_no" id="prn_no"><span id="prn_err" class="text-danger"></span></p>
                        <p style="text-indent:30%; word-spacing: 0.5em;
    font-size: 19px;
    line-height: 2.5rem; text-align:justify">His / Her Conduct was 
                            <input type="checkbox" name="performance" value="Good" Checked> <label class="d-inline">Good / </label>
                            <input type="checkbox" name="performance" class="" value="Satisfactory"> <label class="d-inline">Satisfactory / </label>
                            <input type="checkbox" name="performance" value="Unsatisfactory"><label class="d-inline">Unsatisfactory </label><span id="performance_err" class="text-danger"></span>
                        </p>
                        <p style="text-indent:30%;word-spacing: 0.5em;
    font-size: 19px;
    line-height: 2.5rem; text-align:justify"> Reason for Leaving college
                            <input type="text" name="leaving_reason" id="leaving_reason" size="80%"><span id="reason_err" class="text-danger"></span> Remarks <input type="text" name="remarks" id="remarks" size="80%"><span id="remark_err" class="text-danger"></span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p style="font-size: 19px;
    line-height: 2.5rem;">Date : <input type="date" name="date" id="date"><span id="date_err" class="text-danger"></span></p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p style="font-size: 19px;
    line-height: 2.5rem;"><b>Principal,</b></p>
                        <p style="font-size: 19px;
    line-height: 2.5rem;"><b>D. M. M. Ayurved</b></p>
                        <p style="font-size: 19px;
    line-height: 2.5rem;"><b>Mahavidyalaya, Yavatmal.</b></p>
                    </div>
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
    var adm_reg_no = $("#adm_reg_no").val();
    if (adm_reg_no=="") {
        $("#adm_reg_err").fadeIn().html("Required");
        setTimeout(function(){ $("#adm_reg_err").fadeOut(); }, 3000);
        $("#adm_reg_no").focus();
        return false;
    }
    var serial_no = $("#serial_no").val();
    if (serial_no=="") {
        $("#serial_err").fadeIn().html("Required");
        setTimeout(function(){ $("#serial_err").fadeOut(); }, 3000);
        $("#serial_no").focus();
        return false;
    }
    var page_no = $("#page_no").val();
    if (page_no=="") {
        $("#page_err").fadeIn().html("Required");
        setTimeout(function(){ $("#page_err").fadeOut(); }, 3000);
        $("#page_no").focus();
        return false;
    }
    var name = $("#name").val();
    if (name=="") {
        $("#name_err").fadeIn().html("Required");
        setTimeout(function(){ $("#name_err").fadeOut(); }, 3000);
        $("#name").focus();
        return false;
    }
    var parent_name = $("#parent_name").val();
    if (parent_name=="") {
        $("#parent_err").fadeIn().html("Required");
        setTimeout(function(){ $("#parent_err").fadeOut(); }, 3000);
        $("#parent_name").focus();
        return false;
    }
    var caste = $("#caste").val();
    if (caste=="") {
        $("#caste_err").fadeIn().html("Required");
        setTimeout(function(){ $("#caste_err").fadeOut(); }, 3000);
        $("#caste").focus();
        return false;
    }
    var session_from = $("#session_from").val();
    if (session_from=="") {
        $("#s_from_err").fadeIn().html("Required");
        setTimeout(function(){ $("#s_from_err").fadeOut(); }, 3000);
        $("#session_from").focus();
        return false;
    }
    var session_to = $("#session_to").val();
    if (session_to=="") {
        $("#s_to_err").fadeIn().html("Required");
        setTimeout(function(){ $("#s_to_err").fadeOut(); }, 3000);
        $("#session_to").focus();
        return false;
    }
    var leave_day = $("#leave_day").val();
    if (leave_day=="") {
        $("#l_day_err").fadeIn().html("Required");
        setTimeout(function(){ $("#l_day_err").fadeOut(); }, 3000);
        $("#leave_day").focus();
        return false;
    }
    var leave_month = $("#leave_date").val();
    if (leave_month=="") {
        $("#l_date_err").fadeIn().html("Required");
        setTimeout(function(){ $("#l_date_err").fadeOut(); }, 3000);
        $("#leave_month").focus();
        return false;
    }
    var leave_year = $("#leave_year").val();
    if (leave_year=="") {
        $("#l_year_err").fadeIn().html("Required");
        setTimeout(function(){ $("#l_year_err").fadeOut(); }, 3000);
        $("#leave_year").focus();
        return false;
    }
    var fee_date = $("#fee_date").val();
    if (fee_date=="") {
        $("#f_date_err").fadeIn().html("Required");
        setTimeout(function(){ $("#f_date_err").fadeOut(); }, 3000);
        $("#fee_date").focus();
        return false;
    }
    var fee_year = $("#fee_year").val();
    if (fee_date=="") {
        $("#f_year_err").fadeIn().html("Required");
        setTimeout(function(){ $("#f_year_err").fadeOut(); }, 3000);
        $("#fee_year").focus();
        return false;
    }
    var dob = $("#dob").val();
    if (dob=="") {
        $("#dob_err").fadeIn().html("Required");
        setTimeout(function(){ $("#dob_err").fadeOut(); }, 3000);
        $("#dob").focus();
        return false;
    }
    var classs = $("#class").val();
    if (dob=="") {
        $("#class_err").fadeIn().html("Required");
        setTimeout(function(){ $("#class_err").fadeOut(); }, 3000);
        $("#class").focus();
        return false;
    }
    var passing_season = $("#passing_season").val();
    if (passing_season=="") {
        $("#passing_err").fadeIn().html("Required");
        setTimeout(function(){ $("#passing_err").fadeOut(); }, 3000);
        $("#passing_season").focus();
        return false;
    }
    var passing_year = $("#passing_year").val();
    if (passing_year=="") {
        $("#passing_year_err").fadeIn().html("Required");
        setTimeout(function(){ $("#passing_year_err").fadeOut(); }, 3000);
        $("#passing_year").focus();
        return false;
    }
    var enroll_class = $("#enroll_class").val();
    if (enroll_class=="") {
        $("#enroll_err").fadeIn().html("Required");
        setTimeout(function(){ $("#enroll_err").fadeOut(); }, 3000);
        $("#enroll_class").focus();
        return false;
    }
    var prn_no = $("#prn_no").val();
    if (prn_no=="") {
        $("#prn_err").fadeIn().html("Required");
        setTimeout(function(){ $("#prn_err").fadeOut(); }, 3000);
        $("#prn_no").focus();
        return false;
    }
    var performance = $("input[name='performance']:checked").val();
    if (performance=="") {
        $("#performance_err").fadeIn().html("Required");
        setTimeout(function(){ $("#performance_err").fadeOut(); }, 3000);
        $("input[name='performance']").focus();
        return false;
    }
    var leaving_reason = $("#leaving_reason").val();
    if (leaving_reason=="") {
        $("#reason_err").fadeIn().html("Required");
        setTimeout(function(){ $("#reason_err").fadeOut(); }, 3000);
        $("#leaving_reason").focus();
        return false;
    }
    var remarks = $("#remarks").val();
    if (remarks=="") {
        $("#remark_err").fadeIn().html("Required");
        setTimeout(function(){ $("#remark_err").fadeOut(); }, 3000);
        $("#remarks").focus();
        return false;
    }
    var date = $("#date").val();
    if (date=="") {
        $("#date_err").fadeIn().html("Required");
        setTimeout(function(){ $("#date_err").fadeOut(); }, 3000);
        $("#date").focus();
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
