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
    .seven h1 {
text-align: center;
    font-size: 33px;
    font-weight: 400; color:#222; letter-spacing:1px;
    text-transform: uppercase;

    /*display: grid;*/
    grid-template-columns: 1fr max-content 1fr;
    grid-template-rows: 27px 0;
    grid-gap: 20px;
    align-items: center;
}

.seven h1:after,.seven h1:before {
    content: " ";
    display: block;
    border-bottom: 1px solid #c50000;
    border-top: 1px solid #c50000;
    height: 5px;
  background-color:#f8f8f8;
}
.slogan p{
    font-family: 'Amiri', serif;
}
.heading{
    font-family: 'Kaushan Script', cursive;
}
.para p{
    font-family: 'Faustina', serif;
    /*font-family: 'Courgette', cursive;*/
}
.one h1{
    position:relative;
}
.one h1:before {
  width: 28px;
  height: 5px;
  display: block;
  content: "";
  position: absolute;
  bottom: -2px;
  left: 50%;
  margin-left: -14px;
  background-color: #b80000;
}
.one h1:after {
  width: 257px;
  height: 1px;
  display: block;
  content: "";
  position: relative;
  margin-top: 25px;
  left: 39%;
  margin-left: -50px;
  background-color: #b80000;
}
@media print{
    .one h1{
    position:relative;
}
.one h1:before {
  width: 28px;
  height: 5px;
  display: block;
  content: "";
  position: absolute;
  bottom: -2px;
  left: 50%;
  margin-left: -14px;
  background-color: #b80000;
}
.one h1:after {
  width: 257px;
  height: 1px;
  display: block;
  content: "";
  position: relative;
  margin-top: 25px;
  left: 39%;
  margin-left: -50px;
  background-color: #b80000;
}
/*.printContent{*/
/*    position: absolute;*/
/*      overflow: auto;*/
/*      left: 0;*/
/*      right: 0;*/
/*      top: 0;*/
/*      bottom: 0;*/
/*      border: 5px solid red;*/
/*}*/
}


 </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amiri:ital@1&family=Courgette&family=Faustina:ital@1&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body style="">
<div id="printdiv">
        <div class="printContent" style="border: 2px solid;width: 85%;
    margin: auto;">
            
            <table width="95%" style="margin:auto;border-spacing: 0 15px;
    border-collapse: separate; height:100%">     
                <tr>
                    <td width="20%" style="font-size: 20px;"> Admission Reg. 
                        <b>{{ $leaving->adm_reg_no }}</b>
                    </td>
                    <td width="40%" class="text-center" style="font-size: 20px;">
                        Serial No. <b>{{ $leaving->serial_no }}</b>
                    </td>
                    <td width="40%"  style="font-size: 20px;">
                        <div class="float-left">Page No.
                        <b class="text-danger">{{ $leaving->page_no }}</b></div>
                        <div class="float-right">TC No. <b class="">{{ $leaving->tc_no }}</div>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <img src="{{ asset('brandAssets/images/logo/dmmmLogo.png') }}" alt="" width="90%" height="150px">
                    </td>
                    <td class=" slogan" colspan="2">
                        <div class="text-center" style="width: 95%;
    font-size: 26px;
    word-spacing: 0.2rem;">
                        <p class="mb-0"><b>|| Dhanwantaray Namah ||</b></p>
                        <p class="mb-0"><b>Ayurved Seva Samiti, Yavatmal Sanchalit</b></p>
                        <p class="mb-0"><b>Affiliated to Maharashtra University of Health Sciences, Nashik</b></p>
                        <p class="mb-0"><b>Grant in aid by Government of Maharashtra</b></p>
                        <p class="mb-0"><b>(Appendix II)</b></p>
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="3">
                        <div class="one"><h1 class="text-uppercase text-center heading" style="font-size:30px; word-spacing:0.23rem"><b>dayabhai maoji majithia ayurved mahavidyalaya yavatmal</b></h1></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="seven">
                        <h1 class="text-uppercase text-center"><b >College Leaving or transfer certificate</b></h1>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="para">
                        <p style="text-indent:30%; word-spacing: 0.2em;
    font-size: 26px;
    line-height: 2.8rem; text-align:justify">This is to certify that <b style="padding: 0px 30px;border-bottom: 3px solid black;">{{ $leaving->name }}</b> son / daughter of <b style="padding: 0px 30px;border-bottom: 3px solid black;">{{ $leaving->parent_name }}</b> Caste <b style="padding: 0px 30px; border-bottom: 3px solid black;">{{ $leaving->caste }}</b>
                            Nationality - <b>Indian</b>&nbsp;attended&nbsp;D.&nbsp;M.&nbsp;M.&nbsp;Ayurved&nbsp;Mahavidyalaya&nbsp;Yavatmal&nbsp;From <span style="
    border-bottom: 3px solid black;display: inline-block;
    width: 27%;"><b>{{ date("d-m-Y", strtotime($leaving->session_from)) }}</b></span> to <span style="border-bottom: 3px solid black;display: inline-block;
    width: 27%;"><b>{{ date("d-m-Y", strtotime($leaving->session_to)) }}</b></span> and now leaves on <b style="padding: 0 30px;border-bottom: 3px solid black;">{{ $leaving->leave_on }}</b> day of 
                            <span style="border-bottom: 3px solid black;display: inline-block;
    width: 32%;"><b>{{ $leaving->leave_date }}</b></span> having paid all fees due to the college upto to end of <span style="border-bottom: 3px solid black;display: inline-block;
    width: 30%;"><b>{{ $leaving->end_date }}</b></span>
                        </p>
                        <p style="word-spacing: 0.2em;
    font-size: 26px;
    line-height: 2.8rem; text-align:justify">The date of his/her Birth according to the college register is <b class="text-uppercase" style="padding: 0px 30px;
    border-bottom: 3px solid black;">
        
        <?php 
        function numberTowords($num)
{ 

$ones = array(
0 =>"ZERO", 
1 => "ONE", 
2 => "TWO", 
3 => "THREE", 
4 => "FOUR", 
5 => "FIVE", 
6 => "SIX", 
7 => "SEVEN", 
8 => "EIGHT", 
9 => "NINE",
10 => "TEN", 
11 => "ELEVEN", 
12 => "TWELVE", 
13 => "THIRTEEN", 
14 => "FOURTEEN", 
15 => "FIFTEEN", 
16 => "SIXTEEN", 
17 => "SEVENTEEN", 
18 => "EIGHTEEN", 
19 => "NINETEEN",
"014" => "FOURTEEN" 
); 
$tens = array( 
0 => "ZERO",
1 => "TEN",
2 => "TWENTY", 
3 => "THIRTY", 
4 => "FORTY", 
5 => "FIFTY", 
6 => "SIXTY", 
7 => "SEVENTY", 
8 => "EIGHTY", 
9 => "NINETY" 
); 
$hundreds = array( 
"HUNDRED", 
"THOUSAND",
"MILLION", 
"BILLION", 
"TRILLION",
"QUARDRILLION" 
); /* limit t quadrillion */
$num = number_format($num,2,".",",");
$num_arr = explode(".",$num); 
$wholenum = $num_arr[0]; 
$decnum = $num_arr[1]; 
$whole_arr = array_reverse(explode(",",$wholenum)); 
krsort($whole_arr,1); 
$rettxt = ""; 
foreach($whole_arr as $key => $i){
	
while(substr($i,0,1)=="0")
		$i=substr($i,1,5);
if($i < 20){ 
/* echo "getting:".$i; */
$rettxt .= $ones[$i]; 
}elseif($i < 100){ 
if(substr($i,0,1)!="0")  $rettxt .= $tens[substr($i,0,1)]; 
if(substr($i,1,1)!="0") $rettxt .= " ".$ones[substr($i,1,1)]; 
}else{ 
if(substr($i,0,1)!="0") $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
if(substr($i,1,1)!="0")$rettxt .= " ".$tens[substr($i,1,1)]; 
if(substr($i,2,1)!="0")$rettxt .= " ".$ones[substr($i,2,1)]; 
} 
if($key > 0){ 
$rettxt .= " ".$hundreds[$key]." "; 
} 
} 
if($decnum > 0){ 
$rettxt .= " and "; 
if($decnum < 20){ 
$rettxt .= $ones[$decnum]; 
}elseif($decnum < 100){ 
$rettxt .= $tens[substr($decnum,0,1)]; 
$rettxt .= " ".$ones[substr($decnum,1,1)]; 
} 
} 
return $rettxt; 
}
        $birth_date = $leaving->dob;
