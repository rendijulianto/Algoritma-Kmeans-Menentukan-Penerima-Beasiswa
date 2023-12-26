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
        Schema::create('hasil_centroid', function (Blueprint $table) {
            $table->id();
            $table->string('c1a', 50)->nullable();
            $table->string('c1b', 50)->nullable();
            $table->string('c1c', 50)->nullable();
            $table->string('c1d', 50)->nullable();
            $table->string('c1e', 50)->nullable();
            $table->string('c1f', 50)->nullable();
            $table->string('c2a', 50)->nullable();
            $table->string('c2b', 50)->nullable();
            $table->string('c2c', 50)->nullable();
            $table->string('c2d', 50)->nullable();
            $table->string('c2e', 50)->nullable();
            $table->string('c2f', 50)->nullable();
            $table->string('c3a', 50)->nullable();
            $table->string('c3b', 50)->nullable();
            $table->string('c3c', 50)->nullable();
            $table->string('c3d', 50)->nullable();
            $table->string('c3e', 50)->nullable();
            $table->string('c3f', 50)->nullable();
            $table->integer('iterasi');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->timestamps();
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_centroid');
    }
};
