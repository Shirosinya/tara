<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kegiatan',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
        'alasan_ditolak',
        'total_pengeluaran',
        'id_tipe_akun',
        
    ];

    public function tipe_akun(){
        return $this->belongsTo(TipeAkun::class, 'id_tipe_akun');
    }

    public function realisasi(){
        return $this->hasOne(Realisasi::class, 'id_pengajuan');
    }
}
