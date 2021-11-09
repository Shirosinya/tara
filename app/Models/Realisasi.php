<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_real',
        'alasan_ditolak_real',
        'total_pengeluaran_real',
        'id_pengajuan',
        
    ];

    public function pengajuan(){
        return $this->belongsTo(Pengajuan::class);
    }

    public function detail_realisasis(){
        return $this->hasMany(DetailRealisasi::class);
    }
}
