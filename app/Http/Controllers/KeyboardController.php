<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeyboardController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table keyboard dengan get()
    	//$keyboard = DB::table('keyboard')->get();

        //mengambil data dari table keyboard dengan pagination
        $keyboard = DB::table('keyboard')->paginate(10);

    	// mengirim data keyboard ke view index
    	return view('index-keyboard',['keyboard' => $keyboard]);

    }
    	// method untuk menampilkan view form tambah keyboard
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah-keyboard');

	}

	// method untuk insert data ke table keyboard
	public function store(Request $request)
	{
		// insert data ke table keyboard
		DB::table('keyboard')->insert([
			'merkkeyboard' => $request->merk,
			'stockkeyboard' => $request->stock,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman keyboard
		return redirect('/keyboard');

	}

	// method untuk edit data keyboard
	public function edit($id)
	{
		// mengambil data keyboard berdasarkan id yang dipilih
		$keyboard = DB::table('keyboard')->where('kodekeyboard',$id)->get();
		// passing data keyboard yang didapat ke view edit-keyboard.blade.php
		return view('edit-keyboard',['keyboard' => $keyboard]);

	}

	// update data keyboard
	public function update(Request $request)
	{
		// update data keyboard
		DB::table('keyboard')->where('kodekeyboard',$request->id)->update([
			'merkkeyboard' => $request->merk,
			'stockkeyboard' => $request->stock,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman keyboard
		return redirect('/keyboard');
	}

	// method untuk hapus data keyboard
	public function hapus($id)
	{
		// menghapus data keyboard berdasarkan id yang dipilih
		DB::table('keyboard')->where('kodekeyboard',$id)->delete();

		// alihkan halaman ke halaman keyboard
		return redirect('/keyboard');
	}

    // method untuk mencari data keyboard
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table keyboard sesuai pencarian data
		$keyboard = DB::table('keyboard')
		->where('merkkeyboard','like',"%".$cari."%")
		->paginate();

    		// mengirim data keyboard ke view index
		return view('index-keyboard',['keyboard' => $keyboard]);

	}
}
