@extends('admin.adminTemplate')

@section('main') 
    <div class="container-fluid">
        <h5>Tambah Data Wisata</h5>
        <hr>
        <form action="{{url('/addwisata/store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="namawisata" class="col-sm-4 col-form-label">Nama Wisata</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="namawisata" name="namawisata" placeholder="Nama Wisata">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-4 col-form-label">Kategori</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="kategori" name="kategori">
                                <option>* pilih kategori wisata *</option>
                                <option value="Alam">Alam</option>
                                <option value="Kuliner">Kuliner</option>
                                <option value="Spot Foto">Spot Foto</option>
                                <option value="Religi">Religi</option>
                                <option value="Edukasi">Edukasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="informasi" class="col-sm-4 col-form-label">Informasi</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="informasi" name="informasi" placeholder="Informasi/keterang/dsb" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="fasilitas" class="col-sm-4 col-form-label">Fasilitas</label>
                        <div class="col-sm-8">
                            <select class="form-control selectpicker" id="fasilitas" name="fasilitas" multiple>
                                <option value="Toilet">Toilet</option>
                                <option value="Kamar Bilas">Kamar Bilas</option>
                                <option value="Parkir">Parkir</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="latittude" class="col-sm-4 col-form-label">Latittude</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="latittude" name="latittude" placeholder="Latittude">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="longitude" class="col-sm-4 col-form-label">Longitude</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="latittude" class="col-sm-4 col-form-label">Wilayah</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="wilayah" name="wilayah">
                                <option>* Pilih Wilayah *</option>
                                <option value="Kabupaten Tegal">{{ Auth::user()->name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-4 col-form-label">Foto</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control-file" id="foto" name="foto" data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." multiple >
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-outline-success btn-sm"><i class='fas fa-save'></i> Submit</button>
        </form>
    </div>
</div>
@stop