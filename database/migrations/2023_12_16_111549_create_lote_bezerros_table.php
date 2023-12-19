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
        Schema::create('lote_bezerros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lote_id');
            $table->unsignedBigInteger('bezerro_id');
            $table->timestamps();

            $table->foreign('lote_id')->references('id')->on('lotes')->onDelete('cascade');
            $table->foreign('bezerro_id')->references('id')->on('bezerros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lote_bezerros');
    }
};
