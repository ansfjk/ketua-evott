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
        Schema::create('calon', function (Blueprint $table) {
            $table->id('calon_id');
            $table->foreignId('users_id')->constrained('users','users_id')->onDelete('cascade');
            // $table->foreignId('request_id')->constrained('calon_request')->onDelete('cascade');
            $table->foreignId('pemilih_id')->constrained('pemilihan','pemilih_id')->onDelete('cascade');
            $table->integer('img_calon')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon');
    }
};
