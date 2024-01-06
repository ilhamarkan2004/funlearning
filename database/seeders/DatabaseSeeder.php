<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Apps;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $admin = User::factory()->create([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'role' => 'admin',

        ]);
           $admin = User::factory()->create([
            'email' => 'ilhamarkan2004@gmail.com',
            'name' => 'Mohammad Ilham Arkan',
            'role' => 'customer'
,
        ]);
           $admin = User::factory()->create([
            'email' => 'ilhamarkan2004@student.ub.ac.id',
            'name' => 'Akun UB',
            'role' => 'customer'
,
        ]);
        $admin = Apps::factory()->create([
            'nama' => 'Apps 1',
            'harga' => 14000,
            'stok' => 10,
            'kategori' => 'Apps',
            'tipe' => 'Berbayar',
            'deskripsi' => 'dsfsdfsdfsdf',
            'gambar' => 'gaada',
        ]);
       
    }
}
