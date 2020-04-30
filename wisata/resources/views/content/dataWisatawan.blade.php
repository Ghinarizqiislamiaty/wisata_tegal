@extends('admin.adminTemplate')
@section('main') 
    <div class="container-fluid">
        <h5>Data Wisatawan</h5>
        <hr>
        <table id="myTable" class="display table-bordered">
            <thead>
                <tr>
                    <th>Nama Wisatawan</th>
                    <th>Email</th>
                    <th>pilihan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $usr)
                    <tr>
                        <td>{{$usr->name}}</td>
                        <td>{{$usr->email}}</td>
                        <td class="text-center">
                            <a href="{{url('/delete')}}" class="btn btn-outline-danger btn-sm"><i class='fas fa-trash'></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop