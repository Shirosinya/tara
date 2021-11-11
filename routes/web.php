<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('dashboard');
})->middleware('auth');

Auth::routes();

Route::group(['middleware' => ['auth']], function () 
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('/sukucadang', [App\Http\Controllers\SukuCadangController::class, 'index']);
    Route::post('/sukucadang/mengajukan', [App\Http\Controllers\SukuCadangController::class, 'mengajukan'])->name('mengajukan');
    Route::post('/sukucadang/update{id}/pengajuan', [App\Http\Controllers\SukuCadangController::class, 'updatePengajuan']);
    Route::post('/sukucadang/destroy{id}/pengajuan', [App\Http\Controllers\SukuCadangController::class, 'destroyPengajuan']);

    Route::post('/sukucadang/setujui{id_arr}/pengajuan', [App\Http\Controllers\SukuCadangController::class, 'setujuiPengajuan']);
    Route::post('/sukucadang/tolak{id_arr}/pengajuan', [App\Http\Controllers\SukuCadangController::class, 'tolakPengajuan']);


    Route::get('/jasakonsultan',[App\Http\Controllers\JasaKonsultanController::class, 'index']);


    Route::get('/jasaaudit',[App\Http\Controllers\JasaAuditController::class, 'index']);


    Route::get('/jasaTKAD',[App\Http\Controllers\JasaKonsultanController::class, 'index']);
});