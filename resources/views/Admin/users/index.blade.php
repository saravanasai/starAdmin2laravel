@extends('Layout.Admin.MasterLayout')

@section('tittle')
<title>Amsons || Users</title>
@endsection

@section('content')
<div class="card">
    <div class="card-tittle p-3">
         <h4 class="p-1"> All Users</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <table class="table py-2">
                <thead>
                <tr class="">
                  <th>#</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                   @foreach ($users as $user)
                     <td>{{$loop->iteration}}</td>
                     <td>{{$user->name}}</td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->phone_number}}</td>
                     <td><span class="badge badge-pill badge-success">{{$user->castrole()}}</span></td>
                     <td><button class="btn btn-primary btn-sm" >View</button></td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6">
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
