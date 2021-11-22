<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Realisasi;
use App\Models\DetailRealisasi;
use Brian2694\Toastr\Facades\Toastr;

class DetailRealisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = Auth::user();
        $realisasis = Realisasi::where('id', '=', $id);
        $detail_realisasis = DetailRealisasi::where('id_realisasi', '=', $id)->get();
        $id_realisasi = $id;
        // $dr = DetailRealisasi::all();
        // dd($id);
        return view('detail_realisasi', compact('realisasis', 'detail_realisasis', 'user', 'id_realisasi'));
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
    public function store(Request $request, $id_realisasi)
    {
        $request->validate([
            'nama_bukti' => 'required',
            'tanggal' => 'required',
            'pengeluaran' => 'required',
            'file_bukti' => 'required',
            'id_tipe_akun' => 'required',
        ]);

        $input = $request->all();
        if($request->hasFile('file_bukti')){
            $destination_path = 'public/images/detail_realisasi';
            $image = $request->file('file_bukti');
            $image_name = $image->getCLientOriginalName();
            $path = $request->file('file_bukti')->storeAs($destination_path, $image_name);

            $input['file_bukti'] = $image_name;
        }

        $pengeluaran = str_replace(".", "", $input['pengeluaran']);
        DetailRealisasi::create([
            'nama_bukti' => $input['nama_bukti'],
            'tanggal' => $input['tanggal'],
            'pengeluaran' => $pengeluaran,
            'file_bukti' => $input['file_bukti'],
            'id_realisasi' => $id_realisasi
        ]);

        Toastr::success('Berhasil Menambah Bukti!','Success');
        return redirect()->back();
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
    public function update(Request $request, $id_detail)
    {
        $request->validate([
            'nama_bukti' => 'required',
            'tanggal' => 'required',
            'pengeluaran' => 'required',
            'file_bukti' => 'required',
            'id_tipe_akun' => 'required',
        ]);
        $input = $request->all();
        $pengeluaran = str_replace(".", "", $input['pengeluaran']);
        $data = DetailRealisasi::where('id',$id_detail)->first();
        
        if($request->hasFile('file_bukti')){
            $destination_path = 'public/images/detail_realisasi';
            $image = $request->file('file_bukti');
            $image_name = $image->getCLientOriginalName();
            $path = $request->file('file_bukti')->storeAs($destination_path, $image_name);

            $input['file_bukti'] = $image_name;
        }

        if($data->update([
            'nama_bukti' => $input['nama_bukti'],
            'tanggal' => $input['tanggal'],
            'pengeluaran' => $pengeluaran,
            'file_bukti' => $input['file_bukti'],
        ]))
        {
            Toastr::success('Berhasil Update!','Success');
            return redirect()->back();
        }else{
            Toastr::error('Terjadi Kesalahan!','Failed');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_detail)
    {
        DetailRealisasi::where('id',$id_detail)->delete();
        Toastr::success('Berhasil Menghapus!','Success');
        return redirect()->back();
    }
}
