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

    public function param($data,$data2 = null)
    {
        $array = array('binatang' =>['kucing'=>['persia','anggora'],
                                    'hamster'=>['hamtaro','hamtari'],
                                    'kelinci'=>['anggora','persia']],
                        
                        'buah' => ['mangga'=>['harumanis','marijan'],
                                      'alpukat'=>['hijau','hitam'],
                                      'apel'=>['merah','hijau']],

                        'komputer' =>['asus'=>['456UR','456'],
                                       'dell'=>['alienware','inspiron'],
                                       'acer'=>['6930','7780']]]]
                                      );
        if ($data){
            $query = (array_keys($array[$data]));
        }
        if ($data2){
            $query = (($array[$data][$data2]));
        }
        return view('latihan.parameter',compact('query','data','data2'));

       }

}
