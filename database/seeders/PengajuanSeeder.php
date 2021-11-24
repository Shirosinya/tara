<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengajuan;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengajuans = [
            ['Kegiatan Suku Cadang 1', '2021-11-01', '2021-11-30', 'pending', '5000000', '1'],
            ['Kegiatan Suku Cadang 2', '2021-11-02', '2021-12-01', 'pending', '1000000', '1'],
            ['Kegiatan Suku Cadang 3', '2021-11-03', '2021-11-02', 'pending', '15000000', '1'],
            ['Kegiatan Jasa Konsultan 1', '2021-11-01', '2021-11-30', 'pending', '5000000', '2'],
            ['Kegiatan Jasa Konsultan 2', '2021-11-02', '2021-12-01', 'pending', '1000000', '2'],
            ['Kegiatan Jasa Konsultan 3', '2021-11-03', '2021-11-02', 'pending', '15000000', '2'],
            ['Kegiatan Jasa Audit 1', '2021-11-01', '2021-11-30', 'pending', '5000000', '3'],
            ['Kegiatan Jasa Audit 2', '2021-11-02', '2021-12-01', 'pending', '1000000', '3'],
            ['Kegiatan Jasa Audit 3', '2021-11-03', '2021-11-02', 'pending', '15000000', '3'],
            ['Kegiatan Jasa TKAD 1', '2021-11-01', '2021-11-30', 'pending', '5000000', '4'],
            ['Kegiatan Jasa TKAD 2', '2021-11-02', '2021-12-01', 'pending', '1000000', '4'],
            ['Kegiatan Jasa TKAD 3', '2021-11-03', '2021-11-02', 'pending', '15000000', '4'],
            ['Kegiatan Sewa Peralatan Pabrik dan Kantor 1', '2021-11-01', '2021-11-30', 'pending', '5000000', '5'],
            ['Kegiatan Sewa Peralatan Pabrik dan Kantor 2', '2021-11-02', '2021-12-01', 'pending', '1000000', '5'],
            ['Kegiatan Sewa Peralatan Pabrik dan Kantor 3', '2021-11-03', '2021-11-02', 'pending', '15000000', '5'],
            ['Kegiatan Kehumasan 1', '2021-11-01', '2021-11-30', 'pending', '5000000', '6'],
            ['Kegiatan Kehumasan 2', '2021-11-02', '2021-12-01', 'pending', '1000000', '6'],
            ['Kegiatan Kehumasan 3', '2021-11-03', '2021-11-02', 'pending', '15000000', '6'],
            ['Kegiatan Inspeksi & Perijinan 1', '2021-11-01', '2021-11-30', 'pending', '5000000', '7'],
            ['Kegiatan Inspeksi & Perijinan 2', '2021-11-02', '2021-12-01', 'pending', '1000000', '7'],
            ['Kegiatan Inspeksi & Perijinan 3', '2021-11-03', '2021-11-02', 'pending', '15000000', '7'],
            ['Kegiatan Peralatan Kerja 1', '2021-11-01', '2021-11-30', 'pending', '5000000', '8'],
            ['Kegiatan Peralatan Kerja 2', '2021-11-02', '2021-12-01', 'pending', '1000000', '8'],
            ['Kegiatan Peralatan Kerja 3', '2021-11-03', '2021-11-02', 'pending', '15000000', '8'],
            ['Kegiatan Peralatan Kantor 1', '2021-11-01', '2021-11-30', 'pending', '5000000', '9'],
            ['Kegiatan Peralatan Kantor 2', '2021-11-02', '2021-12-01', 'pending', '1000000', '9'],
            ['Kegiatan Peralatan Kantor 3', '2021-11-03', '2021-11-02', 'pending', '15000000', '9'],
        ];
        foreach ($pengajuans as $key => $value) {
            $pengajuan = Pengajuan::updateOrCreate([
                'id'    => $key+1,
            ], [
                'nama_kegiatan' => $value[0],
                'tanggal_mulai' => $value[1],
                'tanggal_selesai' => $value[2],
                'status' => $value[3],
                'total_pengeluaran' => $value[4],
                'id_tipe_akun' => $value[5],
            ]);
        }
    }
}
