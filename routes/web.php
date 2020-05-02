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

Route::get('/login', function(){
    if(\Auth::user()){
        return redirect('admin/lihatpesanan');
    }
    return view('admin.login');
})->name('login');
Route::get('/', 'IndexController@index');

Route::get('/detail/{gunung}', 'IndexController@detail');
Route::get('/detailperlengkapan/{perlengkapan}', 'IndexController@detailPerlengkapan');
Route::view('/tentang', 'pages.tentang');

Route::get('/destinasi/{id}','IndexController@destinasi');
Route::post('/destinasi/search', 'IndexController@search');
Route::post('/pesanan/add', 'PesananController@store');
Route::post("/ulasan/add", 'UlasanController@store');

Route::post('/auth/login', 'LoginController@login');

Route::middleware('isLogin')->group(function(){    
    Route::get('/admin/lihatpesanan', 'AdminController@lihatPesanan');
    Route::get('/admin/addgunung', 'AdminController@addGunung');
    Route::get('/admin/addperlengkapan', 'AdminController@addPerlengkapan');
    Route::view('/admin/addwilayah', 'admin.addwilayah');
    Route::post('/admin/storeperlengkapan', 'AdminController@storePerlengkapan');
    Route::post('/admin/storegunung', 'AdminController@storeGunung');
    Route::post('/admin/storewilayah', 'AdminController@storeWilayah');
});