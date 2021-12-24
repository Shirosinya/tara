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
        $data_peng = Pengajuan::whereYear('tanggal_mulai', '=', $year)->where('status', '=', 'disetujui')->get();
        $dp_id = array();
        foreach($data_peng as $dp){
            array_push($dp_id,$dp->id);
        }
        $data_real = Realisasi::whereIn('id_pengajuan',$dp_id)->where('status_real', '=', 'disetujui')->get();
        return view('excel_export',compact('data', 'data_peng', 'data_real','year'));
    }
}
