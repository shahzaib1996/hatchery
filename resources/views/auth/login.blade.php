<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> {{ config('app.name') }} | Login </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css"> -->
  <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <!-- <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
  <link href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" rel="stylesheet">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="../../dist/css/adminlte.min.css"> -->
  <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Custom Style Sheet -->
  <link href="{{ asset('css/custom_style.css') }}" rel="stylesheet">
</head>
<body class="hold-transition login-page" >

<div style="position: absolute;
    background: white;
    height: 100vh;
    overflow: hidden;
    width: 100%;
    z-index: -1;
    ">
  <img src="{{asset('new/simple_bg.jpg')}}" style="width: 100%;">
</div>

<div class="login-box " style="width: 500px;margin-top: -100px;">
  <div class="login-logo">
    <a> <b>HATCHERY</b> MANAGEMENT SYSTEM </a>
  </div>
  <!-- /.login-logo -->
  
  <div class="card custom-box-shadow b-r-10 o-f-h f-segoe">
    <div class="card-body login-card-body ">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <label class="w-100-p m-b-0">{{ __('Username') }} <span class="reg-form-err-span"> @error('email') {{ $message }} @enderror </span></label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email or username" required >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <label class="w-100-p m-b-0">{{ __('Password') }} <span class="reg-form-err-span"> @error('password') {{ $message }} @enderror </span></label>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password..." required >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        

        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} >
              <label for="remember">
                {{ __('Remember Me') }}
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12 m-t-10">
            <button type="submit" class="btn btn-diamond btn-block btn-flat">{{ __('Login') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="#" class="a-c-dm">I forgot my password</a>
      </p>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<!-- <script src="../../plugins/jquery/jquery.min.js"></script> -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<!-- <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<!-- <script src="../../dist/js/adminlte.min.js"></script> -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
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

</body>
</html>
