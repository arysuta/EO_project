<?php

use App\Detgambar;

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

Route::get('/', 'PageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custom', ['as' => 'login', 'uses'=>'LoginController@login', 
    'as' => 'login.custom'
]); 

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', function(){
        $data = Detgambar::all();
        return view('home' , compact('data'));
    })->name('home');
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});

Route::get('user.birthday_detail', function () {
    return view('user.birthday_detail');
});
Route::get('user.wedding', function () {
    return view('user.wedding');
});
Route::get('user.wedding_detail', function () {
    return view('user.wedding_detail');
});
Route::get('user.graduation', function () {
    return view('user.graduation');
});
Route::get('user.graduation_detail', function () {
    return view('user.graduation_detail');
});
Route::get('about', function () {
    return view('about');
});
Route::get('user.galeri', function () {
    return view('user.galeri');
});
Route::get('user.myaccount', function () {
    return view('user.myaccount');
});



Route::resource('admin','AdminController');
Route::resource('user','UserController');
Route::get('/show','AdminController@show');

Route::resource('/Promo','PromoController');
Route::resource('/Detgambar','DetgambarController');

Route::resource('birthday','BirthdayController');
Route::resource('wedding','WeddingController');
Route::resource('graduation','GraduationController');


Route::get('transaksi/{id}','TransaksiController@show');
Route::get('transaksi/{id}','TransaksiController@show');
Route::post('order/{id}','TransaksiController@store');

Route::get('search/autocomplete', 'SearchController@autocomplete');
Route::get('myaccount/{id}','UserController@tampil');
Route::get('OrderList/{id}','TransaksiController@tampil');
Route::get('tampil','DetgambarController@tampil');
Route::get('listtransaksi','AdminController@showtrans');

Route::post('canceltrans/{id}', 'TransaksiController@cancel');
Route::put('updatetrans/{id}', 'TransaksiController@update');
Route::post('accepttrans/{id}', 'TransaksiController@accept');
Route::post('declinetrans/{id}', 'TransaksiController@decline');

Route::get('gambarbukti/{id}','DetgambarController@bukti');
Route::get('refresh_captcha', 'LoginController@refreshCaptcha')->name('refresh_captcha');