<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\suport\Facedes\DS;
use App\siswa;

class SiswaController extends Controller
{
    function index()
    {
    	return view ('add-siswa');
    }

    public function savesiswa(Request $request)
    {
    	$siswa = new siswa();
    	$siswa->nama_siswa 	= $request->input('nama_siswa');
    	$siswa->tgl_lahir 	= $request->input('tgl_lahir');
    	$siswa->jk 			= $request->input('jk');
    	$siswa->jurusan 	= $request->input('jurusan');
    	$siswa->save();
    	return redirect('/add-siswa')->with('alert','Data berhasil di simpan');
    }
}
