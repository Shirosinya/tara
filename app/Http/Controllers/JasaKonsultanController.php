<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengajuan;
use App\Models\TipeAkun;
use App\Models\Realisasi;
use Brian2694\Toastr\Facades\Toastr;

class JasaKonsultanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $tipe_id = '2';
        $pengajuans = Pengajuan::where('id_tipe_akun', '=', $tipe_id)->get();
        if($user->id == 1){
            $realisasis = Realisasi::whereHas('pengajuan', function ($query) use ($tipe_id){
                $query->where('id_tipe_akun', '=', $tipe_id);
            })->get();
        }else{
            $realisasis = Realisasi::where('diajukan', '=', 'yes')->whereHas('pengajuan', function ($query) use ($tipe_id){
                $query->where('id_tipe_akun', '=', $tipe_id);
            })->get();
        }
        
        return view('jasa_konsultan', compact('pengajuans','user','realisasis'));
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
    public function store(Request $request)
    {
        //
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
