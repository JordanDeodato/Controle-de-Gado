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
        Schema::create('touros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('brinco');
            $table->string('cor_brinco')->nullable();
            $table->integer('peso_atual')->nullable();
            $table->string('procedencia')->nullable();
            $table->string('raca')->nullable();
            $table->string('preco_compra')->nullable();
            $table->string('mae')->nullable();
            $table->string('fazenda')->nullable();
            $table->text('vacinas')->nullable();
            $table->text('observacoes')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('touros');
    }
};
