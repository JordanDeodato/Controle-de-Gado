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
        Schema::create('bezerros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('brinco');
            $table->string('cor_brinco')->nullable();
            $table->string('sexo')->nullable();
            $table->string('procedencia')->nullable();
            $table->string('mae')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('raca')->nullable();
            $table->integer('peso_nascimento')->nullable();
            $table->integer('peso_atual')->nullable();
            $table->integer('peso_desmame')->nullable();
            $table->string('preco_compra')->nullable();
            $table->string('desmame')->nullable();
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
        Schema::dropIfExists('bezerros');
    }
};
