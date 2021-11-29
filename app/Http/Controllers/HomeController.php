<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $pengajuan1 = Pengajuan::whereYear('created_at', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '1')->sum('total_pengeluaran');
        $pengajuan2 = Pengajuan::whereYear('created_at', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '2')->sum('total_pengeluaran');
        $pengajuan3 = Pengajuan::whereYear('created_at', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '3')->sum('total_pengeluaran');
        $pengajuan4 = Pengajuan::whereYear('created_at', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '4')->sum('total_pengeluaran');
        $pengajuan5 = Pengajuan::whereYear('created_at', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '5')->sum('total_pengeluaran');
        $pengajuan6 = Pengajuan::whereYear('created_at', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '6')->sum('total_pengeluaran');
        $pengajuan7 = Pengajuan::whereYear('created_at', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '7')->sum('total_pengeluaran');
        $pengajuan8 = Pengajuan::whereYear('created_at', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '8')->sum('total_pengeluaran');
        $pengajuan9 = Pengajuan::whereYear('created_at', '=', $year)->where('status', '=', 'disetujui')->where('id_tipe_akun', '=', '9')->sum('total_pengeluaran');

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

        $realisasi1 = Realisasi::whereYear('created_at', '=', $year)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '1');
        })->sum('total_pengeluaran_real');

        $realisasi2 = Realisasi::whereYear('created_at', '=', $year)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '2');
        })->sum('total_pengeluaran_real');
        
        $realisasi3 = Realisasi::whereYear('created_at', '=', $year)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '3');
        })->sum('total_pengeluaran_real');
        
        $realisasi4 = Realisasi::whereYear('created_at', '=', $year)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '4');
        })->sum('total_pengeluaran_real');
        
        $realisasi5 = Realisasi::whereYear('created_at', '=', $year)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '5');
        })->sum('total_pengeluaran_real');
        
        $realisasi6 = Realisasi::whereYear('created_at', '=', $year)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '6');
        })->sum('total_pengeluaran_real');
        
        $realisasi7 = Realisasi::whereYear('created_at', '=', $year)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '7');
        })->sum('total_pengeluaran_real');
        
        $realisasi8 = Realisasi::whereYear('created_at', '=', $year)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '8');
        })->sum('total_pengeluaran_real');
        
        $realisasi9 = Realisasi::whereYear('created_at', '=', $year)
        ->where('status_real', '=', 'disetujui')
        ->whereHas('pengajuan', function ($query){
            $query->where('id_tipe_akun', '=', '9');
        })->sum('total_pengeluaran_real');

        //Grafik Data Rencana dan Realisasi
        $januari = Pengajuan::whereYear('created_at', '=', $year)
        ->whereMonth('created_at', '=', '01')->where('status', '=', 'disetujui')->sum('total_pengeluaran');
        $januari_real = Realisasi::whereYear('created_at', '=', $year)
        ->whereMonth('created_at', '=', '01')->where('status_real', '=', 'disetujui')->sum('total_pengeluaran_real');
        $februari = Pengajuan::whereYear('created_at', '=', $year)
        ->whereMonth('created_at', '=', '02')->where('status', '=', 'disetujui')->sum('total_pengeluaran');
        $februari_real = Realisasi::whereYear('created_at', '=', $year)
        ->whereMonth('created_at', '=', '02')->where('status_real', '=', 'disetujui')->sum('total_pengeluaran_real');
        $november = Pengajuan::whereYear('created_at', '=', $year)
        ->whereMonth('created_at', '=', '11')->where('status', '=', 'disetujui')->sum('total_pengeluaran');
        // dd($november);
        $november_real = Realisasi::whereYear('created_at', '=', $year)
        ->whereMonth('created_at', '=', '11')->where('status_real', '=', 'disetujui')->sum('total_pengeluaran_real');
        
        return view('dashboard',compact('user', 'pengajuan1', 'pengajuan2', 'pengajuan3', 'pengajuan4', 'pengajuan5', 'pengajuan6'
        , 'pengajuan7', 'pengajuan8', 'pengajuan9', 'realisasi1', 'realisasi2', 'realisasi3', 'realisasi4', 'realisasi5'
        , 'realisasi6', 'realisasi7', 'realisasi8', 'realisasi9'));
    }
}
