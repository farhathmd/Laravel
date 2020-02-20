<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DokterController extends Controller
{
    public function index()
    {
    	// mengambil data dari table dokter
    	$dokter = DB::table('dokter')->get();

    	// mengirim data dokter ke view index
    	return view('index',['dokter' => $dokter]);

	}
	// method untuk menampilkan view form tambah dokter
	public function tambah()
	{
		// memanggil view tambah
		return view('tambah');
	}
	// method untuk insert data ke table dokter
	public function store(Request $request)
	{
		// insert data ke table dokter
		DB::table('dokter')->insert([
			'NAMA' => $request->nama,
			'JENIS_KELAMIN' => $request->jenis_kelamin,
			'JABATAN' => $request->jabatan,
			'TELP' => $request->telp,
			'ALAMAT' => $request->alamat
	]);
		// alihkan halaman ke halaman dokter
		return redirect('/dokter');
		}
	public function edit($id)
	{
		// mengambil data dokter berdasarkan id yang dipilih
		$dokter = DB::table('dokter')->where('ID_DOKTER',$id)->get();
		// passing data dokter yang didapat ke view edit.blade.php
		return view('edit',['dokter' => $dokter]);
	}
	// update data dokter
	public function update(Request $request)
	{
		// update data dokter
		DB::table('dokter')->where('ID_DOKTER',$request->id)->update([
			'NAMA' => $request->nama,
			'JENIS_KELAMIN' => $request->jenis_kelamin,
			'JABATAN' => $request->jabatan,
			'TELP' => $request->telp,
			'ALAMAT' => $request->alamat
		]);
		// alihkan halaman ke halaman dokter
		return redirect('/dokter');
	}
	// method untuk hapus data dokter
	public function hapus($id)
	{
		// menghapus data dokter berdasarkan id yang dipilih
		DB::table('dokter')->where('ID_DOKTER',$id)->delete();
		
		// alihkan halaman ke halaman dokter
		return redirect('/dokter');
}
}