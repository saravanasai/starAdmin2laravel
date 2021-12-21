@extends('Layout.Admin.MasterLayout')

@section('tittle')
<title>Amsons || Dashboard</title>
@endsection

@section('content')
<div class="row">
    <div class="col-md-4">
        <x-widget.info-card bg="primary" />
    </div>
    <div class="col-md-4">
        <x-widget.info-card bg="info"/>
    </div>
    <div class="col-md-4">
        <x-widget.info-card bg="warning"/>
    </div>

</div>




{{-- @include('Layout.example.sample') --}}
@endsection
