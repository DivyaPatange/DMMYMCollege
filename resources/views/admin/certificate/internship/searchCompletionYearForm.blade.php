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
                        <form method="POST" action="{{ route('internship.completion.list') }}">
                        @csrf
                        <div class="row card-padding">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cars">Session Year:</label>
                                    <select name="sessionyear" id="sessionyear" class="@error('sessionyear') is-invalid @enderror form-control">
                                        <option value="">
                                            -Select Session-
                                        </option>
                                        @for($i=2010; $i < 2041; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
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
                                    <label for="program">Program</label>
                                    <select name="program" id="program" class="@error('program') is-invalid @enderror form-control">
                                        <option value="">-Select Program-</option>
                                        <option value="Orientation Program">Orientation Program</option>
                                        <option value="Internship Program">Internship Program</option>
                                        <option value="PHC Primary Health CareCentre">PHC Primary Health CareCentre</option>
                                        <option value="Casuality/Rural Hospital">Casuality/Rural Hospital</option>
                                    </select>
                                    @error('program')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="course">Generate</label>
                                    <button style="background-color:#27ae60;color:white;font-weight:bold;" type="submit" class="btn btn-sm btn-block" id="butsave" value="Submit">Generate Certificate</button>
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
                        </form>
                    </div>

                </div>
            </div>
        </div>
    <!-- </form> -->
</div>


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