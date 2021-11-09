<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRealisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_bukti',
        'tanggal',
        'pengeluaran',
        'file_bukti',
        'id_realisasi',
        
    ];

    public function realisasi(){
        return $this->belongsTo(Realisasi::class);
    }
}
