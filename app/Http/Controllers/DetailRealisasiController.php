<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Realisasi;
use App\Models\DetailRealisasi;
use App\Models\Pengajuan;
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
        $realisasis = Realisasi::where('id', '=', $id)->first();
        $pengajuan = Pengajuan::where('id', '=', $realisasis->id_pengajuan)->first();
        $detail_realisasis = DetailRealisasi::where('id_realisasi', '=', $id)->get();
        $id_realisasi = $id;
        // $dr = DetailRealisasi::all();
        // dd($id);
        return view('detail_realisasi', compact('realisasis', 'detail_realisasis', 'user', 'id_realisasi', 'pengajuan'));
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
            'file_bukti' => 'required|mimes:jpg,png,jpeg',
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
        
        $total_pengeluaran = DetailRealisasi::where('id_realisasi', $id_realisasi)->sum('pengeluaran');
        $data = Realisasi::where('id',$id_realisasi)->first();
        $data->update([
            'total_pengeluaran_real' => $total_pengeluaran,
        ]);

        Toastr::success('Berhasil Menambah Bukti!','Success');
        return redirect()->back();
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
            'id_tipe_akun' => 'required',
            'file_bukti' => 'mimes:jpg,png,jpeg',
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
            
            $data->update([
                'nama_bukti' => $input['nama_bukti'],
                'tanggal' => $input['tanggal'],
                'pengeluaran' => $pengeluaran,
                'file_bukti' => $input['file_bukti'],
            ]);
            
            $id_realisasi = $data->id_realisasi;
            $total_pengeluaran = DetailRealisasi::where('id_realisasi', $id_realisasi)->sum('pengeluaran');
            $data_realisasi = Realisasi::where('id',$id_realisasi)->first();

            $data_realisasi->update([
            'total_pengeluaran_real' => $total_pengeluaran,
        ]);

            Toastr::success('Berhasil Update!','Success');
            return redirect()->back();
        }
        $data->update([
            'nama_bukti' => $input['nama_bukti'],
            'tanggal' => $input['tanggal'],
            'pengeluaran' => $pengeluaran,
        ]);

        $id_realisasi = $data->id_realisasi;
        $total_pengeluaran = DetailRealisasi::where('id_realisasi', $id_realisasi)->sum('pengeluaran');
        $data_realisasi = Realisasi::where('id',$id_realisasi)->first();
        $data_realisasi->update([
            'total_pengeluaran_real' => $total_pengeluaran,
        ]);

        Toastr::success('Berhasil Update!','Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_detail)
    {
        $data = DetailRealisasi::where('id',$id_detail)->first(); 
        DetailRealisasi::where('id',$id_detail)->delete();

        $id_realisasi = $data->id_realisasi;
        $total_pengeluaran = DetailRealisasi::where('id_realisasi', $id_realisasi)->sum('pengeluaran');
        $data_realisasi = Realisasi::where('id',$id_realisasi)->first();

        $data_realisasi->update([
        'total_pengeluaran_real' => $total_pengeluaran,
        ]);
        
        Toastr::success('Berhasil Menghapus!','Success');
        return redirect()->back();
    }
}
