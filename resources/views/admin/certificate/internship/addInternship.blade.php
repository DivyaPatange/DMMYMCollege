@extends('admin.admin_layouts.main')

@section('title','Internship Form')

@section('custom_styles')
<style>
.hidden {
    display: none;
}
</style>
@endsection

@section('content')
<form action="{{ url('admin/addIntership/store') }}" id="internshipform" enctype="multipart/form-data"
        method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="mdc-layout-grid">

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif
    
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                    <h6 class="card-title card-padding pb-0">Internship Certificate Form</h6>
                    <div clas="container p-4">
                        <div class="row card-padding">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fn">First name:</label>
                                    <input type="text" name="firstname" class="firstname form-control" id="firstname">
                                    @error('firstname')
                                    <div>
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fn">Middle name:</label>
                                    <input type="text" name="middlename" class="middlename form-control" id="middlename">
                                    @error('middlename')
                                    <span class="text-danger" role="alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fn">Last name:</label>
                                    <input type="text" name="lastname" class="lastname form-control" id="lastname">
                                    @error('lastname')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cars">Session Year:</label>
                                    <select name="sessionyear" id="sessionyear" class="sessionyear form-control">
                                        <option>
                                            <--Select-->
                                        </option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                        <option value="2035">2035</option>
                                        <option value="2036">2036</option>
                                        <option value="2037">2037</option>
                                        <option value="2038">2038</option>
                                        <option value="2039">2039</option>
                                        <option value="2040">2040</option>
                                    </select>
                                    @error('sessionyear')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cars">Session Season:</label>
                                    <select name="sessionseason" id="cars" class="sessionseason form-control">
                                        <option>
                                            <--Select-->
                                        </option>
                                        <option value="Summer">Summer</option>
                                        <option value="Winter">Winter</option>
                                    </select>
                                    @error('sessionseason')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="course">Date:</label>
                                    <input type="date" name="date" class="date form-control" id="date">
                                    @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- <div
                                class="mdc-layout-grid__cell stretch-card1 mdc-layout-grid__cell--span-12-desktop text-center">
                                <button
                                    class="mdc-button mdc-button--unelevated filled-button--success mdc-ripple-upgraded"
                                    style="--mdc-ripple-fg-size:56px; --mdc-ripple-fg-scale:1.96936; --mdc-ripple-fg-translate-start:6px, -0.200012px; --mdc-ripple-fg-translate-end:18.8px, -10px;"
                                    type="submit" id="submit" name="submit">
                                    Save
                                </button>
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <!-- </form> -->
</div>

