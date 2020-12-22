@extends('admin.admin_layouts.main')

@section('title','Internship Form')

@section('custom_styles')
    <style>
       .hidden{
           display:none;
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
          <form action="{{ url('internshipCertificate/store') }}" id="internshipform" enctype="multipart/form-data" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="mdc-layout-grid__inner">
    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
      <div class="mdc-card p-0">
        <h6 class="card-title card-padding pb-0">Internship Certificate Form</h6>
        <div clas="container p-4">
            <div class="row card-padding">
                <div class="col-md-4">
                     <div class="form-group">
                         <label for="formno">Internship Held Year:</label>
                         <input type="number" name="year" class="form-control" id="year">
                         @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                     </div>
                </div>
              <input type="hidden" name="user_id" value="{{ $user->id }}">
                <div class="col-md-4">
                     <div class="form-group">
                         <label for="ayear">Schedule Year:</label>
                         <input type="number" name="schedule" class="form-control" id="schedule">
                         @error('schedule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="form-group">
                         <label for="course">Duration</label>
                         <input type="text" name="duration" class="form-control" id="duration">
                         @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group">
                        <label for="course">Start Date</label>
                        <input type="date" name="completion_date1" class="form-control" id="completion_date1">
                        @error('completion_date1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="course">End Date</label>
                        <input type="date" name="completion_date2" class="form-control" id="completion_date2">
                        @error('completion_date2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="course">Place</label>
                        <input type="text" name="place" class="form-control" id="place">
                        @error('place')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                 <div class="mdc-layout-grid__cell stretch-card1 mdc-layout-grid__cell--span-12-desktop text-center">
                    <button class="mdc-button mdc-button--unelevated filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:56px; --mdc-ripple-fg-scale:1.96936; --mdc-ripple-fg-translate-start:6px, -0.200012px; --mdc-ripple-fg-translate-end:18.8px, -10px;" type="submit" id="submit" name="submit">
                            Save
                    </button>
                  </div>
            </div>
        </div>
        
      </div>
    </div>
  </div>
</form>
</div>

<div class="mdc-layout-grid">
  <div class="mdc-layout-grid__inner">
    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
      <div class="mdc-card p-0">
        <h6 class="card-title card-padding pb-0">Intership List</h6>
        <div class="table-responsive p-4">
            <table class="table table-hoverable" id="datatable" >
              <thead>
                <tr>
                  
                  <th class="text-center">ID</th>
                  <th class="text-center">HELD YEAR</th>
                  <th class="text-center">SCHEDULE</th>
                  <th class="text-center">DURATION</th>
                  <th class="text-center">START DATE</th>
                  <th class="text-center">END DATE</th>
                  <th class="text-center">PLACE</th>
                  <th class="text-center">ACTION</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($internshipCertificate as $key => $ic)
                              <tr>
                              <td class="text-center">{{ ++$key }}</td>
                              <td class="text-center">{{ $ic->held_year }}</td>
                              <td class="text-center">{{ $ic->schedule }}</td>
                              <td class="text-center">{{ $ic->duration}}</td>
                              <td class="text-center">{{$ic->completion_date1}}</td>
                              <td class="text-center">{{ $ic->completion_date2 }} </td>
                              <td class="text-center">{{ $ic->place }}</td>
                              <td class="text-center">
                                <a href="{{ route('editCertificate', ['id'=>$ic->id]) }}" type="button" class="mdc-button mdc-button--unelevated filled-button--warning mdc-ripple-upgraded">Edit</a>
                                <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()"><button type="button" class="mdc-button mdc-button--unelevated filled-button--secondary mdc-ripple-upgraded">Delete</button></a>
                                   <form action="{{ route('deleteCertificate',['id'=>$ic->id]) }}" method="post">
                                    @method('DELETE')
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  </form> 
                              </td>
                            </tr>
                            @endforeach
                            <tr>
                              <td class="text-center" colspan="7">
                              <a href="{{ route('createCertificate',['id'=>$internshiprequest->id]) }}" type="button" class="mdc-button mdc-button--unelevated filled-button--info mdc-ripple-upgraded">Certificate</a>
                                     {{-- <a href="{{ route('viewAdmissionForm', ['id'=>$a->id]) }}" type="button" class="mdc-button mdc-button--unelevated filled-button--info mdc-ripple-upgraded">View</a> --}}
                                   
                                </td>
                            </tr>
                              
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>

</div>

@endsection