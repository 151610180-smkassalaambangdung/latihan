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

//
Route::get('/test','Mycontroller@percobaan');
Route::get('/test2','Mycontroller@percobaan2');
Route::get('/test3','Mycontroller@percobaan3');
Route::get('/test4','Mycontroller@percobaan4');
Route::get('/test5','Mycontroller@percobaan5');
Route::get('/test6','Mycontroller@percobaan6');
Route::get('/test7','Mycontroller@percobaan7');
Route::get('/test8','Mycontroller@percobaan8');
Route::get('/parameter/{data?}/{data2?}','Mycontroller@param');
Route::get('/coba','siswaController@percobaan');
Route::get('/coba/{siswa}','siswaController@show');