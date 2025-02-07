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
        Schema::create('player_torneo', function (Blueprint $table) {
            $table->integer('id_player')->index();
            $table->integer('id_torneo')->index();
            $table->primary(['id_player', 'id_torneo']);

            $table->foreign('id_player')->references('id')->on('tplayers')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_torneo')->references('id')->on('ttorneos')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_torneo');
    }
};
