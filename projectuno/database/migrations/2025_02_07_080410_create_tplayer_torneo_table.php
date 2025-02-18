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
        Schema::create('tplayer_torneo', function (Blueprint $table) {
            $table->unsignedBigInteger('tplayer_id')->index();
            $table->string('ttorneo_id')->index();
            $table->primary(['tplayer_id', 'ttorneo_id']);

            $table->foreign('tplayer_id')->references('id')->on('tplayers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ttorneo_id')->references('id')->on('ttorneos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tplayer_torneo');
    }
};
