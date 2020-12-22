<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DMMA | Internship Certificate</title>
  <!-- plugins:css -->
  <style>
    .hidden{
        display:none;
    }
 </style>
  @include('admin.admin_layouts.link')
</head>
<body style="border: 2px solid; color:black;">
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
    
                              <table style=" width: 100%;" class="p-5" >
                                <tr>
                                <td style="text-align: left; padding:1rem;"><h5 style="font-family: serif;">Appendix-B <h5></td>
                                <td style="text-align: right; padding:1rem;"><h5 style="font-family: serif;">College Code: 3507</h5></td>
                                </tr>
                                  <tr>
                                      <td colspan="2" style="text-align: center;padding-top:1rem;"><h4 style="font-family: serif;">Maharashtra State Government Grant-in-aid</h4></td>
                                  </tr>
                                  <tr>
                                      <td colspan="2" style="text-align: center;"><h4 style="font-family: serif;">Affiliated to Maharashtra University of Health Sciences, Nashik</h4></td>
                                  </tr>
                                  <tr>
                                      <td colspan="2" style="text-align: center;"><h4 style="font-family: serif;">Ayurved Seva Samiti Yavatmal Sanchalit</h4></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2" style="text-align: center;padding-right:1rem;padding-left:1rem;"><h1 style="font-family: serif;font-weight: 600;">DAYABHAI MAOJI MAJITHIA AYURVED <br>MAHAVIDYALAYA,YAVATMAL</h1></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center;padding-right:1rem;padding-left:1rem;"><h5 style="font-family: serif;"> Shivaji Nagar, Arni Road, Yavatmal (M.S.) - 445001</h5></td>
                                </tr>
                              </table>
                              <br>
                              <table style="width: 100%;">
                                <tr>
                                <td style="text-align: left; padding:1rem;"><h5 style="font-family: serif;">Ref No./Intern/   /20 <h5></td>
                                <td style="text-align: right; padding:1rem;"><h5 style="font-family: serif;"> Certificate No : {{ $offlineinternship->certificate_no }}</h5></td>

                                </tr>
                                <?php
                                $date = date('d/m/Y', strtotime($offlineinternship->date));  ?>
                                <tr><td colspan="2" style="text-align: right;"><h5 style="font-family: serif;">Date : {{ $date }}</h5></td></td></tr>
                                <tr>
                                    <th colspan="2" style="text-align:center;"><span style="padding: 1% 2% 1% 2%; border-radius: 10px; border: 2px solid black; line-height: 2.5; font-family: serif; font-size: 25px;">INTERNSHIP
                                        COMPLETION CERTIFICATE</span></th>
                                  </tr>
                                <tr>
                                  <td colspan="3" >
                                    <br><br>
                                  <h5 style="text-indent: 5rem;font-family: serif;padding: 1rem; color:black; text-align:justify;">
                                  This is to Certify that, <span style=" text-decoration:underline;"><b>{{ $offlineinternship->firstname }}&nbsp;{{ $offlineinternship->middlename }}&nbsp;{{ $offlineinternship->lastname }}</b></span> passed Final B.A.M.S.
                                    Examination conducted by M.U.H.S. , Nashik held in <span style=" text-decoration:underline;"><b>{{ $offlineinternship->sessonseason }}-{{$offlineinternship->sessionyear}}</b></span>
                                  </h5>
                                  </td>
                                </tr>

                                <tr>
                                  <td colspan="3">
                                  
                                  <h5 style="text-indent: 5rem;font-family: serif;padding: 1rem;text-align:justify;">
                                    As per norms laid down by C.C.I.M. , Delhi and M.U.H.S.,Nashik, <span> 
                                     he/she </span>  has 
                                    completed one year compulsory rotatory Internship Training Programme as follows and
                                    this eligible for the award of Ayurvedacharya (B.A.M.S.) degree.        
                                  </h5>
                                </td>
                                </tr>
                                <tr>
                                  <td colspan="3">
                                  <h5 style="text-indent: 5rem;font-family: serif;padding: 1rem; text-align:justify;">
                                    It is further certify that , during period of internship  <span> 
                                     his/her</span> clinical work and
                                    conduct was found to be satisfactory.       
                                  </h5>
                                </td>
                                </tr>
                                <tr>
                                  <td colspan="3">
                                    <table style="margin-left: 1%; margin-right: 1%; border-collapse: separate;border-spacing: 0 15px;font-size: 20px;width: 98%;" class=" text-center">
                                      <tr>
                                        <th style="font-family: serif;">SCHEDULE</th>
                                        <th style="font-family: serif;">DURATION</th>
                                        <th style="font-family: serif;">COMPLETION DATES</th>
                                        <th style="font-family: serif;">PLACE</th>
                                      </tr>
                                      
                                       @foreach($workDetail as $key => $wd)
                                        <?php
                                $sdate = date('d/m/Y', strtotime($wd->startDate));
                                $edate = date('d/m/Y', strtotime($wd->endDate));?>
                                      <tr>
                                        <td>{{ $wd->schedule }}</td>
                                        <td>{{ $wd->duration}}</td>
                                        <td>{{$sdate}} to {{$edate}}</td>
                                        <td>{{ $wd->oriattationPrgmCollegeName }},<br>{{ $wd->place }}<br></td>
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
                                        <h5 style="font-family: serif; font-weight: bold;">D. M. M. Ayurved Mahavidyalaya</h5>
                                        <h5 style="font-family: serif; font-weight: bold;">Yavatmal</h5>
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
