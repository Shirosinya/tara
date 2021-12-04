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

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware('auth');

Auth::routes();

Route::group(['middleware' => ['auth']], function () 
{
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('/sukucadang', [App\Http\Controllers\SukuCadangController::class, 'index']);
    Route::post('/sukucadang/mengajukan', [App\Http\Controllers\SukuCadangController::class, 'mengajukan'])->name('mengajukan');
    Route::post('/sukucadang/update{id}/pengajuan', [App\Http\Controllers\SukuCadangController::class, 'updatePengajuan']);
    Route::post('/sukucadang/destroy{id}/pengajuan', [App\Http\Controllers\SukuCadangController::class, 'destroyPengajuan']);

    Route::post('/sukucadang/setujui/pengajuan', [App\Http\Controllers\SukuCadangController::class, 'setujuiPengajuan'])->name('setujui-pengajuan');
    Route::post('/sukucadang/tolak/pengajuan', [App\Http\Controllers\SukuCadangController::class, 'tolakPengajuan']);
    Route::post('/sukucadang/alasan-penolakan/{id}/pengajuan', [App\Http\Controllers\SukuCadangController::class, 'alasanPenolakan'])->name('alasan-penolakan-pengajuan');

    Route::post('/sukucadang/pengajuan-realisasi/{id_realisasi}', [App\Http\Controllers\SukuCadangController::class, 'pengajuanRealisasi']);
    Route::post('/sukucadang/setujui/realisasi', [App\Http\Controllers\SukuCadangController::class, 'setujuiRealisasi']);
    Route::post('/sukucadang/tolak/realisasi', [App\Http\Controllers\SukuCadangController::class, 'tolakRealisasi']);
    Route::post('/sukucadang/alasan-penolakan/{id}/realisasi', [App\Http\Controllers\SukuCadangController::class, 'alasanPenolakanRealisasi'])->name('alasan-penolakan-realisasi');

    //Detail Realisasi
    Route::get('/detailrealisasi/{id}', [App\Http\Controllers\DetailRealisasiController::class, 'index']);
    Route::post('/detailrealisasi/store/{id_realisasi}', [App\Http\Controllers\DetailRealisasiController::class, 'store']);
    Route::post('/detailrealisasi/update/{id_detail}', [App\Http\Controllers\DetailRealisasiController::class, 'update']);
    Route::post('/detailrealisasi/destroy/{id_detail}', [App\Http\Controllers\DetailRealisasiController::class, 'destroy']);


    Route::get('/jasakonsultan',[App\Http\Controllers\SukuCadangController::class, 'index2']);
    Route::get('/jasaaudit',[App\Http\Controllers\SukuCadangController::class, 'index3']);
    Route::get('/jasaTKAD',[App\Http\Controllers\SukuCadangController::class, 'index4']);
    
    Route::get('/sewaperalatanpabrikkantor',[App\Http\Controllers\SukuCadangController::class, 'index5']);
    Route::get('/kehumasan',[App\Http\Controllers\SukuCadangController::class, 'index6']);
    Route::get('/inspeksiperijinan',[App\Http\Controllers\SukuCadangController::class, 'index7']);
    Route::get('/peralatankerja',[App\Http\Controllers\SukuCadangController::class, 'index8']);
    Route::get('/peralatankantor',[App\Http\Controllers\SukuCadangController::class, 'index9']);

    Route::get('/rekap-export',[App\Http\Controllers\RekapController::class, 'exportExcelView']);
    Route::get('/rekap',[App\Http\Controllers\RekapController::class, 'templateExport']);
    
});