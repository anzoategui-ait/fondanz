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
        Schema::create('ejercicios', function (Blueprint $table) {
            $table->id();
            $table->integer('ejercicio_year');
            $table->decimal('ejercicio_unidad_tributaria', 8, 2);
            $table->decimal('ejercicio_unidad_minima', 8, 2);
            $table->decimal('ejercicio_unidad_maxima', 8, 2);
            $table->date('ejercicio_cierre');
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
        Schema::dropIfExists('ejercicios');
    }
};
