<?php

namespace Database\Seeders;

use App\Models\Penduduk;
use App\Models\User;
use App\Models\VirtualAccount;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        VirtualAccount::create(["tagihan" => 0]);
        VirtualAccount::create(["tagihan" => 0]);
        VirtualAccount::create(["tagihan" => 0]);

        Penduduk::create([
            "nik" => "123456789012",
            "nama_peserta" => "Arif Kurniawan",
            "jenis_peserta" => "jenis_peserta",
            "tanggal_lahir" => "2007-01-24",
            "active" => 1,
            "virtual_account_id" => 1,
            "nomor_handphone" => "085604618040"
        ]);
    }
}
