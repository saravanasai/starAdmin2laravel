@extends('Layout.frontend.MasterLayout')
@section('tittle')
<title>Amsons || Login</title>
<link rel="stylesheet" type="text/css" href="{{asset('Login/style.css')}}" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
@endsection
@section('meta')

@endsection
@section('hero')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
        <div class="col-lg-6 col-md-6 form-container">
            <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                <div class="logo mb-3">
                    <img src="{{asset('website/images/logo.jpg')}}" width="250px">
                </div>
                <div class="heading mb-4">
                    <p class="text-dark h3">Login</p>
                </div>
                <div class="conatiner">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                    @endif
                </div>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="form-input">
                        <span><i class="fa fa-envelope"></i></span>
                        <input type="email"  name="email" placeholder="Email Address" value="{{old('email')}}" required>
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Password" >
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 d-flex">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" {{old('remember')=="on" ? 'checked':''}} class="custom-control-input" id="cb1">
                                <label class="custom-control-label text-white" for="cb1">Remember me</label>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#" class="forget-link">Forget Password</a>
                        </div>
                    </div>
                    <div class="text-left mb-3">
                        <button type="submit" class="btn">Login</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection