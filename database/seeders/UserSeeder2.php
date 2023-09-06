<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_sales = Role::create(['name' => 'sales']);
        $role_spv = Role::create(['name' => 'spv']);
        $role_kabag = Role::create(['name' => 'kepala bagian']);


        $user_sa_1 = User::create([
            'name' => 'Imam Maulana',
            'email' => 'chimandsky@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user_sa_1->assignRole('super admin');

        $user_sa_2 = User::create([
            'name' => 'Randy Maison Ilyas',
            'email' => 'randymaisonilyas@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user_sa_2->assignRole('super admin');

        $user_sa_3 = User::create([
            'name' => 'Tan William In Way',
            'email' => 'w3w3yds@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user_sa_3->assignRole('super admin');



        $user_sales = User::create([
            'name' => 'Ahmad Faiq',
            'email' => 'ahmetbahassan502@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user_sales->assignRole($role_sales);

        $user_sales2 = User::create([
            'name' => 'Tri Astuti',
            'email' => 'trismunsa@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user_sales2->assignRole($role_sales);

        $user_spv = User::create([
            'name' => 'Muhamad Muslikin',
            'email' => 'muh.muslikin11@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user_spv->assignRole($role_spv);

        $user_admin = User::create([
            'name' => 'Arneta Fitri Anbiya',
            'email' => 'arnetafitri6@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user_admin->assignRole('admin');

        $user_kabag = User::create([
            'name' => 'Ricky Agung Setiawan',
            'email' => 'rickyagungs09@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user_kabag->assignRole($role_kabag);
    }
}
