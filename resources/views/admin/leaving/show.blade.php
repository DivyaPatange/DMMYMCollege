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
<div id="printdiv">
        <div style="border: 1px solid;width: 80%;
    margin: auto;">
            
            <table width="85%" style="margin:auto;border-spacing: 0 15px;
    border-collapse: separate;">     
                <tr>
                    <td width="33.3%">
                        <b>{{ $leaving->adm_reg_no }}</b> Admission Reg.
                    </td>
                    <td width="33.3%">
                        Serial No. <b>{{ $leaving->serial_no }}</b>
                    </td>
                    <td width="33.3%">
                        Page No.
                        <b class="text-danger">{{ $leaving->page_no }}</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('brandAssets/images/logo/dmmmLogo.png') }}" alt="" width="100%" height="">
                    </td>
                    <td class="text-center" colspan="2">
                        <p><b>|| Dhanwantaray Namah ||</b></p>
                        <p><b>Ayurved Seva Samiti, Yavatmal Sanchalit</b></p>
                        <p><b>Affiliated to Maharashtra University of Health Sciences, Nashik</b></p>
                        <p><b>Grant in aid by Maharashtra State Government</b></p>
                        <p><b>(Appendix II)</b></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <h1 class="text-uppercase text-center"><b>dayabhai maoji majithia ayurved mahavidyalaya yavatmal</b></h1>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <h3 class="text-uppercase text-center"><b style="background-color: black;
    color: white;
    padding: 5px 19px;
    border-radius: 5px;">College Leaving or transfer certificate</b></h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <p style="text-indent:30%; word-spacing: 0.5em;
    font-size: 19px;
    line-height: 2.5rem; text-align:justify">This is to certify that <b>{{ $leaving->name }}</b> son / daughter of <b>{{ $leaving->parent_name }}</b> Caste <b>{{ $leaving->caste }}</b>
                            Nationality - Indian attended D. M. M. Ayurved Mahavidyalaya Yavatmal From <b>{{ $leaving->session_from }}</b> to <b>{{ $leaving->session_to }}</b> and now leaves on <b>{{ $leaving->leave_on }}</b> day of 
                            <b>{{ $leaving->leave_date }}</b> having paid all fees due to the college upto to end of <b>{{ $leaving->end_date }}</b>.
                        </p>
                        <p style="text-indent:30%; word-spacing: 0.5em;
    font-size: 19px;
    line-height: 2.5rem; text-align:justify">The date of his/her Birth according to the college register is <b>{{ $leaving->dob }}</b>.</p>
                        <p style="text-indent:30%; word-spacing: 0.5em;
    font-size: 19px;
    line-height: 2.5rem; text-align:justify">The last Annual Examination passed him/her was that of class <b>{{ $leaving->class }}</b> in the year <b>{{ $leaving->year }}</b></p>
                        <p style="text-indent:30%; word-spacing: 0.5em;
    font-size: 19px;
    line-height: 2.5rem; text-align:justify">He / She enrolled in a class <b>{{ $leaving->enroll_class }}</b> & his / her PRN No. of Maharashtra University of Health Sciences, Nashik is <b>{{ $leaving->prn_no }}</b></p>
                        <p style="text-indent:30%; word-spacing: 0.5em;
    font-size: 19px;
    line-height: 2.5rem; text-align:justify">His / Her Conduct was <b>{{ $leaving->performance }}</b>
                        </p>
                        <p style="text-indent:30%;word-spacing: 0.5em;
    font-size: 19px;
    line-height: 2.5rem; text-align:justify">The Total amount of fees received for the year <b>{{ $leaving->total_fee }}</b> Reason for Leaving college
                            <b>{{ $leaving->reason_leaving }}</b> Remarks <b>{{ $leaving->remarks }}</b>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p style="font-size: 19px;
    line-height: 2.5rem;">Date : <b>{{ $leaving->date }}</b></p>
                    </td>
                    <td class="text-center">
                        <p style="font-size: 19px;
    line-height: 2.5rem;"><b>Principal,</b></p>
                        <p style="font-size: 19px;
    line-height: 2.5rem;"><b>D. M. M. Ayurved</b></p>
                        <p style="font-size: 19px;
    line-height: 2.5rem;"><b>Mahavidyalaya, Yavatmal.</b></p>
                    </td>
                </tr>
            </table>    
        </div>
    </div>
    <div class="col-md-12 text-center mt-3">
    <button type="button" onclick="printContent('printdiv')" usesubmitbehaviour="False" class="btn btn-primary" id="print">Print</button>
    </div>
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
</script>
</body>
</html> 
