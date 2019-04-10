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

Route::get('/show/{id}', function ($id) {
    echo "Nilai Parameter Adalah ".$id;
});

Route::get('/show/{id?}', function ($id=1) {
    echo "Nilai Parameter Adalah ".$id;
});

Route::get('/edit/{nama}', function ($nama) {
    echo "Nilai Parameter Adalah ".$nama;
})->where('nama','[A-Za-z]+');

Route::get('/index', function () {
    echo "<a href='".route('create')."'>Akses Route Dengan nama </a>";
});

Route::get('/create', function () {
    echo "Router Diakses menggunakan Nama ";
})->name('create');

Route::get('/produk','produkController@index');

Route::get('/produk/show', 'produkController@show'); 

Route::get('/halaman',function(){ 
$title = 'Euis Srimulyani'; 
$konten = 'Euis Srimulyani (17753025): part 2'; 
return view('konten.halaman',compact('title','konten')); 
}); 


Route::get('/pelanggan', 'pelangganController@index');

route::resource('produk','produkController');

