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
        Schema::create('tplayers', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('surname');
            $table->string('username')->unique();
            $table->integer('id_partida')->index();

            $table->primary(['id']);
            $table->foreign('id_partida')->references('id')->on('tpartidas')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tplayers');
    }
};
