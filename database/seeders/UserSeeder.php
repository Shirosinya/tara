<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['Akun Staff Administrasi', 'stafftara123', '1'],
            ['Akun AVP', 'avptara123', '2'],
            ['Akun VP', 'vptara123', '3'],
        ];
        foreach ($users as $key => $value) {
            $user = User::updateOrCreate([
                'id'    => $key+1,
            ], [
                'name' => $value[0],
                'username' => $value[1],
                'password' => bcrypt('ijinmasuk'),
                'remember_token' => Str::random(10),
                'role_id' => $value[2],
            ]);
        }
    }
}
