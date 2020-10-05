<?php

use Illuminate\Support\Facades\Route;

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

//login
Route::get('/',function(){
    return view('Login');
});

Route::post('/postlogin','LoginController@auth');
Route::get('/logOut','LoginController@logout');

//tutup login




//Routes Admin
Route::get('/Admin','AdminController@index');
//Pengguna
Route::get('/DataPengguna','PenggunaController@index');
Route::get('/dataDosen/{role}','PenggunaController@dosen');
Route::get('/dataStaff/{role}','PenggunaController@staff');
Route::post('/DataPengguna','PenggunaController@store');

//update Pengguna
Route::post('/updatePengguna','PenggunaController@update');

//hapus Pengguna
Route::post('/hapusPengguna','PenggunaController@destroy'); 
//tutup pengguna


//Route Data Fakultas
Route::get('/Fakultas', function(){
    return view('Admin.Fakultas');
});

Route::post('/DataFakultas','FakultasController@store');
Route::get('/DataFakultas','FakultasController@index');

//update Data fakultas
Route::get('/updateFakultas{id}','FakultasController@edit');
Route::get('/updateFakultas','FakultasController@index');
Route::post('/updateFakultas','FakultasController@update');

//hapus Fakultas
Route::post('/hapusFakultas','FakultasController@destroy');



//Data Kelas

Route::get('/DataKelas','KelasController@index');
Route::post('/DataKelas','KelasController@store');
Route::post('/updateKelas','KelasController@update');
Route::post('/hapusKelas','KelasController@destroy');
//tutup fakultas



//Rooute Data Prodi
//show
Route::get('/DataProdi','ProdiController@index');
Route::post('/DataProdi','ProdiController@store');

//upadate Prodi
Route::post('/updateProdi','ProdiController@update');

//Hapus Prodi
Route::post('/hapusProdi','ProdiController@destroy');
//tutup prodi


//Route Data Matakuliah
Route::get('/DataMatakuliah','MatakuliahController@index');
Route::get('/matakuliah','MatakuliahController@index');
Route::get('/admin/matakuliah/{id}','MatakuliahController@dataMatakuliah');

//insert
Route::post('/DataMatakuliah','MatakuliahController@store');

//update
Route::post('/updateMatakuliah','MatakuliahController@update');

//hapus
Route::post('/hapusMatakuliah','MatakuliahController@destroy');

//Tutup route Data Matakuliah

//tutup Route ADMIN

//Route Dosen
Route::get('/Dosen','DosenController@index');
Route::get('/requestDosen','DosenController@request_dosen');
Route::post('/reqDosen','RequestDosenController@store');
Route::get('/matakuliah/{id}','RequestDosenController@show');
Route::get('/formRequest','RequestDosenController@Form');
Route::post('/reqMatakuliah','RequestDosenController@reqMatakuliah');
Route::get('/reqMatakuliah','RequestDosenController@Form');
Route::get('/statusRequest','RequestDosenController@status');
Route::get('/notifpesanStaff/{id}','RequestDosenController@notifpesanStaff');



//route request Dosen
Route::get('/requestDosenStaff','StaffController@requestdosen');
Route::get('/notifDosenStaff/{id}','StaffController@notifDosen');


//Route Staff
Route::get('/Staff','StaffController@index');
Route::get('/DaftarHadir', 'StaffController@daftarHadir');
Route::post('/DaftarHadir/cetak_allDaftarhadir','DaftarHadirControlller@cetak_All_DafatarHadir');

Route::get('/importJadwal','StaffController@importjadwal');
Route::post('/importJadwal','JadwalController@importJadwal');
Route::post('/importKRS','KRSController@importKRS');
Route::get('/staff/matakuliah/{id}','DaftarHadirControlller@show'); 
Route::post('/DaftarHadir','DaftarHadirControlller@reqDaftarHadir');
Route::get('/cetakDaftarHadir/{kode}','DaftarHadirControlller@cetak_DafatarHadir');
Route::get('/beritaAcara','StaffController@beritaAcara');
Route::get('/staff/BeritaAcaraMatakuliah/{id}','BeritaAcaraController@show'); 
Route::post('/DaftarBeritaAcara','BeritaAcaraController@reqBeritaAcara');
Route::get('/cetakBeritaAcara/{kode}','BeritaAcaraController@cetak_BeritaAcara');
Route::get('/labelUjian','StaffController@labelujian');
Route::get('/cetakLabelUjian','LabelAcaraController@cetak_label_ujian');
Route::get('/requestDosen/detail/{id}','RequestDosenController@detail');
Route::get('/cetakdetailReqDosen/{id}','RequestDosenController@cetak_detail');
Route::post('/hapusJadwal','JadwalController@destroy');
Route::get('/rekapitulasi','StaffController@rekapujian');
Route::get('/rekap/Export', 'RekapitulasiController@export_excel');

Route::post('/rekapitulasi/edit','RekapitulasiController@edit_pengawas');

Route::get('/konfirmasi/diterima/{id}', 'RequestDosenController@konfirmasi_diterima');
Route::post('/konfirmasi/ditolak','RequestDosenController@konfirmasi_ditolak');
Route::get('/cetakAllrequest','RequestDosenController@cetak_all_request');
Route::get('/hapusrequestDosen/{id}','RequestDosenController@hapus_requestdosenStaff');