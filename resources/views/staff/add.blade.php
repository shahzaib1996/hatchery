@extends('layouts.admin.app')

@push('css')
<!-- Select2 -->
<!-- <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}"> -->

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<style>
  
  label {
    font-weight: 400 !important;
  }


</style>

@endpush

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add New Staff Member</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="a-c-dm">Home</a></li>
              <li class="breadcrumb-item active">Add New Staff Member</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <form action="{{route('staff.store')}}" method="POST" id="diamondForm" enctype="multipart/form-data">
      @csrf

      <div class="container-fluid">
        <div class="row f-roboto">


          <!-- ./col -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header dm-bg-linear t-c-w">
                <h3 class="card-title">New Member Details</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus t-c-w"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
                <div class="card-body">

                  <div class="row">

                    
                    <div class="col-md-4">
                      <div class="form-group" >
                        <label>Name<span class="reg-form-err-span"> &nbsp; @error('name') {{ $message }} @enderror  </span> </label>
                        <input type="text" class="form-control" name="name" id="name" required>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group" >
                        <label>Mobile<span class="reg-form-err-span"> &nbsp; @error('mobile') {{ $message }} @enderror  </span> </label>
                        <input type="text" class="form-control" name="mobile" id="mobile" required>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group" >
                        <label>CNIC<span class="reg-form-err-span"> &nbsp; @error('cnic') {{ $message }} @enderror  </span> </label>
                        <input type="text" class="form-control" name="cnic" id="cnic" required>
                      </div>
                    </div>



                  </div><!-- Row End -->

                  <hr>

                  <div class="row">
                    
                    <div class="col-md-4">
                      <div class="form-group" >
                        <label>Designation<span class="reg-form-err-span"> &nbsp; @error('designation') {{ $message }} @enderror  </span> </label>
                        <input type="text" class="form-control" name="designation" id="designation" required>
                      </div>
                    </div>

                    

                    <div class="col-md-4">
                      <div class="form-group" >
                        <label>Address<span class="reg-form-err-span"> &nbsp; @error('address') {{ $message }} @enderror  </span> </label>
                        <input type="text" class="form-control" name="address" id="address" required>
                      </div>
                    </div>


                  </div><!-- Row End -->

                  <hr>

                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Details <span class="reg-form-err-span"> &nbsp; @error('details') {{ $message }} @enderror </span> </label>
                        <textarea type="text" class="form-control" name="details" id="details" rows="10"></textarea>
                      </div>
                    </div>

               
                  </div> <!-- Row End -->

                  <hr>

                  
                                    
                </div>
                <!-- /.card-body -->

                <div class="overlay dark">
                  <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                </div>

            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->


        </div>

        <div class="row p-b-20">
          <div class="col-12 text-center">
            <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
            <input type="submit" value="Create" class="btn btn-diamond btn-lg f-roboto w-200">
          </div>
        </div>

      </div>

    </form>

    </section>

</div>


@endsection


@push('scripts')
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('plugins/sweetalert2/sweetalert2.min.css')}}">
<script>
  $(document).ready(function(){
      //Initialize Select2 Elements
    // $('.select2').select2()
    @if(session()->has('message'))
      Swal.fire({
        title: '{{session("title")}}',
        text: '{{session("message")}}',
        type: '{{session("type")}}',
      })
    @endif
    $('.overlay').remove();
  })
</script>

@endpush