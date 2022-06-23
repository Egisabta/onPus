<?php

use App\Http\Controllers\adminBukuController;
use App\Http\Controllers\adminDaftarUserController;
use App\Http\Controllers\adminPeminjamanController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\BukuSayaController;
use App\Http\Controllers\daftarUserController;
use App\Http\Controllers\peminjamanBukuController;
use App\Http\Controllers\PeminjamanController;
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
Route::get('/', function() {
    return view('auth.login');
})->middleware('guest')->name('view.login'); // user login

// Route::middleware('auth')->group(function(){
    
Route::get('/admin', function() {
        return view('admin');
})->middleware('authMiddleware'); // user navbar
    
Route::get('/dashboard', function() {
    return view('dashboard');
}); // user->name('dashboard'); // dashboard
    
Route::get('/pinjamBuku', [BukuSayaController::class, 'create'])->middleware('userMiddleware'); // peminjaman navbar
Route::post('/pinjamBuku/store', [BukuSayaController::class, 'store'])->middleware('userMiddleware'); //
Route::get('/pinjam', function() {
        return view('buku.peminjaman');})->middleware('userMiddleware'); // peminjaman list
        
Route::get('/kembalikanBuku', function() {
        return view('buku.pengembalian');})->middleware('userMiddleware'); // pengembalian navbar
            
route::get('/detailBuku', function() {
                return view('buku.detail');})->middleware('userMiddleware'); // detail buku
                
Route::resource('/daftarBuku', 'App\http\Controllers\DaftarBukuController')->middleware('userMiddleware'); //daftar buku
Route::get('bukuSaya', [BukuSayaController::class, 'index'])->middleware('userMiddleware');
Route::delete('bukuSaya/{daftar_buku_saya}/delete', [BukuSayaController::class, 'destroy'])->middleware('userMiddleware');
// Route::resource('/bukuSaya', 'App\http\Controllers\BukuSayaController'); // daftar buku saya
    

// admin daftar user
Route::get('daftarAnggota', [adminDaftarUserController::class, 'index'])->middleware('authMiddleware'); // menampilkan daftar Anggota
Route::delete('/daftarAnggota/{user}', [adminDaftarUserController::class, 'destroy'])->middleware('authMiddleware'); // menampilkan delete
// Route::get('/isiData/create', [daftarUserController::class, 'create']); // membuat data anggota baru
// Route::post('/isiData/store', [daftarUserController::class, 'store']); // menyetorkan data anggota baru
// Route::get('/isiData/{user}/edit', [daftarUserController::class, 'edit'])->name('user.edit'); // edit
// Route::post('/isiData/{user}/update', [daftarUserController::class, 'update']); // pengisian data anggota baru
     
// admin daftar buku    
Route::get('listBuku', [adminBukuController::class, 'index'])->middleware('authMiddleware'); // daftarBuku
Route::get('/isiDataBuku/create', [adminBukuController::class, 'create'])->middleware('authMiddleware'); // membuat data buku baru
Route::post('/isiDataBuku/store', [adminBukuController::class, 'store'])->middleware('authMiddleware'); // menyetorkan data buku baru
Route::get('/isiDataBuku/{daftar_buku}/edit', [adminBukuController::class, 'edit'])->name('daftar_buku.edit')->middleware('authMiddleware'); // edit
Route::post('/isiDataBuku/{daftar_buku}/update', [adminBukuController::class, 'update'])->middleware('authMiddleware'); // updatepengisian data buku baru
Route::delete('/listBuku/{daftar_buku}', [adminBukuController::class, 'destroy'])->middleware('authMiddleware'); // delete


// admin data peminjam
Route::get('listPeminjam', [adminPeminjamanController::class, 'index'])->middleware('authMiddleware'); // daftarPeminjam
Route::delete('/listPeminjam/{peminjaman_buku}', [adminPeminjamanController::class, 'destroy'])->middleware('authMiddleware'); // delete

// user peminjaman
Route::get('/isiDataPeminjaman/create', [BukuSayaController::class, 'create'])->middleware('userMiddleware'); // membuat data peminjaman buku 
Route::post('/isiDataPeminjaman/store', [BukuSayaController::class, 'store'])->middleware('userMiddleware'); // membuat data peminjamanmenyetorkan data peminjaman buku baru

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });