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

Route::get('/', 'ListingController@home');


Route::prefix('admin')->group(function() {
    Auth::routes();
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('statistik', 'StatistikController@index')->name('statistik');
    Route::resource('kategori', 'KategoriController');
    Route::resource('user', 'UserController');
    Route::resource('artikel', 'ArtikelController');
    Route::get('ubah-password', 'ChangePasswordController@index');
    Route::post('ubah-password', 'ChangePasswordController@update')->name('password.update');
    Route::resource('mahasiswa', 'MahasiswaController');

    Route::middleware('konselor')->group(function(){
        Route::get('konseling', 'KonselingController@index');
        Route::get('konseling/response/{id}', 'KonselingController@response')->name('konseling.show');
        Route::get('konseling/response/{konseling_id}/form', 'ResponController@create')->name('konseling.respon_form');
        Route::post('konseling/response/store', 'ResponController@store')->name('respon.store');
    });
});

Route::get('login', 'MahasiswaLoginController@showLoginForm')->name('mahasiswa.loginform');
Route::get('register', 'MahasiswaRegisterController@showRegisterForm')->name('mahasiswa.registerform');
Route::post('login', 'MahasiswaLoginController@login')->name('mahasiswa.login');
Route::post('register', 'MahasiswaRegisterController@register')->name('mahasiswa.register');
Route::post('logout', 'MahasiswaLoginController@logout')->name('mahasiswa.logout');

Route::get('read/{id}', 'ListingController@read')->name('artikel.read');

Route::get('konseling/detail/{konseling_id}', 'KonselingController@response')->name('konseling.detail');

Route::get('listing/konseling/', 'ListingController@konseling');
Route::get('listing/konseling/{kategori_id}', 'ListingController@konseling');

Route::get('listing/artikel/', 'ListingController@artikel');
Route::get('listing/artikel/{kategori_id}', 'ListingController@artikel');

Route::get('listing/about_us/', 'ListingController@aboutUs');

/** Batas route PHQ**/
    Route::get('listing/phq', 'ListingController@phq');
    Route::get('listing/gad', 'ListingController@gad');
/** Batas route PHQ**/

Route::middleware('auth.mahasiswa:mahasiswa')->group(function(){
    Route::resource('komentar', 'KomentarController');
    Route::get('profile', 'ListingController@profile');
    Route::get('ganti-password', 'ChangePasswordController@index');
    Route::post('ganti-password', 'ChangePasswordController@update')->name('password.update.mahasiswa');
    Route::get('konseling/form', 'KonselingController@create')->name('konseling.create');
    Route::post('konseling/form', 'KonselingController@store')->name('konseling.store');
    Route::post('konseling/phq', 'KonselingController@phqstore')->name('konseling.phq.store');
    Route::post('konseling/gad', 'KonselingController@gadstore')->name('konseling.gad.store');

    Route::get('konseling/{konseling_id}/form-respon', 'ResponController@create')->name('konseling.respon_form_mahasiswa');
    Route::post('konseling/form-respon', 'ResponController@store')->name('respon.store_respon_mahasiswa');
    Route::get('daftar-konseling', 'ListingController@konselingSaya');
});
