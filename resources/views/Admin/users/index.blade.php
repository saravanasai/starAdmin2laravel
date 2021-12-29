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
            <table class="table py-2" id="userListdatatable">
                <thead>
                <tr class="">
                  <th>Sno</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Role</th>
                  {{-- <th>Action</th> --}}
                </tr>
                </thead>
                <tbody>
                  {{--  "ajax": "{{ route('api.customers.index') }}", --}}
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6">
                    {{-- {{$users->links()}} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script>
<script>
    $(document).ready( function () {

         console.log("ok");
        $('#userListdatatable').DataTable(
            {
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('api.customers.index') }}",
                "columns": [
                    { "data": "id" },
                    { "data": "name" },
                    { "data": "email" },
                    { "data": "phone_number" },
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
                dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'colvis'
        ]
            }
        );
    });
</script>
@endsection
