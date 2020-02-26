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
            <h1 class="m-0 text-dark">Transfer Batch into Brooder</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="a-c-dm">Home</a></li>
              <li class="breadcrumb-item active">Transfer Batch into Brooder</li>
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
                <h3 class="card-title">Add Brooder Details</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus t-c-w"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
                <div class="card-body">

                  <label> Batch ID : 123123 </label>
                  <h3>Incubation Section</h3>
                  <ul>
                    <li><label> Incubation Start Date : 10-12-2020 </label> <br></li>
                    <li><label> Tray No : 10-12-2020 </label> <br></li>
                    <li><label> Stove Turning Date : 11-03-2020 </label> <br></li>
                    <li><label> Total Eggs : 123123 </label> <br></li>
                    <li><label> Batch ID : 123123 </label> <br></li>
                  </ul>

                  <h3>Brooder Section</h3>
                  
                  <div class="row">

                    <div class="col-md-4">
                      <div class="form-group" >
                        <label>Date of Birth<span class="reg-form-err-span"> &nbsp; @error('cnic') {{ $message }} @enderror  </span> </label>
                        <input type="date" class="form-control" name="cnic" id="cnic" required>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group" >
                        <label>Date<span class="reg-form-err-span"> &nbsp; @error('mobile') {{ $message }} @enderror  </span> </label>
                        <input type="date" class="form-control" name="mobile" id="mobile" required>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group" >
                        <label>Brooder Number<span class="reg-form-err-span"> &nbsp; @error('address') {{ $message }} @enderror  </span> </label>
                        <input type="text" class="form-control" name="address" id="address" required>
                      </div>
                    </div>


                  </div><!-- Row End -->

                  <hr>

                  <div class="row">
                    
                    <div class="col-md-4">
                      <div class="form-group" >
                        <label>Total Chicks<span class="reg-form-err-span"> &nbsp; @error('designation') {{ $message }} @enderror  </span> </label>
                        <input type="text" class="form-control" name="designation" id="designation" required>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group" >
                        <label>Mortality (Including Pipped Eggs) <span class="reg-form-err-span"> &nbsp; @error('designation') {{ $message }} @enderror  </span> </label>
                        <input type="text" class="form-control" name="designation" id="designation" required>
                      </div>
                    </div>

                  </div><!-- Row End -->

                  <hr>

                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label >Notes <span class="reg-form-err-span"> &nbsp; @error('details') {{ $message }} @enderror </span> </label>
                        <textarea type="text" class="form-control" name="details" id="details" rows="5"></textarea>
                      </div>
                    </div>

                  </div> <!-- Row End -->

                  <div class="row ">
                    <div class="col-12 text-center">
                      <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
                      <input type="submit" value="Submit" class="btn btn-diamond btn-lg f-roboto w-200">
                    </div>
                  </div>
                  
                                    
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