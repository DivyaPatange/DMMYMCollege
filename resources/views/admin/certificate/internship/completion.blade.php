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
                                <p style="text-indent: 100px; text-align:justify; padding:10px">आपणांस कळविण्यांत येत आहे की ,खालील विद्यार्थी अंतिम वर्ष बी .ए .एम .एस <span id="exam">____</span><span id="placedExam"></span> <span id="placedYear"></span><span id="academicYear">____</span> या परीक्षेत उत्तीर्ण झाले आहेत तरी आपले रुग्णलयाचे विभागात प्रशिक्षणार्थी 
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
            <div class="row" id="myForm">
                <div class="col-md-3 ml-3">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Serial No." id="serialNo" onfocus="this.value=''">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Student Name" onfocus="this.value=''" id="studentName">
                    </div>
                </div>
                <div class="col-md-1">
                    <a type="button" id="adddetails" onclick="appendRow();"><i class='fas fa-plus-circle' style='font-size:24px'></i></a>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <select class="form-control" id="session" onchange="getSession(this)">
                            <option value="">-Select Exam-</option>
                            <option value="हिवाळा">हिवाळा</option>
                            <option value="उन्हाळा">उन्हाळा</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <select class="form-control" id="year" onchange="getYear(this)">
                            <option value="">-Select Seesion Year-</option>
                            @for($i=2010; $i < 2040; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
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
            <button type="button" onclick="printContent('printdiv')" usesubmitbehaviour="False" class="btn btn-primary" disabled>Print</button>
            <a type="button" onclick="submitForm()" class="btn btn-success">Save</a>
        </div>

<!-- plugins:js -->
@include('admin.admin_layouts.scripts')
<script>
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
</script>
<script>
		function appendRow() {
			var studentName = document.getElementById('studentName').value;
			var serialNum = document.getElementById('serialNo').value;

			if (studentName == "") {
				alert("Enter Student Name");
				return false;
			} else if (serialNum == "") {
				alert("Enter Serial Number");
				return false;

			}

			var table = document.getElementById('perticularsBody');
			var row = table.insertRow(0);
			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);

			cell1.innerHTML = serialNum;
			cell2.innerHTML = studentName;

		}
		function getSession(selectObject) {
  var value = selectObject.value; 
  $("span#exam").remove();
  $('span#placedExam').html(value);
  console.log(value);
}
function getYear(selectObject) {
  var value = selectObject.value; 
  $("span#academicYear").remove();
  $('span#placedYear').html(value);
  console.log(value);
}
  function printContent(el){
      
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
  }
  function submitForm() {
    var internshipYear = $('#year').val(); 
    var internshipSeason = $('#session').val();
    // alert(internshipSeason);
    var TableData = new Array();
  $('#table_example tr').each(function(row, tr) {
    TableData[row] = {
      "ID": $(tr).find('td:eq(0)').text(),
      "Name": $(tr).find('td:eq(1)').text()
    }//tableData[row]
  });
  TableData.shift(); // first row will be empty - so remove
  var Data;
  Data = JSON.stringify(TableData);
  var table = "table:" + Data;
// alert(Data);
  alert(table);
    // var n1 = document.getElementById("perticularsBody").rows.length;

    // var i=0,j=0;
    // var str="";
    
    // for(i=0; i<n1;i++){
    
    // var n2 = document.getElementById("perticularsBody").rows[i].cells.length;
    
    // for(j=0; j<n2;j++){
    
    // var x=document.getElementById("perticularsBody").rows[i].cells.item(j).innerHTML;
    
    //     str=str+x+",";
    
    // }
    // str=str;
    
    // }
    // alert(str);
    if(Data != '' && internshipSeason != '' && internshipYear != ''){
        if (($('#myForm').is(":visible"))) {
        $("#serialNo").hide();
        $("#studentName").hide();
        $("#session").hide();
        $("#year").hide();
        $("#adddetails").hide();
        }
		$.ajax({
			url: "{{ route('internship.completion.save') }}",
			method: "POST",
			data: {table:table},
			success: function(data){
                console.log(data);
			}
		});
	}
    else{
        alert("Please fill input Data.");
    }
    
}
</script>
</body>
</html> 
