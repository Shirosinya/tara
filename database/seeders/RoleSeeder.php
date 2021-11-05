<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['staff_administrasi'],
            ['avp'],
            ['vp'],
        ];
        foreach ($roles as $key => $value) {
            $role = Role::updateOrCreate([
                'id'    => $key+1,
            ], [
                'nama_role' => $value[0],
            ]);
        }
    }
}
