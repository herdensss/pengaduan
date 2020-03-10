<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Petugas;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Deni Admin',
            'username' => 'admin',
            'password' => bcrypt('12345'),
            'level' => 'petugas'
        ]);

        Petugas::create([
            'nama_petugas' => $user->nama,
            'username' =>$user->username,
            'password' => bcrypt($user->password),
            'level' => 'admin',
            'telp' => '081123123123',
            'user_id' => $user_id
        ]);

        $user_2 = User::create([
            'name' => 'Deni Petugas',
            'username' => 'petugas',
            'password'=> bcrypt('12345'),
            'level' => 'petugas'
        ]);

        Petugas::create([
            'nama_petugas' => $user_2->nama,
            'username' => $user_2->username,
            'password' => bcrypt($user_2->password),
            'level' => 'petugas',
            'telp' => '081123123123',
            'user_id' => $user_2->id
        ]);
    }
}
