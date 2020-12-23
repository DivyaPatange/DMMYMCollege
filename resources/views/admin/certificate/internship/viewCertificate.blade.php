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
            <div style="border: 1px solid;">
            <div class="row" >
                <div class="col-md-12">
                    <table  class="p-5" >
                        <tr>
                          <td style="text-align: center;padding-top:1rem;"><h6 style="font-family: serif;">महाराष्ट्र आरोग्य विज्ञान विद्यापीठ नाशिक संलग्नीत</h6></td>
                        </tr>
                        <tr>
                          <td style="text-align: center; padding-top:1rem;"><h6 style="font-family: serif;">महाराष्ट्र शासन अनुदानीत</h6></td>
                        </tr>
                        <tr>
                          <td style="text-align: center; padding-top:1rem;"><h6 style="font-family: serif;">आयुर्वेद सेवा समिती द्वारा संचलीत</h6></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;padding-right:1rem;padding-left:1rem;"><h3 style=" font-family: serif;font-weight: 600;">डॉ.मा.म. आयुर्वेद महाविद्यालय ,यवतमाळ .</h3></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;padding-right:1rem;padding-left:1rem;"><h4 style="font-family: serif; text-decoration:underline">कार्यालयीन आदेश<h4></td>
                        </tr>
                        <tr>
                            <td>
                                <div style="width:35%; margin-left:auto"><p>जा.क्र. डामामआयुमहा /
यवत /आंप्राशी /....../2014,</p>
                            <p>प्राचार्य यांचे कार्यालय ,</p>
                            <p>डॉ.मा.म. आयुर्वेद महाविद्यालय ,यवतमाळ .</p>
                            <p>दिनांक :- <b>{{ date('Y-m-d') }}</b></p>
                            </div>
                            </td>                                
                        </tr>
                        <tr>
                            <td style="text-align:left">
                                <div style="padding-left:10px">
                                <p>प्रति ,</p>
                                <p>मा.निवासी वैद्यकिय अधिकारी ,</p>
                                <p>ल.क.आयुर्वेद रुग्णालय ,</p>
                                <p>यवतमाळ.</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="text-indent: 50px;">महोदय ,</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="text-indent: 100px; text-align:justify; padding:10px">आपणांस कळविण्यांत येत आहे की ,खालील विद्यार्थी अंतिम वर्ष बी .ए .एम .एस @if(!empty($internshipCompletionSeason)){{ $internshipCompletionSeason->internship_season }} @endif @if(!empty($internshipCompletionSeason)) {{ $internshipCompletionSeason->internship_year }} @endif या परीक्षेत उत्तीर्ण झाले आहेत तरी आपले रुग्णलयाचे विभागात प्रशिक्षणार्थी 
म्हणून 06 महिन्याचे प्रशिक्षण कालावधीकरीता प्रशिक्षणार्थी 
म्हणून रुजू करून घेवून त्याबाबतचा रुजु अहवाल 
कार्यालयास सादर करावा .</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="text-indent:150px;">धन्यवाद.</p>
                            </td>
                        </tr>
                    </table>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-6 ml-3">
                    <table class="table table-bordered" style="width: 100%;margin-left:1.5%;margin-top:2%;" id="table_example">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>

							</tr>
						</thead>
						<tbody id="perticularsBody">
                        @foreach($internshipCompletionStudent as $i)
                            <tr>
                                <td>{{ $i->serial_no }}</td>
                                <td>{{ $i->name }}</td>
                            </tr>
                        @endforeach
						</tbody>
					</table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ml-auto text-center">
                    <p><b>प्राचार्य</b></p>
                    <p><b>डॉ.मा.म.आयुर्वेद महाविद्यालय ,</b></p>
                    <p><b>यवतमाळ</b></p>
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
