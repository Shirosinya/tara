<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipeAkun;

class TipeAkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipe_akuns = [
            ['Suku Cadang', '25000000'],
            ['Jasa Konsultan', '30000000'],
            ['Jasa Audit', '40000000'],
            ['Jasa Tenaga Kerja Alih Daya', '30000000'],
            ['Sewa Peralatan Pabrik & Kantor', '20000000'],
            ['Kehumasan', '15000000'],
            ['Inspeksi & Perijinan', '15000000'],
            ['Peralatan Kerja', '23000000'],
            ['Peralatan Kantor', '25000000'],
        ];
        foreach ($tipe_akuns as $key => $value) {
            $tipe_akun = TipeAkun::updateOrCreate([
                'id'    => $key+1,
            ], [
                'nama_tipe' => $value[0],
                'anggaran' => $value[1],
            ]);
        }
    }
}