$new_birth_date = explode('-', $birth_date);
$year = $new_birth_date[0];
$month = $new_birth_date[1];
$day  = $new_birth_date[2];
$birth_day=numberTowords($day);
$birth_year=numberTowords($year);
$monthNum = $month;
$dateObj = date("F",mktime(0,0,0,$monthNum,1,2011));//Convert the number into month name
// dd(date("F",mktime(0,0,0,$monthNum,1,2011)));
        ?>
       {{ date("d-m-Y", strtotime($leaving->dob)) }} <br> (in words {{ $birth_day }} {{ $dateObj }}, {{ $birth_year }})</b></p>
                        <p style="word-spacing: 0.2em;
    font-size: 26px;
    line-height: 2.8rem; text-align:justify">The last Annual Examination passed him/her was that of class <b style="border-bottom: 3px solid black;display: inline-block;
    width: 28%; text-align:center">{{ $leaving->class }}</b> in the year <b style="padding: 0px 30px;
    border-bottom: 3px solid black;">{{ $leaving->year }}</b></p>
                        <p style="word-spacing: 0.2em;
    font-size: 26px;
    line-height: 2.8rem; text-align:justify">He / She enrolled in a class <b style="padding: 0px 30px;
    border-bottom: 3px solid black;">{{ $leaving->enroll_class }}</b> & his / her PRN No. of Maharashtra University of Health Sciences, Nashik is <b style="padding: 0px 30px;
    border-bottom: 3px solid black;">{{ $leaving->prn_no }}</b></p>
                        <p style="word-spacing: 0.2em;
    font-size: 26px;
    line-height: 2.8rem; text-align:justify">His / Her Conduct was <b style="padding: 0px 30px;
    border-bottom: 3px solid black;">{{ $leaving->performance }}</b>
                        </p>
                        <p style="word-spacing: 0.2em;
    font-size: 26px;
    line-height: 2.8rem; text-align:justify"> Reason for Leaving college
                            <b style="padding: 0px 30px;
    border-bottom: 3px solid black;">{{ $leaving->reason_leaving }}</b> <br>Remarks <b style="padding: 0px 30px;
    border-bottom: 3px solid black;">{{ $leaving->remark }}</b>
                        </p>
                        
                    </td>
                </tr>
                <tr class="para">
                    <td colspan="2">
                        <p style="font-size: 24px;
    line-height: 2.5rem;">Date : <b>{{ date("d-m-Y", strtotime($leaving->date)) }}</b></p>
                    </td>
                    <td class="text-center">
                        <p style="font-size: 24px;
    line-height: 1.75rem;"><b>Principal,</b></p>
                        <p style="font-size: 20px;
    line-height: 1.75rem;"><b>D. M. M. Ayurved Mahavidyalaya,</b></p>
                        <p style="font-size: 20px;
    line-height: 1.75rem;"><b> Yavatmal.</b></p>
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
