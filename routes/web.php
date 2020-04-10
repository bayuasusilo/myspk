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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/JenisProduk', 'JenisProdukController@index')->name('JenisProduk');

Route::POST('/InputJenisProduk', 'JenisProdukController@input')->name('InputJenisProduk');

Route::get('/EditJenisProduk/{id}', 'JenisProdukController@edit')->name('EditJenisProduk');

Route::POST('/UpdateJenisProduk', 'JenisProdukController@update')->name('UpdateJenisProduk');

Route::get('/DeleteJenisProduk/{id}', 'JenisProdukController@delete')->name('DeleteJenisProduk');



Route::get('/Supplier', 'SupplierController@index')->name('Supplier');

Route::POST('/InputSupplier', 'SupplierController@input')->name('InputSupplier');

Route::get('/EditSupplier/{id}', 'SupplierController@edit')->name('EditSupplier');

Route::POST('/UpdateSupplier', 'SupplierController@update')->name('UpdateSupplier');

Route::get('/DeleteSupplier/{id}', 'SupplierController@delete')->name('DeleteSupplier');


Route::get('/Admin', 'AdminController@index')->name('Admin');

Route::POST('/InputAdmin', 'AdminController@input')->name('InputAdmin');

Route::get('/EditAdmin/{id}', 'AdminController@edit')->name('EditAdmin');

Route::POST('/UpdateAdmin', 'AdminController@update')->name('UpdateAdmin');


Route::get('/bobot', 'BobotController@index')->name('Bobot');


Route::get('/Nilai', 'NilaiController@index')->name('Nilai');
Route::get('/EditNilai/{id}', 'NilaiController@edit')->name('EditNilai');
Route::POST('/UpdateNilai', 'NilaiController@update')->name('UpdateNilai');

Route::get('/Kriteria', 'KriteriaController@index')->name('Kriteria');
Route::POST('/InputKriteria', 'KriteriaController@input')->name('InputKriteria');
Route::get('/EditKriteria/{id}', 'KriteriaController@edit')->name('EditKriteria');
Route::POST('/UpdateKriteria', 'KriteriaController@update')->name('UpdateKriteria');
Route::get('/DeleteKriteria/{id}', 'KriteriaController@delete')->name('DeleteKriteria');

Route::POST('/InputBobot', 'BobotController@input')->name('InputBobot');
Route::get('/InputBobot', 'BobotController@breadcrumb')->name('InputBobotBreadcrumb');


Route::get('/NilaiKriteriaAlternatif', 'NilaiKriteriaAlternatifController@index')->name('NilaiKriteriaAlternatif');
Route::POST('/InputNilaiKriteriaAlternatif', 'NilaiKriteriaAlternatifController@input')->name('InputNilaiKriteriaAlternatif');
Route::get('/EditNilaiKriteriaAlternatif/{id}', 'NilaiKriteriaAlternatifController@edit')->name('EditNilaiKriteriaAlternatif');
Route::POST('/UpdateNilaiKriteriaAlternatif', 'NilaiKriteriaAlternatifController@update')->name('UpdateNilaiKriteriaAlternatif');
Route::get('/DeleteNilaiKriteriaAlternatif/{id}', 'NilaiKriteriaAlternatifController@Delete')->name('DeleteNilaiKriteriaAlternatif');


Route::get('/NilaiAlternatif', 'NilaiAlternatifController@index')->name('NilaiAlternatif');
Route::get('/NilaiAlternatif1', 'NilaiAlternatifController@index1')->name('NilaiAlternatif1');
Route::get('/InputNilaiAlternatif/{id}', 'NilaiAlternatifController@input')->name('InputNilaiAlternatif');
Route::POST('/Input2NilaiAlternatif', 'NilaiAlternatifController@input2')->name('Input2NilaiAlternatif');
Route::get('/EditNilaiAlternatif/{id}', 'NilaiAlternatifController@edit')->name('EditNilaiAlternatif');

Route::get('/Perhitungan', 'PerhitunganController@index')->name('Perhitungan');
Route::POST('/InputHitung', 'PerhitunganController@input')->name('InputHitung');
Route::POST('/SaveHitung', 'PerhitunganController@simpan')->name('SaveHitung');
Route::POST('/PilihAlternatif', 'PerhitunganController@simpan2')->name('PilihAlternatif');



Route::get('/HasilPerhitungan', 'HasilPerhitunganController@index')->name('HasilPerhitungan');
Route::get('/tablehasil/{id}', 'HasilPerhitunganController@table')->name('tablehasil');
Route::POST('/PilihUbahAlternatif', 'HasilPerhitunganController@ubah')->name('PilihUbahAlternatif');


Route::get('/laporan/{id}', 'LaporanController@index');
Route::get('/laporan/cetak_pdf/{id}', 'LaporanController@cetak_pdf');

Route::get('/laporan2/{id}', 'LaporanController@index2');
Route::get('/laporan2/cetak_pdf/{id}', 'LaporanController@cetak_pdf2');

Route::get('/laporan3/{id}', 'LaporanController@index3');
Route::get('/laporan3/cetak_pdf/{id}', 'LaporanController@cetak_pdf3');

Route::get('/LapHasilKeputusan', 'LapHasilKeputusanController@index')->name('LapHasilKeputusan');
Route::get('/LapAltTidakTerpilih', 'LapAltTidakTerpilihController@index')->name('LapAltTidakTerpilih');
Route::get('/LapGrafikAlt', 'LapGrafikAltController@index')->name('LapGrafikAlt');
