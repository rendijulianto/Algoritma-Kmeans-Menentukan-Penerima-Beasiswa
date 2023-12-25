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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('jurusan', 255);
            $table->integer('pekerjaan_ayah');
            $table->integer('pekerjaan_ibu');
            $table->integer('penghasilan_ayah');
            $table->integer('penghasilan_ibu');
            $table->integer('jumlah_saudara');
            $table->integer('kondisi_anak');
            $table->boolean('status_penerima_beasiswa')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
