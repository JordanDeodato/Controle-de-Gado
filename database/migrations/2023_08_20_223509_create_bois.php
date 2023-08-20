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
        Schema::create('bois', function (Blueprint $table) {
            $table->id();
            $table->timestamps();            
            $table->integer('identificacao');
            $table->integer('peso')->nullable(); 
            $table->string('animal')->nullable(); 
            $table->integer('idade')->nullable(); 
            $table->string('raca')->nullable(); 
            $table->string('procedencia')->nullable(); 
            $table->integer('precoCompra')->nullable();
            $table->text('vacinas')->nullable(); 
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bois');
    }
};
