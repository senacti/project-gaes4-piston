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
        Schema::create('productos', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('NOMBRE_PRODUCTO');
            $table->string('CANTIDAD_PRODUCTO');
            $table->string('DESCRIPCION');
            $table->integer('ID_CATEGORIA_DE_PRODUCTOS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
