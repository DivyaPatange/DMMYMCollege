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
    <div class="container">
        <div id="printdiv">
            <div style="">
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
                            <h5 style="font-family: serif; font-weight:bold; margin-bottom:0px">No. DMMAM/YTL/BAMS/ICC/{{ $internship->certificate_no }}/2021</h5>
                          </td>
                          <td>
                            <h5 style="font-family: serif; font-weight:bold; margin-bottom:0px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date :- {{ $internship->dated }}</h5>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2" style="text-align: center; padding-top:1rem;"><h2 style="font-family: serif;font-weight: bold;text-decoration:underline;margin:36px;"><i>Internship Completion Certificate</i></h2></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p style="font-size: 22px; text-align: justify; padding: 10px; margin-top: 15px;text-indent: 100px;line-height: 2.5rem;">This is to Certify that Mr/Miss/Mrs. <b>{{ $internship->name }}</b> has passed the final year examination of <b>{{ $internship->course }}</b> Course Conducted by the Maharashtra University of Health Sciences, Nashik held in <b>{{ $internship->exam_session }}</b>
    <b>{{ $internship->exam_year }}</b>. He/She is Bonafide Student of this College/Institute, having University Examination Permanent Registration Number <b>{{ $internship->prn_no }}</b>
    and Provisional Registration Number <b>{{ $internship->pro_reg_no }}</b> of State Council as Maharashtra.</p>

    <p style="font-size: 22px; text-align: justify; padding: 10px; margin-top: 15px;text-indent: 100px;line-height: 2.5rem;">That Mr/Miss/Mrs. <b>{{ $internship->name }}</b> has satisfactory completed Compulsory Rotatory Internship Training programme of <b>{{ $internship->intern_duration }}</b> duration i.e for <b>{{ $internship->days }}</b> from date <b>{{ date('d-m-Y', strtotime($internship->from_date)) }}</b> to date <b>{{ date('d-m-Y', strtotime($internship->to_date)) }}</b> as per the Central Council and University norms. During this period his / her clinical work and conduct was found satisfactory and there is no Legal or Admission Eligibility related matter is pending with the student and thus
    he/she found eligible for the award of <b>{{ $internship->course }}</b> degree by the University.</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p style="font-size:22px;">Date :- {{ $internship->dated }}</p>
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
