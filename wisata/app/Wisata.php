<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wisata extends Model
{
    //	
    use SoftDeletes;
 
    protected $table = "wisata";
    protected $fillable = ['nama_wisata', 'alamat', 'kategori', 'informasi', 'fasilitas', 'lat', 'long', 'wilayah', 'foto', 'vidio', 'deleted_at'];
    protected $dates = ['deleted_at'];
}
