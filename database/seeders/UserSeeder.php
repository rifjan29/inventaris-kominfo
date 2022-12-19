<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = ['super-admin','admin','anggota'];
        $name = ['Super Admin','Admin','Anggota'];
        for ($i=0; $i < count($name); $i++) {
            User::create([
                'name' => $name[$i],
                'email' => strtolower(str_replace(' ','', $name[$i])).'@mail.com',
                'password' => Hash::make('admin123'),
                'role' => $role[$i],
            ]);
        }
    }
}
