<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Pengajuan;
use App\Models\Realisasi;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'username',
        'password',
        'remember_token',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function badge_notif($role_id, $id_tipe_akun){
        if ($role_id == '2') { 
            $data_peng = Pengajuan::where('status', '=', 'pending')->where('id_tipe_akun', $id_tipe_akun)->count();
            $data_real = Realisasi::where('status_real', '=', 'pending')->where('diajukan', '=', 'yes')->whereHas('pengajuan', function ($query) use ($id_tipe_akun){
                $query->where('id_tipe_akun', '=', $id_tipe_akun);
            })->count();
            $data = $data_peng + $data_real;
        return $data;
        }
    }

    public static function badge_menu($role_id){
        if ($role_id == '2') { 
            $data_peng = Pengajuan::where('status', '=', 'pending')->count();
            $data_real = Realisasi::where('status_real', '=', 'pending')->where('diajukan', '=', 'yes')->count();
            $data = $data_peng + $data_real;
        return $data;
        }
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

}