<div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">
                <h6 class="card-title card-padding pb-0">Clinical Work Detail</h6>
                <div class="table-responsive p-4">
                    <table class="table table-bordered" id="table1"> 
                        <thead>
                            <tr>
                                <th style="text-align: center !important;">#</th>
                                <th style="text-align: center !important;">SCHEDULE</th>
                                <th style="text-align: center !important;">DURATION</th>
                                <th style="text-align: center !important;">COMPLETION DATES</th>
                                <th style="text-align: center !important;">PROGRAM</th>
                                <th style="text-align: center !important;">PLACE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" id="checkbox1" name="checkbox1" value="1"></td>
                                
                                <td align="center"><span id="schedule1">A</span><input type="hidden" name="schedule1" value="A"></td>
                                <td><span id="duration1">5 Day</span><input type="hidden" name="duration1" value="5 day" ></td>
                                <td><input  class="disableRow1" type="date" name="startDate1" id="startDate1" disabled="true"> to <input class="disableRow1" type="date"
                                        name="endDate1" id="endDate1" disabled="true"></td>
                                <td><span id="oriattationPrgmCollegeName1">Orientation
                                        Programme</span><input type="hidden"  name="oriattationPrgmCollegeName1" value="Orientation Program"></td>
                                <td><input type="text" name="place1" class="disableRow1" id="place1" placeholder="ENTER PLACE / HOSPITAL" disabled="true">
                                </td>
                                <!-- <td>
                                    <div class="add">

                                        <a id="add1" class="btn btn-primary btn-sm" onclick="appendRow(this.id);"
                                            style="color: white;">SAVE</a>

                                    </div>
                                </td> -->
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="checkbox2" name="checkbox2" value="1"></td>
                                <td align="center"><span id="schedule2">B</span><input type="hidden" name="schedule2" value="B"></td>
                                <td><span id="duration2">6 Month</span><input type="hidden" name="duration2" value="6 months"></td>
                                <td><input type="date" class="disableRow2" name="startDate2" id="startDate2" disabled="true"> to <input type="date"
                                        name="endDate2" class="disableRow2" id="endDate2" disabled="true"></td>
                                <td><span id="oriattationPrgmCollegeName2">Internship
                                        Programme</span><input type="hidden" name="oriattationPrgmCollegeName2" value="Internship Programme"></td>
                                <td><input type="text" class="disableRow2" name="place2" id="place2" placeholder="ENTER PLACE / HOSPITAL" disabled="true">
                                </td>
                                <!-- <td>
                                    <div class="add">

                                        <a id="add2" class="btn btn-primary btn-sm" onclick="appendRow(this.id);"
                                            style="color: white;">SAVE</a>


                                    </div>
                                </td> -->
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="checkbox3" name="checkbox3" value="1"></td>
                                <td align="center"><span id="schedule3">C</span><input type="hidden" name="schedule3" value="C"></td>
                                <td><span id="duration3">3 Month</span><input type="hidden" name="duration3" value="3 Months"></td>
                                <td><input type="date" name="startDate3" class="disableRow3" id="startDate3" disabled="true"> to <input type="date"
                                        name="endDate3" id="endDate3" class="disableRow3" disabled="true"></td>
                                <td><span id="oriattationPrgmCollegeName3">PHC
                                        Primary Health CareCenter</span><input type="hidden" name="oriattationPrgmCollegeName3" value="PHC Primary Health Care center"></td>
                                <td><input type="text" name="place3" class="disableRow3" id="place3" placeholder="ENTER PLACE / HOSPITAL" disabled="true">
                                </td>
                                <!-- <td>
                                    <div class="add">

                                        <a id="add3" class="btn btn-primary btn-sm" onclick="appendRow(this.id);"
                                            style="color: white;">SAVE</a>
                                    </div>
                                </td> -->
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="checkbox4" name="checkbox4" value="1"></td>
                                <td align="center"><span id="schedule4">D</span><input type="hidden" name="schedule4" value="D"></td>
                                <td><span id="duration4">3 Month</span><input type="hidden" value="3 Months" name="duration4"></td>
                                <td><input type="date" class="disableRow4" name="startDate4" id="startDate4" disabled="true"> to <input type="date"
                                        name="endDate4" id="endDate4" class="disableRow4" disabled="true"></td>
                                <td><span id="oriattationPrgmCollegeName4">Casualty/Rural
                                        Hospital</span><input type="hidden" name="oriattationPrgmCollegeName4" value="Casualty/Rural Hospital"></td>
                                <td><input type="text" class="disableRow4" name="place4" id="place4" placeholder="ENTER PLACE / HOSPITAL" disabled="true">
                                </td>
                                <!-- <td>
                                    <div class="add">

                                        <a id="add4" class="btn btn-primary btn-sm" onclick="appendRow(this.id);"
                                            style="color: white;">SAVE</a>
                                    </div>
                                </td> -->
                            </tr>
                        </tbody>
                    </table>
                    
                    <button style="background-color:#27ae60;color:white;font-weight:bold;" type="submit" class="btn btn-block btn-sm" type="submit" id="butsave" value="Submit">SAVE INTERNSHIP CERTIFICATE</button>
                        
                </div>
            </div>
        </div>
    </div>

</div>

