<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeAkun extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tipe',
        'anggaran',
        
    ];

    public function pengajuans(){
        return $this->hasMany(Pengajuan::class);
    }
}
