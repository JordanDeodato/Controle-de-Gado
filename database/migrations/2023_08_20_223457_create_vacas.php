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
        Schema::create('vacas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('identificacao');
            $table->integer('peso')->nullable(); 
            $table->string('animal')->nullable(); 
            $table->string('category')->nullable(); 
            $table->string('prenha')->nullable(); 
            $table->integer('idade')->nullable(); 
            $table->string('raca')->nullable(); 
            $table->integer('crias')->nullable();
            $table->string('procedencia')->nullable(); 
            $table->integer('precoCompra')->nullable();
            $table->date('data_primeira_cria')->nullable();
            $table->date('data_ultima_cria')->nullable();
            $table->date('data_desmame')->nullable();
            $table->text('vacinas')->nullable(); 
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacas');
    }
};
