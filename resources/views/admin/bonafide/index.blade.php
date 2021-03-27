@extends('admin.admin_layouts.main')

@section('title','Bonafide Certificate')

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
    <a href="{{ route('bonafide.certificate.view') }}" style="background-color:#27ae60;color:white;font-weight:bold;" type="submit" class="btn btn-sm" id="butsave" value="Submit">Generate Certificate</a>
    <!-- </form> -->
</div>


<div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">
                <h6 class="card-title card-padding pb-0">Bonafide Certificate List</h6>
                <div class="table-responsive p-4">
                    <table class="table table-striped table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th scope="row">Student Name</th>
                                <th scope="row">Year</th>
                                <th scope="row">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bonafide as $b)
                            <tr>
                                <td>{{ $b->student_name }}</td>
                                <td>{{ $b->year }}</td>
                                <td>
                                <a href="{{ route('view.bonafide', $b->id) }}" type="button" class="text-dark" title="view"><i class="fa fa-eye"></i></a>
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