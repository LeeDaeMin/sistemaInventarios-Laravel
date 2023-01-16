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
    public function up() {
        Schema::create('historiales', function (Blueprint $table)
        {
            $table->id();
            $table->string('cantidad');
            $table->unsignedBigInteger('id_bodega_origen');
            $table->unsignedBigInteger('id_bodega_destino');
            $table->unsignedBigInteger('id_inventario');
            $table->timestamps();

            $table->foreign('id_bodega_origen')->references('id')
                ->on('bodegas');

            $table->foreign('id_bodega_destino')->references('id')
                ->on('bodegas');

            $table->foreign('id_inventario')->references('id')
                ->on('inventarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historiales');
    }
};
