<?php

use App\Http\Controllers\adminBukuController;
use App\Http\Controllers\adminDaftarUserController;
use App\Http\Controllers\adminPeminjamanController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\BukuSayaController;
use App\Http\Controllers\daftarUserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\peminjamanBukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
        return view('auth.login');
})->middleware('guest')->name('view.login'); // user login

// Route::middleware('auth')->group(function(){

Route::get('/admin', function () {
        return view('admin');
})->middleware('authMiddleware'); // user navbar

Route::get('/dashboard', function () {
        return view('dashboard');
}); // user->name('dashboard'); // dashboard

Route::get('/pinjamBuku', [BukuSayaController::class, 'create']); // peminjaman navbar
Route::post('/pinjamBuku/store', [BukuSayaController::class, 'store']); //
Route::get('/pinjam', function () {
        return view('buku.peminjaman');
}); // peminjaman list

Route::get('/kembalikanBuku', function () {
        return view('buku.pengembalian');
}); // pengembalian navbar

route::get('/detailBuku', function () {
        return view('buku.detail');
}); // detail buku

Route::resource('/daftarBuku', 'App\http\Controllers\DaftarBukuController'); //daftar buku
Route::get('bukuSaya', [BukuSayaController::class, 'index']);
Route::delete('bukuSaya/{daftar_buku_saya}/delete', [BukuSayaController::class, 'destroy']);
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
Route::get('/isiDataPeminjaman/create', [BukuSayaController::class, 'create']); // membuat data peminjaman buku 
Route::post('/isiDataPeminjaman/store', [BukuSayaController::class, 'store']); // membuat data peminjamanmenyetorkan data peminjaman buku baru

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });

Route::prefix('employees')->group(function () {
        Route::get('', [EmployeeController::class, 'index'])->name('employees');
        Route::get('create', [EmployeeController::class, 'create'])->name('employees.create');
        Route::post('store', [EmployeeController::class, 'store'])->name('employees.store');
        Route::get('{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
        Route::post('{id}/update', [EmployeeController::class, 'update'])->name('employees.update');
        Route::delete('{id}/delete', [EmployeeController::class, 'destroy'])->name('employees.destroy');
});

Route::prefix('students')->group(function () {
        Route::get('', [StudentController::class, 'index'])->name('students');
        Route::get('create', [StudentController::class, 'create'])->name('students.create');
        Route::post('store', [StudentController::class, 'store'])->name('students.store');
        Route::get('{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
        Route::post('{id}/update', [StudentController::class, 'update'])->name('students.update');
        Route::delete('{id}/delete', [StudentController::class, 'destroy'])->name('students.destroy');
});
