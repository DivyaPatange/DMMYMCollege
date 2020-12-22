<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>VAMC | Internship Certificate</title>
  <!-- plugins:css -->
  <style>
    .hidden{
        display:none;
    }
 </style>
  @include('admin.admin_layouts.link')
</head>
<body style="border: 2px solid;">
  <script src="{{ asset('brandAssets/js/preloader.js') }}"></script>
    <div class="body-wrapper">
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <div class="container">
                    <div class="row">
                      <div id="printdiv">
                        <center>
    
                              <table style="border: 2px solid; width: 100%;" class="p-5" >
                                  <tr>
                                      <td style="text-align: center;padding-top:1rem;"><h4 style="font-family: serif;">SHRI GURUKRIPA SHIKSHAN PRASARAK MANDAL'S</h4></td>
                                  </tr>
                                  <tr>
                                    <td style="text-align: center;padding-right:1rem;padding-left:1rem;"><h3 style="text-decoration: underline; font-family: serif;font-weight: 600;">SMT. VIMLADEVI AYURVEDIC MEDICAL COLLEGE & HOSPITAL</h3></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;padding-right:1rem;padding-left:1rem;"><h5 style="font-family: serif;"> Wandhari, Dist. Chandrapur.</h5></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;padding-bottom:1rem;"><h3 style="font-family: serif;">(Affiliated to M.U.H.S. Nashik, Approved by C.C.I.M. & AUYSH, New Delhi)</h3></td>
                                </tr>
                                
                              </table>
                              <table style="width: 100%;">
                                <tr>
                                <td style="text-align: left; padding:1rem;"><h5 style="font-family: serif;">College Code: {{$admission->clgcode}}<h5></td>
                                  <td style="text-align: center; padding:1rem;"><h4 style="font-family: serif; font-weight: bold;text-decoration:underline;">Internship Completion Certificate</h4></td>
                                  <td style="text-align: right; padding:1rem;"><h5 style="font-family: serif;">Appendix-B</h5></td>
                                </tr>
                                <tr>
                                  <td colspan="3">
                                    <br><br>
                                  <h5 style="text-indent: 5rem;font-family: serif;padding: 1rem;">
                                  This is to Certify that, <span style="color:red; text-decoration:underline;"><b>{{ $admission->firstname }} &nbsp;{{ $admission->middlename }}&nbsp;{{ $admission->lastname }}</b></span> passed Final B.A.M.S.
                                    Examination conducted by M.U.H.S. , Nashik held in <span style="color:red; text-decoration:underline;"><b>{{ $admission->academicyear }}</b></span>
                                  </h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="3">
                                  
                                  <h5 style="text-indent: 5rem;font-family: serif;padding: 1rem;">
                                    As per norms laid down by C.C.I.M. , Delhi and M.U.H.S.,Nashik, <span style="color:red; text-decoration:underline;"> 
                                    @if($admission->gender == 'Other') he/she @elseif($admission->gender == 'Male') he @else she @endif </span>   has
                                    completed one year compulsory rotatory Internship Training Programme as follows and
                                    this eligible for the award of Ayurvedacharya (B.A.M.S.) degree.        
                                  </h5>
                                </td>
                                </tr>
                                <tr>
                                  <td colspan="3">
                                  <h5 style="text-indent: 5rem;font-family: serif;padding: 1rem;">
                                    It is further certify that , during period of internship  <span style="color:red; text-decoration:underline;"> 
                                      @if($admission->gender == 'Other') his/her @elseif($admission->gender == 'Male') his @else her @endif </span> clinical work and
                                    conduct was found to be satisfactory.       
                                  </h5>
                                </td>
                                </tr>
                                <tr>
                                  <td colspan="3">
                                    <table style="border: 2px solid; width: 91%; margin-left: 46px; margin-bottom: 38px;" class="table-bordered text-center">
                                      <tr>
                                        <th>SCHEDULE</th>
                                        <th>DURATION</th>
                                        <th>COMPLETION DATES</th>
                                        <th>PLACE</th>
                                      </tr>
                                      @foreach($internshipCertificate as $key => $ic)
                                      <tr>
                                        <td>{{ $ic->schedule }}</td>
                                        <td>{{ $ic->duration}}</td>
                                        <td>{{$ic->completion_date1}} to {{$ic->completion_date2}}</td>
                                        <td>{{ $ic->place }}</td>
                                      </tr>
                                      @endforeach
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="3">
                                    <br><br><br><br>
                                    <div style="float: right; text-align:center; margin-right:5px;">
                                      <h5 style="font-family: serif; font-weight: bold;">Principal</h5>
                                        <h5 style="font-family: serif; font-weight: bold;">Smt. Vimladevi Ayurvedic Medical College</h5>
                                        <h5 style="font-family: serif; font-weight: bold;">& Hospital Wandhari, Chandrapur</h5>
                                    </div>
                                  </td>
                                </tr> 
                              </table>
                            
    
                        </center>
                      </div>
                      <a href="javascript:__doPostBack('btnPrint','')" type="button"onclick="printContent('printdiv')" usesubmitbehaviour="False" class="mdc-button mdc-button--unelevated filled-button--info mdc-ripple-upgraded">Print</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>


      </div>
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
