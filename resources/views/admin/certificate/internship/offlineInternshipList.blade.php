@extends('admin.admin_layouts.main')

@section('title','Internship Certificate List')

@section('custom_styles')
    <style>
       .hidden{
           display:none;
       }
    </style>
@endsection

@section('content')
<div class="mdc-layout-grid">
  <div class="mdc-layout-grid__inner">
    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
      <div class="mdc-card p-0">
        <h6 class="card-title card-padding pb-0">Offline Internship Certificate List</h6>
        <div class="table-responsive p-4">
            <table class="table table-hoverable text-center" id="datatable" >
              <thead>
                <tr>
                  
                  <th class="text-center">ID</th>
                  <th class="text-center">STUDENT NAME</th>
                  <th class="text-center">SESSION</th>
                  <th class="text-center">DATE</th>
                  <th class="text-center">ACTION</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($data as $key => $dt)
                            <tr>
                                <td class="text-center">{{ ++$key }}</td>
                                <td class="text-center">{{ $dt->firstname }} &nbsp;{{ $dt->middlename }}&nbsp;{{ $dt->lastname }}</td>
                            <td class="text-center">{{$dt->sessonseason}}- {{$dt->sessionyear}}</td>
                            <td class="text-center">{{$dt->date}}</td>
                                <td class="text-center">
                                <a href="{{ route('internship.certificate',['id'=>$dt->offline_id]) }}" type="button" class="text-dark" title="view"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('internship.editOffline',['id'=>$dt->offline_id])}}" type="button" class="text-dark" title="edit"><i class="fa fa-edit"></i></a>
                                     <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" type="button" class="text-dark" title="delete"><i class="fa fa-trash"></i></a>
                                      <form action="{{ route('deleteOfflineintern',['id'=>$dt->id = $dt->offline_id]) }}" method="post"> 
                                        @method('DELETE')
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                     </form>
                                     {{-- <a href="" type="button" class="text-dark" title="print"><i class="fa fa-print"></i></a>
                                     <a href="javascript:__doPostBack('btnPrint','')" type="button"onclick="printContent('printdiv')" usesubmitbehaviour="False" class="mdc-button mdc-button--unelevated filled-button--info mdc-ripple-upgraded">Print</a> --}}
                    
                                    {{-- <a href="{{ route('adminReg.user.edit', ['id'=>$a->id]) }}" type="button" class="mdc-button mdc-button--unelevated filled-button--warning mdc-ripple-upgraded">Edit</a>
                                    --}}
                                </td>
                            </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
</form>
</div>


@endsection