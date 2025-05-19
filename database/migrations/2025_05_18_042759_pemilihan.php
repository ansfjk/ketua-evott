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
        Schema::create('pemilihan', function (Blueprint $table) {
            $table->id('pemilih_id');
            $table->foreignId('users_id')->constrained('users','users_id')->onDelete('cascade'); // Admin only
            $table->enum('jenis_pemilihan', ['osis', 'ketua_kelas']);
            $table->string('nama_pemilihan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemilihan');
    }
};
