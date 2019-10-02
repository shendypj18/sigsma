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

Route::get('/', function () 
{
    return view('user.homepage');
}
);



Auth::routes();
// Route::get('/register', 'Auth\RegisterController@showregisterForm')->name('auth.register');
// Route::post('/registere', 'Auth\RegisterController@create')->name('auth.register.submit');
Route::get('/home', 'HomeController@index')->name('user.homepage');
Route::get('/sekolah','HomeController@sekolah')->name('user.datasekolah');
Route::get('/persebaran','HomeController@peta')->name('user.petasebaransekolah');
Route::get('/rutejalan/{latitude}/{longitude}','HomeController@lihat')->name('user.rutejalan');
Route::get('/rekomendasi','HomeController@rekomendasi')->name('user.rekomendasisekolah');
Route::get('/hasil','HomeController@hasil')->name('user.hasilrekomendasi');
Route::get('/perhitungan','HomeController@perhitungan')->name('user.perhitungan');
Route::get('/editprofil/{edituser}','HomeController@editprofil')->name('user.editprofil');
Route::put('/editprofil/{edituser}/update','HomeController@editprofilsubmit')->name('user.editprofil.submit');

Route::prefix('admin')->group(function()
{
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/datasekolah', 'AdminController@dataSekolah')->name('admin.datasekolah');
    Route::get('/tambahSekolah', 'AdminController@tambahSekolah')->name('admin.tambahsekolah');
    Route::post('/tambahSekolahSubmit', 'AdminController@tambahSekolahSubmit')->name('admin.tambahsekolah.submit');
    Route::get('/edit/sekolah/{id}', 'AdminController@editSekolah')->name('admin.edit.sekolah');
    Route::put('/edit/sekolah/{id}', 'AdminController@editSekolahSubmit')->name('admin.edit.sekolah.submit');
    Route::delete('/delete/{id}', 'AdminController@deleteSekolah')->name('admin.delete.sekolah');
    Route::get('/data/tahunan', 'AdminController@dataTahunan')->name('admin.dataTahunan');
    Route::get('/tambah/data/tahunan', 'AdminController@tambahTahunan')->name('admin.tambah.data.tahunan');
    Route::post('/tambah/data/tahunan', 'AdminController@tambahTahunanSubmit')->name('admin.tambah.data.tahunan.submit');
    Route::delete('/delete/data/tahunan/{id}', 'AdminController@deleteTahunan')->name('admin.delete.tahunan');
    Route::get('/edit/tahunan/{id}', 'AdminController@editTahunan')->name('admin.edit.tahunan');
    Route::put('/edit/tahunan/{id}', 'AdminController@editTahunanSubmit')->name('admin.edit.tahunan.submit');
    Route::get('/kriteria', 'AdminController@kriteria')->name('admin.kriteria');
    Route::get('/tambah/kriteria', 'AdminController@tambahKriteria')->name('admin.tambah.kriteria');
    Route::post('/tambah/kriteria', 'AdminController@submitKriteria')->name('admin.submit.kriteria');
    Route::delete('/kriteria/delete/{id}', 'AdminController@deleteKriteria')->name('admin.delete.kriteria');
    Route::get('/edit/kriteria/{id}', 'AdminController@editKriteria')->name('admin.edit.kriteria');
    Route::put('/edit/kriteria/{id}', 'AdminController@editKriteriaSubmit')->name('admin.edit.kriteria.submit');
    Route::get('/subkriteria','AdminController@subkriteria')->name('admin.subkriteria');
    Route::get('/tambah/subkriteria', 'AdminController@tambahsubkriteria')->name('admin.tambahsubkriteria');
    Route::post('/tambah/subkriteria', 'AdminController@submitSubkriteria')->name('admin.subkriteria.submit');
    Route::get('/edit/subkriteria/{id}','AdminController@editsubkriteria')->name('admin.editsubkriteria');
    Route::put('/edit/subkriteria/{id}','AdminController@submiteditsubkriteria')->name('admin.submitsubkriteriaedit');
    Route::delete('/delete/sekolah/{id}', 'AdminController@deletesubkriteria')->name('admin.delete.subkriteria');
    Route::get('/data_pendaftar','AdminController@data_user')->name('admin.datapendaftar');




});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
