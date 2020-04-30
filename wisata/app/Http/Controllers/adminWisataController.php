<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;

class adminWisataController extends Controller
{
    //
    public function index(){
        return view('content.home');
    }

    public function dataWisata(){
        $wisata = Wisata::all();
        return view('content.dataWisata', compact('wisata'));
    }
    
    public function addWisata(){
        return view('content.addWisata');
    }

    public function store(Request $request){

        $foto = $request->file('foto')->store('foto');

        $oke = Wisata::create([
            'nama_wisata' => $request->namawisata,
            'alamat'      => $request->alamat,
            'kategori'    => $request->kategori,
            'informasi'   => $request->informasi,
            'fasilitas'   => $request->fasilitas,
            'lat'         => $request->latittude,
            'long'        => $request->longitude,
            'wilayah'     => $request->wilayah,
            'foto'        => $foto,
            //'vidio'       => $filevideo
        ]);
        return redirect('/dataWisata');
    }

    public function petawisata(){
        return view('content.petawisata');
    }

    public function edit($id){
        $wisata = Wisata::find($id);
        return view('content.editwisata', compact('wisata'));
    }

    public function update(Request $request){
        $foto = $request->file('foto')->store('foto');
        Wisata::where('id',$request->id)
            ->update([
    		'nama_wisata' => $request->namawisata,
            'alamat'      => $request->alamat,
            'kategori'    => $request->kategori,
            'informasi'   => $request->informasi,
            'fasilitas'   => $request->fasilitas,
            'lat'         => $request->latittude,
            'long'        => $request->longitude,
            'wilayah'     => $request->wilayah,
            'foto'        => $foto
        ]);

    	return redirect('/dataWisata');
    }
    
    public function delete($id){
        $wisata = Wisata::find($id);
        $wisata->delete();
    
        return redirect('/dataWisata');
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
 
    		// mengambil data dari table pegawai sesuai pencarian data
        $wisata = Wisata::where('nama_wisata','like',"%".$search."%")->paginate();
 
    		// mengirim data pegawai ke view index
            return view('content.dataWisata', compact('wisata'));
 
	}

}
