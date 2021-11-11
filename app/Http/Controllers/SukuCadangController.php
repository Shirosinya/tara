<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengajuan;
use App\Models\TipeAkun;
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
        return view('suku_cadang', compact('pengajuans','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            return redirect('/sukucadang')->with('danger','Terjadi Kesalahan Saat Penginputan!');
        }
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
