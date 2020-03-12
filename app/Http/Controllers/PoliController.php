<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoliController extends Controller
{
    public function index()
    {
    	// mengambil data dari table poli
    	$poli = DB::table('poli')->paginate(10);

    	// mengirim data poli ke view index
    	return view('indexpoli',['poli' => $poli]);

	}
	// method untuk menampilkan view form tambah poli
	public function tambah()
	{
		// memanggil view tambah
		return view('tambahpoli');
	}
	// method untuk insert data ke table poli
	public function store(Request $request)
	{
		// insert data ke table poli
		DB::table('poli')->insert([
            'NAMA_POLI' => $request->nama_poli
	]);
		// alihkan halaman ke halaman poli
		return redirect('/poli');
		}
	public function edit($id)
	{
		// mengambil data poli berdasarkan id yang dipilih
		$poli = DB::table('poli')->where('ID_POLI',$id)->get();
		// passing data poli yang didapat ke view editpoli.blade.php
		return view('editpoli',['poli' => $poli]);
	}
	// update data poli
	public function update(Request $request)
	{
		// update data poli
		DB::table('poli')->where('ID_POLI',$request->id)->update([
			'NAMA_POLI' => $request->nama_poli
		]);
		// alihkan halaman ke halaman poli
		return redirect('/poli');
	}
	// method untuk hapus data poli
	public function hapus($id)
	{
		// menghapus data poli berdasarkan id yang dipilih
		DB::table('poli')->where('ID_POLI',$id)->delete();

		// alihkan halaman ke halaman poli
		return redirect('/poli');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table poli sesuai pencarian data
		$poli = DB::table('poli')
		->where('NAMA_POLI','like',"%".$cari."%")
		->paginate();

    		// mengirim data poli ke view index
		return view('indexpoli',['poli' => $poli]);

	}
}
