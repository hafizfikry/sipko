<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\VoteController;

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
route::get('about', [DashboardController::class, 'about'])->name('about');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth:user,pengguna', 'ceklevel:admin'])->group(function (){
    route::get('index', [DashboardController::class, 'index'])->name('index');
    route::get('datakandidat', [KandidatController::class, 'index'])->name('datakandidat');
    route::get('detail-kandidat-admin/{id}', [KandidatController::class, 'detail'])->name('detail-kandidat-admin{id}');
    route::get('tambah-kandidat', [KandidatController::class, 'create'])->name('tambah-kandidat');
    route::post('add-kandidat', [KandidatController::class, 'store'])->name('add-kandidat');
    route::get('edit-kandidat/{id}', [KandidatController::class, 'edit'])->name('edit-kandidat{id}');
    route::post('update-kandidat/{id}', [KandidatController::class, 'update'])->name('update-kandidat{id}');
    route::get('del-kandidat/{id}', [KandidatController::class, 'destroy'])->name('del-kandidat{id}');
    route::get('datauser', [UserController::class, 'index'])->name('datauser');
    route::get('search', [UserController::class, 'search'])->name('search');
    Route::get('/cetak-pdf', [UserController::class, 'cetakPDF'])->name('cetak-pdf');
    route::get('kandidat', [VoteController::class, 'index'])->name('kandidat');
    route::get('detail-kandidat/{id}', [VoteController::class, 'detail'])->name('detail-kandidat{id}');
    route::get('tambahuser', [UserController::class, 'create'])->name('tambahuser');
    route::post('update-user/{id}', [UserController::class, 'update'])->name('update-user{id}');
    route::get('edituser/{id}', [UserController::class, 'edit'])->name('edituser{id}');
    route::post('add-user', [UserController::class, 'store'])->name('add-user');
    route::get('del-user/{id}', [UserController::class, 'destroy'])->name('del-user{id}');
    route::post('importexcel', [UserController::class, 'importexcel'])->name('importexcel');
});
Route::middleware(['auth:user,pengguna', 'ceklevel:admin,siswa'])->group(function (){
    route::get('index', [DashboardController::class, 'index'])->name('index');
    route::get('kandidat', [VoteController::class, 'index'])->name('kandidat');
    route::get('detail-kandidat/{id}', [VoteController::class, 'detail'])->name('detail-kandidat{id}');
    route::post('vote/{id}', [VoteController::class, 'store'])->name('vote{id}');
});

?>