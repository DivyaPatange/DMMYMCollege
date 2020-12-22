@extends('admin.admin_layouts.main')

@section('title','Edit Internship Form')

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
          <form action="{{ route('updatecertificate', $internshipCertificate->id) }}" id="internshipform" enctype="multipart/form-data" method="post">
            @method('PUT')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
  <div class="mdc-layout-grid__inner">
    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
      <div class="mdc-card p-0">
        <h6 class="card-title card-padding pb-0">Edit Internship Certificate Form</h6>
        <div clas="container p-4">
            <div class="row card-padding">
                <div class="col-md-4">
                     <div class="form-group">
                         <label for="formno">Internship Held Year:</label>
                         <input type="number" name="year" class="form-control" id="year" value="{{ $internshipCertificate->held_year }}">
                         @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                     </div>
                </div>
               {{-- <input type="hidden" name="user_id" value="{{ $user->id }}"> --}}
                <div class="col-md-4">
                     <div class="form-group">
                         <label for="ayear">Schedule:</label>
                         <input type="text" name="schedule" class="form-control" id="schedule" value="{{ $internshipCertificate->schedule }}">
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
                         <input type="text" name="duration" class="form-control" id="duration" value="{{ $internshipCertificate->duration }}">
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
                        <input type="date" name="completion_date1" class="form-control" id="completion_date1" value="{{ $internshipCertificate->completion_date1 }}">
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
                        <input type="date" name="completion_date2" class="form-control" id="completion_date2" value="{{ $internshipCertificate->completion_date2 }}">
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
                        <input type="text" name="place" class="form-control" id="place" value="{{ $internshipCertificate->place }}">
                        @error('place')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                 <div class="mdc-layout-grid__cell stretch-card1 mdc-layout-grid__cell--span-12-desktop text-center">
                    <button class="mdc-button mdc-button--unelevated filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:56px; --mdc-ripple-fg-scale:1.96936; --mdc-ripple-fg-translate-start:6px, -0.200012px; --mdc-ripple-fg-translate-end:18.8px, -10px;" type="submit" id="submit" name="submit">
                            Update
                    </button>
                  </div>
            </div>
        </div>
        
      </div>
    </div>
  </div>
</form>
</div>


@endsection