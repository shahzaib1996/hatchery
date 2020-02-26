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

              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Total Staff Members</span>
                    <span class="info-box-number"> 5 </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
                
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Total Batches</span>
                    <span class="info-box-number"> 5 </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              
            
            </div>

          </div> <!-- main col 6 -->
          
        
          <div class="col-md-12">

            <div class="row mb-2">

              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-cube"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Batches in Incubator</span>
                    <span class="info-box-number"> 2 </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
                
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-home"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Batches in Brooder</span>
                    <span class="info-box-number"> 2 </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-blue elevation-1"><i class="fas fa-box"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Batches in Cage</span>
                    <span class="info-box-number"> 2 </span>
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
                    <span class="info-box-number"> 1 </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              

            
            </div>

          </div> <!-- main col 12 -->

          <div class="col-md-6">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Reminder</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">

                  
                  <li class="item">
                    <div class="product-info m-l-10">
                      <span class="product-description">
                        This is reminder
                      </span>
                      <span> 20-20-2020 </span>
                    </div>
                  </li>

                  
                  
                </ul>
              </div>
              <!-- /.card-body -->
                <!-- <div class="card-footer text-center">
                  <a href=" " class="uppercase a-c-dm">View All Activities</a>
                </div> -->
              <!-- /.card-footer -->
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