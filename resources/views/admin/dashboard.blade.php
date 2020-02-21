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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <br>

        <div class="row mb-2">
          <div class="col-md-12">

            <div class="row mb-2">

              <div class="col-md-12">
                
                <!-- Info boxes -->
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-box"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Total Batches</span>
                        <span class="info-box-number"> 0 </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check-circle"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Batches in Brooder</span>
                        <span class="info-box-number"> 0 </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check-circle"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Batches in Cage</span>
                        <span class="info-box-number"> 0 </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->

                  <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check-circle"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Batches Sold</span>
                        <span class="info-box-number"> 0 </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->

                </div>
                <!-- /.row -->
              </div>

              
            
            </div>

          </div> <!-- main col 6 -->
          
        


        </div> <!-- main row -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">


    	<div class="container-fluid">
      
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