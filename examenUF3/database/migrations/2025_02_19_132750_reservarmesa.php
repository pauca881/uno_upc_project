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
        Schema::create('reservar_mesa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comensal_id');
            $table->unsignedBigInteger('mesa_id');
            $table->date('fecha_reserva');  
            $table->timestamps();
        
            $table->foreign('comensal_id')->references('id')->on('comensals')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('mesa_id')->references('id')->on('mesas')
                  ->onUpdate('cascade')->onDelete('cascade');
            
            $table->unique(['comensal_id', 'mesa_id', 'fecha_reserva']);  
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
