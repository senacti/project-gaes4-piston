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
    Schema::create('clientes', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('identificacion');
        $table->string('nombres', 50);
        $table->date('fecha_de_nacimiento');
        $table->string('direccion', 50);
        $table->unsignedBigInteger('telefono');
        $table->string('email', 50);
        $table->string('ciudad', 50);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
        
    }

 
};
