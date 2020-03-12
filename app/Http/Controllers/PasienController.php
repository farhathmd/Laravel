<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PasienController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pasien
    	$pasien = DB::table('pasien')->paginate(10);

    	// mengirim data pasien ke view index
    	return view('indexpa',['pasien' => $pasien]);

	}
	// method untuk menampilkan view form tambah pasien
	public function tambah()
	{
		// memanggil view tambah
		return view('tambahpa');
	}
	// method untuk insert data ke table pasien
	public function store(Request $request)
	{
		// insert data ke table pasien
		DB::table('pasien')->insert([
            'NAMA' => $request->nama,
            'JENIS_KELAMIN' => $request->jenis_kelamin,
            'UMUR' => $request->umur,
            'ALAMAT' => $request->alamat,
            'KOTA' => $request->kota,
            'KODE_POS' => $request->kode_pos,
            'TELP' => $request->telp,
            'GOL_DARAH' => $request->gol_darah,
			'BERAT_BADAN' => $request->berat_badan
	]);
		// alihkan halaman ke halaman pasien
		return redirect('/pasien');
		}
	public function edit($id)
	{
		// mengambil data pasien berdasarkan id yang dipilih
		$pasien = DB::table('pasien')->where('ID_PASIEN',$id)->get();
		// passing data pasien yang didapat ke view editpa.blade.php
		return view('editpa',['pasien' => $pasien]);
	}
	// update data pasien
	public function update(Request $request)
	{
		// update data pasien
		DB::table('pasien')->where('ID_PASIEN',$request->id)->update([
			'NAMA' => $request->nama,
            'JENIS_KELAMIN' => $request->jenis_kelamin,
            'UMUR' => $request->umur,
            'ALAMAT' => $request->alamat,
            'KOTA' => $request->kota,
            'KODE_POS' => $request->kode_pos,
            'TELP' => $request->telp,
            'GOL_DARAH' => $request->gol_darah,
			'BERAT_BADAN' => $request->berat_badan
		]);
		// alihkan halaman ke halaman pasien
		return redirect('/pasien');
	}
	// method untuk hapus data pasien
	public function hapus($id)
	{
		// menghapus data pasien berdasarkan id yang dipilih
		DB::table('pasien')->where('ID_PASIEN',$id)->delete();

		// alihkan halaman ke halaman pasien
		return redirect('/pasien');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pasien = DB::table('pasien')
		->where('NAMA','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexpa',['pasien' => $pasien]);

	}
}
