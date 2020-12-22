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
<form action="{{ route('internship.updateOffline', $offlineinternship->id) }}" id="internshipform" enctype="multipart/form-data"
        method="post">
        @method('PUT')
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
                                    <input type="text" name="firstname" class="firstname form-control" id="firstname" class="@error('firstname') is-invalid @enderror" value="{{ $offlineinternship->firstname }}">
                                    @error('firstname')
                                    <div>
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fn">Middle name:</label>
                                    <input type="text" name="middlename" class="middlename form-control" id="middlename"class="@error('firstname') is-invalid @enderror" value="{{ $offlineinternship->middlename }}">
                                    @error('middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fn">Last name:</label>
                                    <input type="text" name="lastname" class="lastname form-control" id="lastname" value="{{ $offlineinternship->lastname }}">
                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cars">Session Year:</label>
                                    <select name="sessionyear" id="sessionyear" class="sessionyear form-control">
                                        <option value="{{ $offlineinternship->sessionyear }}"> {{ $offlineinternship->sessionyear }}</option>
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
                                    <select name="sessionseason" id="cars" class="sessionseason form-control" value="{{ $offlineinternship->sessonseason }}">
                                        <option value="{{ $offlineinternship->sessonseason }}">{{ $offlineinternship->sessonseason }}</option>
                                        <option value="summer">Summer</option>
                                        <option value="winter">Winter</option>
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
                                    <input type="date" name="date" class="date form-control" id="date" value="{{ $offlineinternship->date }}">
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

                        @if(!empty($workDetail1))
                        
                            <tr>
                                <td><input type="checkbox" id="checkbox1" name="checkbox1" value="1" checked></td>
                                
                                <td align="center"><span id="schedule1">A</span><input type="hidden" name="schedule1" value="{{ $workDetail1->schedule }}"></td>
                                <td><span id="duration1">5 Day</span><input type="hidden" name="duration1" value="{{ $workDetail1->duration }}"></td>
                                <td><input type="date" class="disableRow1" name="startDate1" id="startDate1" value="{{ $workDetail1->startDate }}"> to <input type="date"
                                        name="endDate1" class="disableRow1" id="endDate1" value="{{ $workDetail1->endDate }}"></td>
                                <td><span id="oriattationPrgmCollegeName1">Orientation
                                        Programme</span><input type="hidden"  name="oriattationPrgmCollegeName1" value="{{ $workDetail1->oriattationPrgmCollegeName }}"></td>
                                <td><input type="text" class="disableRow1" name="place1" id="place1" value="{{ $workDetail1->place }}">
                                </td>
                            </tr>
                            <tr>
                        
                        @else
                            <tr>
                                <td><input type="checkbox" id="checkbox1" name="checkbox1" value="1"></td>
                                
                                <td align="center"><span id="schedule1">A</span><input type="hidden" name="schedule1" value="A"></td>
                                <td><span id="duration1">5 Day</span><input type="hidden" name="duration1" value="5 day"></td>
                                <td><input type="date" class="disableRow1" name="startDate1" id="startDate1" disabled="true"> to <input type="date"
                                        name="endDate1" class="disableRow1" id="endDate1" disabled="true"></td>
                                <td><span id="oriattationPrgmCollegeName1">Orientation
                                        Programme</span><input type="hidden"  name="oriattationPrgmCollegeName1" value="Orientation Program"></td>
                                <td><input type="text" class="disableRow1" name="place1" id="place1" placeholder="ENTER PLACE / HOSPITAL" disabled="true">
                                </td>
                            </tr>

                        @endif

                        @if(!empty($workDetail2))
                            <tr>
                                <td><input type="checkbox" id="checkbox2" name="checkbox2" value="1" checked></td>
                                <td align="center"><span id="schedule2">B</span><input type="hidden" name="schedule2" value="{{ $workDetail2->schedule }}"></td>
                                <td><span id="duration2">6 Month</span><input type="hidden" name="duration2" value="{{ $workDetail2->duration }}"></td>
                                <td><input type="date" class="disableRow2" name="startDate2" id="startDate2" value="{{ $workDetail2->startDate }}"> to <input type="date"
                                        name="endDate2" class="disableRow2" id="endDate2" value="{{ $workDetail2->endDate }}"></td>
                                <td><span id="oriattationPrgmCollegeName2">Internship
                                        Programme</span><input type="hidden" name="oriattationPrgmCollegeName2" value="{{ $workDetail2->oriattationPrgmCollegeName }}"></td>
                                <td><input type="text" class="disableRow2" name="place2" id="place2" placeholder="ENTER PLACE / HOSPITAL" value="{{ $workDetail2->place }}">
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td><input type="checkbox" id="checkbox2" name="checkbox2" value="1" ></td>
                                <td align="center"><span id="schedule2">B</span><input type="hidden" name="schedule2" value="B"></td>
                                <td><span id="duration2">6 Month</span><input type="hidden" name="duration2" value="6 months"></td>
                                <td><input type="date" name="startDate2" class="disableRow2" id="startDate2" disabled="true"> to <input type="date"
                                        name="endDate2" id="endDate2" class="disableRow2" disabled="true"></td>
                                <td><span id="oriattationPrgmCollegeName2">Internship
                                        Programme</span><input type="hidden" name="oriattationPrgmCollegeName2" value="Internship Programme"></td>
                                <td><input type="text" name="place2" id="place2" class="disableRow2" placeholder="ENTER PLACE / HOSPITAL" disabled="true">
                                </td>
                            </tr>
                            @endif

                            @if(!empty($workDetail3))
                            <tr>
                                <td><input type="checkbox" id="checkbox3" name="checkbox3" value="1" checked></td>
                                <td align="center"><span id="schedule3">C</span><input type="hidden" name="schedule3" value="C"></td>
                                <td><span id="duration3">3 Month</span><input type="hidden" name="duration3" value="3 Months"></td>
                                <td><input type="date" name="startDate3" class="disableRow3" id="startDate3" value="{{ $workDetail3->startDate }}"> to <input type="date"
                                        name="endDate3" id="endDate3" class="disableRow3" value="{{ $workDetail3->endDate }}"></td>
                                <td><span id="oriattationPrgmCollegeName3">PHC
                                        Primary Health CareCenter</span><input type="hidden" name="oriattationPrgmCollegeName3" value="{{ $workDetail3->oriattationPrgmCollegeName }}"></td>
                                <td><input type="text" name="place3" id="place3" class="disableRow3" placeholder="ENTER PLACE / HOSPITAL" value="{{ $workDetail3->place }}">
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td><input type="checkbox" id="checkbox3" name="checkbox3" value="1"></td>
                                <td align="center"><span id="schedule3">C</span><input type="hidden" name="schedule3" value="C"></td>
                                <td><span id="duration3">3 Month</span><input type="hidden" name="duration3" value="3 Months"></td>
                                <td><input type="date" class="disableRow3" name="startDate3" id="startDate3" disabled="true"> to <input type="date"
                                        name="endDate3" id="endDate3" class="disableRow3" disabled="true"></td>
                                <td><span id="oriattationPrgmCollegeName3">PHC
                                        Primary Health CareCenter</span><input type="hidden" name="oriattationPrgmCollegeName3" value="PHC Primary Health Care center"></td>
                                <td><input type="text" name="place3" class="disableRow3" id="place3" placeholder="ENTER PLACE / HOSPITAL" disabled="true">
                                </td>
                            </tr>
                            @endif

                            @if(!empty($workDetail4))
                            <tr>
                                <td><input type="checkbox" id="checkbox4" name="checkbox4" value="1" checked></td>
                                <td align="center"><span id="schedule4">D</span><input type="hidden" name="schedule4" value="{{ $workDetail4->schedule }}"></td>
                                <td><span id="duration4">3 Month</span><input type="hidden" value="{{ $workDetail4->duration }}" name="duration4"></td>
                                <td><input type="date" name="startDate4" class="disableRow4" id="startDate4" value="{{ $workDetail4->startDate }}"> to <input type="date"
                                        name="endDate4" id="endDate4" class="disableRow4" value="{{ $workDetail4->endDate }}"></td>
                                <td><span id="oriattationPrgmCollegeName4">Casualty/Rural
                                        Hospital</span><input type="hidden" name="oriattationPrgmCollegeName4" value="{{ $workDetail4->oriattationPrgmCollegeName }}"></td>
                                <td><input type="text" name="place4" id="place4" placeholder="ENTER PLACE / HOSPITAL" value="{{ $workDetail4->place }}">
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td><input type="checkbox" id="checkbox4" name="checkbox4" value="1"></td>
                                <td align="center"><span id="schedule4">D</span><input type="hidden" name="schedule4" value="D"></td>
                                <td><span id="duration4">3 Month</span><input type="hidden" value="3 Months" name="duration4"></td>
                                <td><input type="date" name="startDate4" class="disableRow4" id="startDate4" disabled="true"> to <input type="date"
                                        name="endDate4" id="endDate4" class="disableRow4" disabled="true"></td>
                                <td><span id="oriattationPrgmCollegeName4">Casualty/Rural
                                        Hospital</span><input type="hidden" name="oriattationPrgmCollegeName4" value="Casualty/Rural Hospital"></td>
                                <td><input type="text" name="place4" class="disableRow4" id="place4" placeholder="ENTER PLACE / HOSPITAL" disabled="true">
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    
                    <button style="background-color:#27ae60;color:white;font-weight:bold;" class="btn btn-block btn-sm" type="submit" id="butsave" value="Submit">SAVE INTERNSHIP CERTIFICATE</button>
                        
                </div>
            </div>
        </div>
    </div>

</div>

</form>
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
    @endsection