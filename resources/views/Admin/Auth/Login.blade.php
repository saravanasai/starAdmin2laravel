@extends('Layout.Admin.guestLayout')

@section('tittle')
<title>Amsons || Admin Login</title>
@endsection

@section('content')
<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="row">
                <div class="container">
                    <img src="{{asset('website/images/logo.jpg')}}" width="95%" height="200" alt="logo">
                  </div>
              </div>
            <div class="row mt-3">
                <center>
                    <h3 class="fw-bold">Amsons Crockery</h3>
                </center>
            </div>
            @if($errors)
            <div class="container">
                <ul>
                     @foreach ($errors->all() as $error )
                          <li class="text-danger">{{$error}}</li>
                     @endforeach
                </ul>
            </div>
            @endif
            <form class="pt-3" method="POST" action="{{route('adminlogin')}}">
              @csrf
              <div class="form-group">
                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-warning font-weight-medium" >LOGIN</button>
              </div>
              <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input">
                    Remember Me
                  <i class="input-helper"></i></label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>



@endsection

@section('js')
<script type="text/javascript">
    $(function() {
        $("#preloaders").fadeOut(1000);
 });

</script>
@endsection
