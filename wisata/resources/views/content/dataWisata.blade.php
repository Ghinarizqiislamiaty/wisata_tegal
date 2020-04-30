@extends('admin.adminTemplate')
@section('main') 
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <h5 class="card-title">Wisata</h5>
            </div> 
            <div class="col-sm-3 text-right">
                <a href="{{url('/addWisata')}}" class="btn btn-outline-primary btn-sm"><i class='fas fa-plus'></i> Tambah</a>
            </div>     
        </div>
        <div class="row row-cols-1 row-cols-md-3">
            @foreach($wisata as $wisata)
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="http://localhost/wisata/storage/app/public/{{$wisata->foto}}" class="card-img-top" alt="{{$wisata->nama_wisata}}" style="height:200px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h6 class="card-title">{{$wisata->nama_wisata}}</h6>
                            </div> 
                            <div class="col-sm-3 text-right">
                                <a href="{{url('/edit')}}/{{$wisata->id}}"><i class='fas fa-pencil-alt' style="color:#1E90FF"></i></a> | 
                                <a href="{{url('/delete')}}/{{$wisata->id}}"><i class='fas fa-trash' style="color:#ff0000"></i></a>
                            </div>     
                        </div>
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th>Alamat</th>
                                <td>: {{$wisata->alamat}}
                            </tr>
                            <tr>
                                <th>Fasilitas</th>
                                <td>: {{$wisata->fasilitas}}</td>
                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td>: {{$wisata->kategori}}</td>
                            </tr>
                            <tr>
                                <th>Informasi</th>
                                <td>: {{$wisata->informasi}}</td>
                            </tr>
                            <tr>
                                <th> Vidio</th>
                                <td>
                                    : <a href="https://www.youtube.com/results?search_query={{$wisata->nama_wisata}}+{{$wisata->wilayah}}" class="btn btn-outline-info btn-sm">
                                        <i class='fas fas fa-video'></i>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop