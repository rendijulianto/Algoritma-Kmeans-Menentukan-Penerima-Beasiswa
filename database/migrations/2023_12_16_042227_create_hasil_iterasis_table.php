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
        Schema::create('hasil_iterasi', function (Blueprint $table) {
            $table->id();
            $table->integer('iterasi');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->string('c1', 50);	
            $table->string('c2', 50);
            $table->string('c3', 50);
            $table->string('rata_rata', 50);
            $table->timestamps();
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_iterasi');
    }
};
