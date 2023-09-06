<?php

namespace Database\Seeders;

use App\Models\customer\customer_service;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_cs1 = User::create([
            'name' => 'Ima Rahayu',
            'email' => 'imarahayu811@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        customer_service::create([
            'user_id' => $user_cs1->id,
            'kode' => Str::random(5),
            'nama' => $user_cs1->name,
            'alamat' => "-",
            'order_handle' => 0,
            'created_by' => 1
        ]);
        $user_cs1->assignRole('cs');

        $user_cs2 = User::create([
            'name' => 'Piya Handayani',
            'email' => 'piya.handa15@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        customer_service::create([
            'user_id' => $user_cs2->id,
            'kode' => Str::random(5),
            'nama' => $user_cs2->name,
            'alamat' => "-",
            'order_handle' => 0,
            'created_by' => 1
        ]);
        $user_cs2->assignRole('cs');

        $user_cs3 = User::create([
            'name' => 'Nur Asiah Novianti',
            'email' => 'uputsari62@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        customer_service::create([
            'user_id' => $user_cs3->id,
            'kode' => Str::random(5),
            'nama' => $user_cs3->name,
            'alamat' => "-",
            'order_handle' => 0,
            'created_by' => 1
        ]);
        $user_cs3->assignRole('cs');
    }
}
