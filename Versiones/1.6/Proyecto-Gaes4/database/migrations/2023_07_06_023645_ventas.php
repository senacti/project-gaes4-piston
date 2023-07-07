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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('Mecanico');
            $table->string('Porcentaje');
            $table->string('MarcaDelVehiculo');
            $table->string('ModeloVehiculo');
            $table->string('Matricula');
            $table->string('Vin');
            $table->string('FechaDeSolicitud');
            $table->text('Servicio'); // Cambia el tipo de dato a 'text'
            $table->text('Producto'); // Cambia el tipo de dato a 'text'
            $table->string('Total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};