<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $pengajuans = Pengajuan::where('id_tipe_akun', '=', '1')->get();
        return view('suku_cadang', compact('pengajuans'));
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
            return redirect('/sukucadang')->with('danger','Terjadi Kesalahan Saat Penginputan!');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
