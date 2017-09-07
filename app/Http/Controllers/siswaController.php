<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class siswaController extends Controller
{
    //
    public function percobaan()
    {
    	$y =siswa:: all();
    	return view('latihan.siswa', compact('y'));
    }
    public function show($siswa)
    {
    	$siswa = siswa::find($siswa);
    	return view('latihan.siswa', compact('siswa'));
    }
}
