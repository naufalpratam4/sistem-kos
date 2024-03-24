<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.welcome');
});
Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/penghuni', [AdminController::class, 'penghuni'])->name('admin.penghuni');
Route::get('/kamar', function () {
    return view('admin.kamar');
});
Route::get('/riwayatPenghuni', function () {
    return view('admin.riwayatTransaksi');
});
Route::get('/addPenghuni', function () {
    return view('admin.addPenghuni');
});
