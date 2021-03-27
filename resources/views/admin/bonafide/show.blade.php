<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>DMMYM | Bonafide Certificate</title>
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
            <div style="border: 1px solid;">
            <div class="row" >
                <div class="col-md-12">
                    <table  class="p-5" style="border:15px solid lightgrey; width:100%">
                        <tr>
                          <td colspan="2" style="text-align: center;padding-top:1rem;"><h5 style="font-family: serif;">Aayurved Seva Samiti Yavatmal Sanchalit</h5></td>
                        </tr>
                        <tr>
                          <td colspan="2" style="text-align: center;padding-top:1rem;"><h5 style="font-family: serif;">Affiliated to MUHS, Nashik</h5></td>
                        </tr>
                        <tr>
                          <td colspan="2" style="text-align: center; padding-top:1rem;"><h2 style="font-family: serif; font-weight:900">Dayabhai Maoji Majithia Ayurved Mahavidyalaya, Yavatmal</h2></td>
                        </tr>
                        <tr>
                          <td colspan="2" style="text-align: center; padding-top:1rem;"><h5 style="font-family: serif;">(Grant in aid by Govt. of Maharashtra)</h5></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;padding-right:1rem;padding-left:1rem;"><h1 style=" font-family: serif;font-weight: 600;display: inline;text-align: center;border: 4px solid black;padding: 5px;margin-bottom: 10px;">Bonafied Certificate</h1></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p style="font-size:25px; text-align:justify; padding:10px; margin-top:15px">This is to Certify that Shri/Ku. <b>{{ $bonafied->student_name }}</b> is studying in <b>{{ $bonafied->class }}</b> during the year <b>{{ $bonafied->year }}</b>. He/She is Bonafied Student of our college. His/Her date of birth according to College Register is <b>{{ $bonafied->dob }}</b>.</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p style="font-size:25px; text-align:justify; padding:10px; margin-top:15px; text-indent:100px">He/She bears a good moral character.</p>
                            </td>
                        </tr>
                        <tr>
                            <td><p style="font-size:25px; text-align:justify; padding:10px;">Date : {{ $bonafied->date }}</p></td>
                            <td>
                                <div style="text-align:center">
                                    <p style="font-size:25px; margin-bottom:0px">Principal</p>
                                    <p style="font-size:25px; margin-bottom:0px">D.M.M. Ayurved Mahavidyalaya</p>
                                    <p style="font-size:25px; margin-bottom:0px">Yavatmal</p>
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
