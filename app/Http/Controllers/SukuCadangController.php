<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengajuan;
use App\Models\TipeAkun;
use App\Models\Realisasi;
use Brian2694\Toastr\Facades\Toastr;

class SukuCadangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $pengajuans = Pengajuan::where('id_tipe_akun', '=', '1')->get();
        if($user->id == 1){
            $realisasis = Realisasi::all();
        }else{
            $realisasis = Realisasi::where('diajukan', '=', 'yes')->get();
        }
        
        return view('suku_cadang', compact('pengajuans','user','realisasis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function mengajukan(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|max:255',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'id_tipe_akun' => 'required',
            'total_pengeluaran' => 'required',
        ]);
        // dd($request->all());
        $input = $request->all();
        $pengeluaran = str_replace(".", "", $input['total_pengeluaran']);
        
        if($data = Pengajuan::create([
            'nama_kegiatan' => $input['nama_kegiatan'],
            'tanggal_mulai' => $input['tanggal_mulai'],
            'tanggal_selesai' => $input['tanggal_selesai'],
            'total_pengeluaran' => $pengeluaran,
            'id_tipe_akun' => $input['id_tipe_akun'],
        ]))
        {
            Toastr::success('Berhasil Mengajukan!','Success');
            return redirect()->back();
        }else{
            Toastr::error('Terjadi Kesalahan Saat Penginputan!','Gagal');
            return redirect()->back();
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setujuiPengajuan(Request $request)
    {
        Pengajuan::whereIn('id',$request->ids)->update([
            'status' => 'disetujui',
        ]);
        // $approved = Pengajuan::whereIn('id',$request->ids)->get();
        foreach($request->ids as $id){
            Realisasi::create([
            'total_pengeluaran_real' => 0,
            'id_pengajuan' => $id,
            ]);
        }
        Toastr::success('Berhasil Menyetujui Pengajuan','Success');
        return response()->json(true);
    }

    public function tolakPengajuan(Request $request)
    {
        Pengajuan::whereIn('id',$request->ids)->update([
            'status' => 'ditolak',
        ]);
        Toastr::success('Berhasil Menolak Pengajuan','Success');
        return response()->json(true);
    }

    public function alasanPenolakan(Request $request, $id)
    {
        $request->validate([
            'alasan_ditolak' => 'required|max:255',
        ]);
        Pengajuan::where('id','=',$id)->update([
            'alasan_ditolak' => $request['alasan_ditolak'],
        ]);
        Toastr::success('Berhasil Menyimpan Alasan Penolakan','Success');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePengajuan(Request $request, $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required|max:255',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'id_tipe_akun' => 'required',
            'total_pengeluaran' => 'required',
        ]);
        $input = $request->all();
        $pengeluaran = str_replace(".", "", $input['total_pengeluaran']);
        $data = Pengajuan::where('id',$id)->first();
        
        if($data->update([
            'nama_kegiatan' => $input['nama_kegiatan'],
            'tanggal_mulai' => $input['tanggal_mulai'],
            'tanggal_selesai' => $input['tanggal_selesai'],
            'total_pengeluaran' => $pengeluaran,
        ]))
        {
            Toastr::success('Berhasil Update!','Success');
            return redirect()->back();
        }else{
            Toastr::error('Terjadi Kesalahan!','Failed');
            return redirect()->back();
        }
    }

    public function pengajuanRealisasi($id_realisasi)
    {
        $data_realisasi = Realisasi::where('id', '=', $id_realisasi)->first();
        $data_realisasi->update([
            'diajukan' => 'yes',
        ]);
        
        Toastr::success('Berhasil Melakukan Pengajuan!','Success');
        return redirect()->back();
    }

    public function setujuiRealisasi(Request $request)
    {
        Realisasi::whereIn('id',$request->ids)->update([
            'status_real' => 'disetujui',
        ]);
        Toastr::success('Berhasil Menyetujui Pengajuan','Success');
        return response()->json(true);
    }

    public function tolakRealisasi(Request $request)
    {
        Realisasi::whereIn('id',$request->ids)->update([
            'status_real' => 'ditolak',
        ]);
        Toastr::success('Berhasil Menolak Pengajuan','Success');
        return response()->json(true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPengajuan($id)
    {
        $pengajuan = Pengajuan::where('id',$id)->delete();
        Toastr::success('Berhasil Menghapus!','Success');
        return redirect()->back();
    }
}
