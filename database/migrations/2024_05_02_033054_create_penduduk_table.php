<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->string("nik")->unique();
            $table->string("nama_peserta");
            $table->string("nomor_handphone", 13);
            $table->string("jenis_peserta");
            $table->date("tanggal_lahir");
            $table->boolean("active");
            $table->foreignId("virtual_account_id")->references("id")->on("virtual_accounts");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk_migration');
    }
};
