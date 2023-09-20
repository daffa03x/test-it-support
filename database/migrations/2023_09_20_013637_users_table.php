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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('atasan_id');
            $table->unsignedBigInteger('jabatan_id');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->longText('alamat');
            $table->timestamps();

            $table->foreign('atasan_id')->references('id')->on('atasan');
            $table->foreign('jabatan_id')->references('id')->on('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
