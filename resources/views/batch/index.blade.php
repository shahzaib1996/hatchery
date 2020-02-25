@extends('layouts.admin.app')

@push('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<style>

</style>

@endpush

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Staff Members</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
            </ol>
            <a href="{{route('staff.create')}}" class="btn btn-diamond float-sm-right"> <i class="fa fa-plus"></i> Add New</a>
          </div><!-- /.col -->
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    	<div class="container-fluid">

        <div class="row">
        <div class="col-12">
          

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Staff Members</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body f-segoe ">
              <table id="usersTable" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th style="width: 1%;"> ID# </th>
                  <th> Name </th>
                  <th> Mobile </th>
                  <th> CNIC</th>
                  <th> Designation </th>
                  <th> Address </th>
                  <th> Status</th>
                  <th class="text-center"> Action </th>
                </tr>
                </thead>
                <tbody>
                  @if(count($staffs)!=0)
                  @foreach( $staffs as $staff )
                  <tr>
                    <td> {{ $staff->id }} </td>
                    <td style="text-transform: capitalize;"> {{ $staff->name }} </td>
                    <td> {{ $staff->mobile }} </td>
                    <td> {{ $staff->cnic }} </td>
                    <td> {{ $staff->designation }} </td>
                    <td> {{ $staff->address }} </td>
                    <td>
                        @if( $staff->is_active == 1 )
                          <span class="badge badge-pill badge-success">Active</span>
                        @else
                          <span class="badge badge-pill badge-danger">Inactive</span>
                        @endif
                    </td>
                    <td class="text-center"> <a href="{{ route('staff.edit',['id'=>$staff->id]) }}" class="btn btn-info btn-xs"> <i class="fas fa-address-card"></i> Profile </a> </td>
                  </tr>
                  @endforeach
                  @else
                    <tr><td colspan="8" class="text-center">No Data Found.</td></tr>
                  @endif
                  
                </tbody>
<!--                 <tfoot>
                <tr>
                  <th> ID# </th>
                  <th> Name </th>
                  <th> Email </th>
                  <th> Username</th>
                  <th> Business Name </th>
                  <th> Mobile No </th>
                  <th> Status</th>
                  <th> Action </th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
      </div>
    </section>

</div>


@endsection


@push('scripts')
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('plugins/sweetalert2/sweetalert2.min.css')}}">
<script>
  $(document).ready(function(){
    
    @if(session()->has('message'))
      Swal.fire({
        title: '{{session("title")}}',
        text: '{{session("message")}}',
        type: '{{session("type")}}',
      })
    @endif

  })
</script>

@endpush