</form>
<!-- <div class="mdc-layout-grid"> -->
    <!-- <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">
                <h6 class="card-title card-padding pb-0">Clinical Work Detail</h6>
                <div class="table-responsive p-4">
                    <table class="table table-striped table-bordered" id="perticularsTable">
                        <thead>
                            <tr>
                                <th scope="row">Schedule</th>
                                <th scope="row">Duration</th>
                                <th scope="row">StartDate</th>
                                <th scope="row">EndDate</th>
                                <th scope="row">OrientationPrgmCollegeName</th>
                                <th scope="row">place</th>
                            </tr>
                        </thead>
                        <tbody id="perticularsBody">

                        </tbody>
                    </table>
                    <button style="background-color:#27ae60;color:white;font-weight:bold;" type="submit" class="btn btn-block btn-sm" type="submit" id="butsave" value="Submit">SAVE INTERNSHIP CERTIFICATE</button>
                </div>
            </div>
        </div>
    </div> -->
    @section('customjs')
    <script>
       
        $(document).ready(function(){
            $('#checkbox1').change(function(){
            if($('#checkbox1').is(':checked'))
            {
                $('.disableRow1').prop('disabled',false);
            }
            else{
                $('.disableRow1').prop('disabled',true);
            }
            });

            $('#checkbox2').change(function(){
            if($('#checkbox2').is(':checked'))
            {
                $('.disableRow2').prop('disabled',false);
            }
            else{
                $('.disableRow2').prop('disabled',true);
            }
            });

            $('#checkbox3').change(function(){
            if($('#checkbox3').is(':checked'))
            {
                $('.disableRow3').prop('disabled',false);
            }
            else{
                $('.disableRow3').prop('disabled',true);
            }
            });

            $('#checkbox4').change(function(){
            if($('#checkbox4').is(':checked'))
            {
                $('.disableRow4').prop('disabled',false);
            }
            else{
                $('.disableRow4').prop('disabled',true);
            }
            });
    } );

    </script>
    @endsection
    <!-- <script type="text/javascript">
	function appendRow(id) {

		var buttonId = id;
		var buttonString = String(buttonId);
		var intBtnId = buttonString.substring(3, buttonString.length);
        //alert(intBtnId);
		var schedule = document.getElementById("schedule" + intBtnId + "").textContent;
        // alert(schedule);
		var duration = document.getElementById("duration" + intBtnId + "").textContent;
		var startDate = document.getElementById("startDate" + intBtnId + "").value;
		var oriattationPrgmCollegeName = document
				.getElementById("oriattationPrgmCollegeName" + intBtnId + "").textContent;
		var endDate = document.getElementById("endDate" + intBtnId + "").value;
		var place = document.getElementById("place" + intBtnId + "").value;

		if (schedule == "") {
			alert("Enter Schedule");
			return false;
		} else if (duration == "") {
			alert("Enter Duration");
			return false;

		} else if (startDate == "") {
			alert("Select The Start Date");
			return false;

		} else if (endDate == "") {
			alert("Select The End Date");
			return false;

		} else if (place == "") {
			alert("Enter The Place");
			return false;

		} else if (oriattationPrgmCollegeName == "") {
			alert("Enter The Orientation");
			return false;

		}

		var table = document.getElementById('perticularsBody');
		var row = table.insertRow(0);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
		var cell6 = row.insertCell(5);

		cell1.innerHTML = schedule;
		cell2.innerHTML = duration;
		cell3.innerHTML = startDate;
		cell4.innerHTML = endDate;
		cell5.innerHTML = oriattationPrgmCollegeName;
		cell6.innerHTML = place;
	}
</script>
<script>
    $(document).ready(function(){
        $("#butsave").click(function(){
            var buttonId = id;
            var buttonString = String(buttonId);
            var intBtnId = buttonString.substring(3, buttonString.length);
            // var lastRowId =  $('#table1 tr:last').attr("id");
            // var schedule = new Array();
            // var duration = new Array();
            // var startDate = new Array();
            // var endDate = new Array();
            // var place = new Array();
            // var oriattationPrgmCollegeName = new Array();
            var schedule = document.getElementById("schedule" + intBtnId + "").textContent;
		    var duration = document.getElementById("duration" + intBtnId + "").textContent;
            var startDate = document.getElementById("startDate" + intBtnId + "").value;
		    var oriattationPrgmCollegeName = document.getElementById("oriattationPrgmCollegeName" + intBtnId + "").textContent;
		    var endDate = document.getElementById("endDate" + intBtnId + "").value;
		    var place = document.getElementById("place" + intBtnId + "").value;
            var firstname = $('.firstname').val();
            var middlename = $('.middlename').val();
            var lastname = $('.lastname').val();
            var sessionyear = $('.sessionyear').val();
            var sessionseason = $('.sessionseason').val();
            var date = $('.date').val();

            for(var i = 1; i<=lastRowId; i++)
            {
                schedule.push($("#"+i+".firstname"+i).html());
                middlename.push($("#"+i+".middlename"+i).html());
                lastname.push($("#"+i+".lastname"+i).html());
                sessionyear.push($("#"+i+".sessionyear"+i).html());
                sessionseason.push($("#"+i+".sessionseason"+i).html());
                date.push($("#"+i+".date"+i).html());
            }
            
        });
    });
    
</script> -->
    @endsection