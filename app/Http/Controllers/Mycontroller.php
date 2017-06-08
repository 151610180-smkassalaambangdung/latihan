<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    //
    public function percobaan()
    {
    	 $a = "ananda";
    	 return "Nama saya adalah ".$a;
    }

    //passing data show view
    public function percobaan2()
    {
    	return view('about');
    }

    //passing data variable to view
    public function percobaan3()
    {
    	$a = "ananda ayu";
    	return view('latihan.saya', compact('a')); 
    }
    //passing data basic
    public function percobaan4()
    {
    	$a = "Ananda ayu";
    	$b = "XII RPL 2";
    	$c = "SMK Assalaam";
    	return view('latihan.biodat', compact('a','b','c'));
    }
    public function percobaan5()
    {
    	$a = 1;
    	$b = 2;
    	$c = 3;
    	return view('latihan.seleksi', compact('a','b','c'));
    }
    public function percobaan6()
    {
    	$buah = ['mangga','jeruk','apel','anggur'];
    	return view('latihan.buah',compact('buah'));
    }
    public function percobaan7()
    {
    	$buah = ['semangka','melon','mangga','anggur','apel'];
    	
    	$makhlukhidup = ['kambing','buaya','semut','gajah','sapi'];
        
        $komputer = ['keyboard','ram','monitor','prossesor','vga'];
        return view('latihan.tugas', compact('buah','makhlukhidup','komputer'));
    }

}
