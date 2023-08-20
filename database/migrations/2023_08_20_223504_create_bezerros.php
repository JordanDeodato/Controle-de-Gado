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
            $table->integer('identificacao');
            $table->integer('peso')->nullable(); 
            $table->string('animal')->nullable(); 
            $table->integer('idade')->nullable(); 
            $table->string('raca')->nullable(); 
            $table->unsignedBigInteger('mae_id')->nullable();            
            $table->integer('peso_nasc')->nullable();
            $table->integer('peso_desmame')->nullable(); 
            $table->text('vacinas')->nullable(); 
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
