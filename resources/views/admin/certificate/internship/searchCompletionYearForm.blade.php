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


<div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">
                <h6 class="card-title card-padding pb-0">Internship Completion List</h6>
                <div class="table-responsive p-4">
                    <table class="table table-striped table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th scope="row">Session</th>
                                <th scope="row">Program</th>
                                <th scope="row">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($internship as $i)
                            <tr>
                                <td>{{ $i->session }}</td>
                                <td>{{ $i->program }}</td>
                                <td>
                                <a href="{{ route('view.certificate', $i->id) }}" type="button" class="text-dark" title="view"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @section('customjs')
   
    @endsection
  
    @endsection