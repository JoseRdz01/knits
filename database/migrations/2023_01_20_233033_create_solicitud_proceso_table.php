<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_proceso', function (Blueprint $table) {
            $table->id();
            $table->integer('clave')->unique();
            $table->json('items')->nullable();
            $table->integer('total_item')->nullable();
            $table->double('costo', 8, 2);
            $table->timestamp('fecha_produccion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_proceso');
    }
};
