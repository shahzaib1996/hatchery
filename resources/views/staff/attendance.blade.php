@extends('layouts.admin.app')

@push('css')
<!-- Select2 -->
<!-- <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}"> -->

<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<style>
  
  label {
    font-weight: 400 !important;
  }

  .cus-cb {
    height: 25px;width: 25px;
    border: 1px solid #D3CFC8;
  }

  .cus-cb-c {
    height: 25px;width: 25px;
    border: 1px solid #00897b;
    display: flex;
    justify-content: center;
    align-items: center;
    color:#fff;
    font-size: 10px;
    background: #00897b;
  }

  .cus-cb:hover {
    border: 1px solid #00897b;
  }

  .cus-cb-c {

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
            <h1 class="m-0 text-dark">Attendance Sheet</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="a-c-dm">Home</a></li>
              <li class="breadcrumb-item active">Mark Attendance</li>
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
                <h3 class="card-title">Today's Attandance Sheet - {{$today_date}} </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus t-c-w"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
                <div class="card-body">

                  <table id="usersTable" class="table table-bordered table-hover" >
                    <thead>
                    <tr>
                      <th style="width: 1%;"> ID# </th>
                      <th> Name </th>
                      <th> CNIC </th>
                      <th> Present </th>
                    </tr>
                    </thead>
                    <tbody>
                      @if(count($staffs)!=0)
                      @foreach( $staffs as $staff )
                      <tr>
                        <td> {{ $staff->id }} </td>
                        <td style="text-transform: capitalize;"> {{ $staff->name }} </td>
                        <td> {{ $staff->cnic }} </td>
                        
                        <td> 
                          @if( count($staff->attendance) !=0 )  
                            <div class="cus-cb-c" data-staff-id="{{$staff->id}}">
                              <i class="fa fa-check"></i>
                            </div>
                          @else
                            <div class="cus-cb" data-staff-id="{{$staff->id}}">

                            </div> 
                          @endif 
                        </td>
                      </tr>
                      @endforeach
                      @else
                        <tr><td colspan="8" class="text-center">No Member Found.</td></tr>
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

    $(document).on('click','.cus-cb',function(){
      let staff_id = $(this).data('staff-id');
      // $(this).addClass('cus-cb-c');
      // $(this).html('<i class="fa fa-check"></i>');
      // $(this).removeClass('cus-cb');
      let that = this
      $.ajax({
        url: '{{route("staff.mark.present")}}',
        method: 'POST',
        data: {
          "_token": "{{ csrf_token() }}",
          id:staff_id
        },
        success: function(result){  
          console.log(result);
          if( result['status'] == true ) {
            $(that).addClass('cus-cb-c');
            $(that).html('<i class="fa fa-check"></i>');
            $(that).removeClass('cus-cb');
            Swal.fire({
              title: 'Success!',
              text: result['message'],
              type: 'success',
            })
          } else {
            Swal.fire({
              title: 'Failed!',
              text: result['message'],
              type: 'error',
            })
          }

        }
      }) //ajax end


    })

    // $(document).on('click','.cus-cb-c',function(){
    //   let staff_id = $(this).data('staff-id');
    //   // $(this).addClass('cus-cb');
    //   // $(this).empty();
    //   // $(this).removeClass('cus-cb-c');

    //   $.ajax({
    //     url: '',
    //     method: 'POST',
    //     data: {
    //       "_token": "{{ csrf_token() }}",
    //       id:staff_id
    //     },
    //     success: function(result){  
    //       console.log(result);
    //       if( result['status'] == true ) {
    //         $(this).addClass('cus-cb');
    //         $(this).empty();
    //         $(this).removeClass('cus-cb-c');
    //       } else {
    //         Swal.fire({
    //           title: 'Failed to Mark, Please Try Again!',
    //           type: 'error',
    //         })
    //       }

    //     }
    //   }) //ajax end

    // })

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