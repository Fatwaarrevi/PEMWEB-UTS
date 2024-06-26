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
        Schema::create('Beasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); 
            $table->string('nomor_pendaftaran')->unique();
            $table->string('email')->unique();
            $table->string('program_studi');
            $table->string('jenis_beasiswa'); 
            $table->string('gelombang_penerimaan'); 
            $table->string('status_beasiswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Beasiswa');
    }
};