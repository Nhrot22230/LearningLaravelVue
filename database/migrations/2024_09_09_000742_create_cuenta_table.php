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
        Schema::create('cuenta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rol')->nullable();
            $table->string('usuario', 20)->nullable();
            $table->string('password', 100);
            $table->decimal('saldo');
            
            // Definir claves foráneas
            $table->foreign('rol')->references('id')->on('rol')->onDelete('set null');
            $table->foreign('usuario')->references('dni')->on('usuario')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuenta');
    }
};
