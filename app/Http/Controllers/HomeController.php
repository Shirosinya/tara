<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Pengajuan;
use App\Models\TipeAkun;
use App\Models\Realisasi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $year = date('Y');
        $arr_pengid = array(); //untuk menampung id filtered by year
        $peng_ids = Pengajuan::whereYear('tanggal_mulai', '=', $year)->where('status', '=', 'disetujui')->get();
        foreach($peng_ids as $peng_id){
            array_push($arr_pengid, $peng_id->id);
        }
        $pengajuan1 = Pengajuan::whereYear('tanggal_mulai', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '1')->sum('total_pengeluaran');
        $pengajuan2 = Pengajuan::whereYear('tanggal_mulai', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '2')->sum('total_pengeluaran');
        $pengajuan3 = Pengajuan::whereYear('tanggal_mulai', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '3')->sum('total_pengeluaran');
        $pengajuan4 = Pengajuan::whereYear('tanggal_mulai', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '4')->sum('total_pengeluaran');
        $pengajuan5 = Pengajuan::whereYear('tanggal_mulai', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '5')->sum('total_pengeluaran');
        $pengajuan6 = Pengajuan::whereYear('tanggal_mulai', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '6')->sum('total_pengeluaran');
        $pengajuan7 = Pengajuan::whereYear('tanggal_mulai', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '7')->sum('total_pengeluaran');
        $pengajuan8 = Pengajuan::whereYear('tanggal_mulai', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '8')->sum('total_pengeluaran');
        $pengajuan9 = Pengajuan::whereYear('tanggal_mulai', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '9')->sum('total_pengeluaran');

        //menghindari zero division
        $div0 = array($pengajuan1, $pengajuan2, $pengajuan3, $pengajuan4, $pengajuan5, $pengajuan6, $pengajuan7, $pengajuan8, $pengajuan9);
        $index = 0;
        foreach($div0 as $div){
            if($div == 0){
                $div0[$index] = 0.000001;
            }
            $index++;
        }
        $pengajuan1 = $div0[0];
        $pengajuan2 = $div0[1];
        $pengajuan3 = $div0[2];
        $pengajuan4 = $div0[3];
        $pengajuan5 = $div0[4];
        $pengajuan6 = $div0[5];
        $pengajuan7 = $div0[6];
        $pengajuan8 = $div0[7];
        $pengajuan9 = $div0[8];

        $realisasi1 = Realisasi::whereIn('id_pengajuan', $arr_pengid)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '1');
        })->sum('total_pengeluaran_real');

        $realisasi2 = Realisasi::whereIn('id_pengajuan', $arr_pengid)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '2');
        })->sum('total_pengeluaran_real');
        
        $realisasi3 = Realisasi::whereIn('id_pengajuan', $arr_pengid)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '3');
        })->sum('total_pengeluaran_real');
        
        $realisasi4 = Realisasi::whereIn('id_pengajuan', $arr_pengid)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '4');
        })->sum('total_pengeluaran_real');
        
        $realisasi5 = Realisasi::whereIn('id_pengajuan', $arr_pengid)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '5');
        })->sum('total_pengeluaran_real');
        
        $realisasi6 = Realisasi::whereIn('id_pengajuan', $arr_pengid)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '6');
        })->sum('total_pengeluaran_real');
        
        $realisasi7 = Realisasi::whereIn('id_pengajuan', $arr_pengid)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '7');
        })->sum('total_pengeluaran_real');
        
        $realisasi8 = Realisasi::whereIn('id_pengajuan', $arr_pengid)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '8');
        })->sum('total_pengeluaran_real');
        
        $realisasi9 = Realisasi::whereIn('id_pengajuan', $arr_pengid)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '9');
        })->sum('total_pengeluaran_real');

        //Grafik Data Rencana dan Realisasi
        $data_peng = Pengajuan::select([
            DB::raw("sum(total_pengeluaran) as jumlah"),
//                DB::raw("EXTRACT(MONTH FROM created_at) as mont"),
//                DB::raw("YEAR(created_at) as year"),
            DB::raw("MONTH(tanggal_mulai) as mont"),
        ])
            ->whereYear("created_at", "=", $year)
            ->where("status", "=", "disetujui")
            ->groupBy("mont")
            ->orderBy("mont", "ASC")
            ->get();
        $pengajuan_val = $data_peng->all();
        $pv_arr = array();
        $pv_money = array();
        foreach($pengajuan_val as $peng){
            array_push($pv_arr, $peng['mont']-1);
            //intval karena ada kemungkinan value yang diinputkan tipe string
            array_push($pv_money, intval($peng['jumlah']));
        }
        $peng_arr = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        $indexA = 0;
        $indexB = 0;
        $total = 0;
        foreach($peng_arr as $peng){
            if(in_array($indexA,$pv_arr)){
                $total += $pv_money[$indexB];
                $peng_arr[$indexA] = $total;
                //ketika tidak ketemu index yang sama dengan (month - 1) maka indexB increment
                $indexB++;
            }else{
                $peng_arr[$indexA] = $total;
            }
            $indexA++;
        }

        $data_pengajuan = Pengajuan::where('status', '=', 'disetujui');
        $data_real = Realisasi::select([
            DB::raw("sum(realisasis.total_pengeluaran_real) as jumlah"),
            DB::raw("MONTH(pengajuans.tanggal_mulai) as mont"),
        ])
            ->joinSub($data_pengajuan, 'pengajuans', function($join){
                $join->on('pengajuans.id', '=', 'realisasis.id_pengajuan');
            })
            ->whereYear("pengajuans.tanggal_mulai", "=", $year)
            ->where("realisasis.status_real", "=", "disetujui")
            ->groupBy("mont")
            ->orderBy("mont", "ASC")
            ->get();
        $real_val = $data_real->all();
        $real_arr = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        $rv_arr = array();
        $rv_money = array();
        foreach($real_val as $real){
            array_push($rv_arr, $real['mont']-1);
            //intval karena ada kemungkinan value yang diinputkan tipe string
            array_push($rv_money, intval($real['jumlah']));
        }
        $indexA = 0;
        $indexB = 0;
        $total = 0;
        foreach($real_arr as $real){
            if(in_array($indexA,$rv_arr)){
                $total += $rv_money[$indexB];
                $real_arr[$indexA] = $total;
                //ketika tidak ketemu index yang sama dengan (month - 1) maka indexB increment
                $indexB++;
            }else{
                $real_arr[$indexA] = $total;
            }
            $indexA++;
        }
        // dd($peng_arr, $real_arr);
        return view('dashboard',compact('user', 'pengajuan1', 'pengajuan2', 'pengajuan3', 'pengajuan4', 'pengajuan5', 'pengajuan6'
        , 'pengajuan7', 'pengajuan8', 'pengajuan9', 'realisasi1', 'realisasi2', 'realisasi3', 'realisasi4', 'realisasi5'
        , 'realisasi6', 'realisasi7', 'realisasi8', 'realisasi9','peng_arr', 'real_arr', 'year'));
    }
}
