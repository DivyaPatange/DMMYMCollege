@extends('admin.admin_layouts.main')

@section('title','Leaving Certificate')

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
    <a href="{{ route('leaving.certificate.view') }}" style="background-color:#27ae60;color:white;font-weight:bold;" type="submit" class="btn btn-sm" id="butsave" value="Submit">Generate Certificate</a>
    <!-- </form> -->
</div>


<div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card p-0">
                <h6 class="card-title card-padding pb-0">Leaving Certificate List</h6>
                <div class="table-responsive p-4">
                    <table class="table table-striped table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th scope="row">Student Name</th>
                                <th scope="row">Leaving Date</th>
                                <th scope="row">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($leaving as $b)
                            <tr>
                                <td>{{ $b->name }}</td>
                                <td>{{ $b->leave_date }}</td>
                                <td>
                                <a href="{{ route('view.leaving', $b->id) }}" type="button" class="text-dark" title="view"><i class="fa fa-eye"></i></a>
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