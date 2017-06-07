<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('testmodel', function (){
	$q = App\post::all();
	$a = App\produk::all();
	$b = App\pengaturan::all();
	$c = App\pengguna::all();
	return $q."<br/br>".$a."<br/br>".$b."<br/br>".$c;
});


