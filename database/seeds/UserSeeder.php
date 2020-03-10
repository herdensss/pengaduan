<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Masyarakat;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Deni',
            'username' => 'herdensss',
            'password' => bcrypt('123456'),
            'level' => 'petugas'
        ]);

        Masyarakat::create([
            'nik' => '1234512345123456',
            'nama' => $user->nama,
            'username' => $user->nama,
            'password' => bcrypt('$user->password'),
            'telp' => '089123123123',
            'user_id' => $user->id,
        ]);
    }
}
