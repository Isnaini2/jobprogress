<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sdm
        // tpb
        // umum
        // pbau
        // it
        // keuangan
        // pelkap
        // manager
        // asisten manager

        $name = [
            'User sdm', 'User tpb', 'User umum', 'User pbau', 'User it', 'User keuangan', 'User pelkap', 'User manager', 'User asisten manager'
        ];

        $email = [
            'sdm@gmail.com', 'tpb@gmail.com', 'umum@gmail.com', 'pbau@gmail.com', 'it@gmail.com', 'keuangan@gmail.com', 'pelkap@gmail.com', 'manager@gmail.com', 'asistenmanager@gmail.com'
        ];

        $role = [
            'sdm', 'tpb', 'umum', 'pbau', 'it', 'keuangan', 'pelkap', 'manager', 'asistenmanager'
        ];

        for ($i = 0; $i < count($name); $i++) {
            User::create([
                'name' => $name[$i],
                'email' => $email[$i],
                'role' => $role[$i],
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
