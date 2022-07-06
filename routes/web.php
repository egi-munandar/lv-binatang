<?php

use App\Http\Controllers\ListBinatangController;
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
    return view('home');
});
Route::get('/list-binatang', [ListBinatangController::class, 'getBinatang'])->name('list-binatang');
Route::get('/list-binatang/create', [ListBinatangController::class, 'create'])->name('list-binatang.create');
Route::post('/list-binatang', [ListBinatangController::class, 'store'])->name('list-binatang.store');
Route::get('/list-binatang/{lb}/edit', [ListBinatangController::class, 'edit'])->name('list-binatang.edit');
Route::put('/list-binatang/{lb}/update', [ListBinatangController::class, 'update'])->name('list-binatang.update');
Route::delete('/list-binatang/{lb}', [ListBinatangController::class, 'destroy'])->name('list-binatang.delete');
