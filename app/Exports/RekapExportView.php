<?php

namespace App\Exports;

// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Pengajuan;
use App\Models\TipeAkun;
use App\Models\Realisasi;


class RekapExportView implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $year = date("Y");
        $data = TipeAkun::all();
        $data_peng = Pengajuan::where('status', '=', 'disetujui')->get();
        $data_real = Realisasi::where('status_real', '=', 'disetujui')->get();
        return view('excel_export',compact('data', 'data_peng', 'data_real','year'));
    }
}
