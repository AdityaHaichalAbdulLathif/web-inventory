<?php

namespace Database\Seeders;
use App\Models\Jenis;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        Jenis::create([
            'nama_jenis' => 'susu',
        ]);

        Supplier::create([
            'nama_supplier' => 'kima',
            'alamat' => 'Jl.jalan',
            'no_telp' => '899374879',
        ]);
    }
}
