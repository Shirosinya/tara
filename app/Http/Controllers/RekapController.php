<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\TipeAkun;
use App\Models\Realisasi;
use Maatwebsite\Excel\Facades\Excel;
// use App\Http\Controllers\Controller;

class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function templateExport(){
    //     $data = TipeAkun::all();
    //     $data_peng = Pengajuan::where('status', '=', 'disetujui')->get();
    //     $data_real = Realisasi::where('status_real', '=', 'disetujui')->get();
    //     return view('excel_export',compact('data', 'data_peng', 'data_real'));
    // }

    public function exportExcelView()
    {
        return Excel::download(new \App\Exports\RekapExportView(), 'rekap_anggaran.xlsx');
    }

}
