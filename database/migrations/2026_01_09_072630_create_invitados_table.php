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
        Schema::create('invitados', function (Blueprint $table) {
            $table->id();
            $table->text('familia');
            $table->integer('miembros_contemplados');
            $table->boolean('invitacion_enviada')->nullable();
            $table->boolean('confirmacion')->nullable();
            $table->integer('miembros_confirmados')->nullable();
            $table->text('notas')->nullable();
            $table->text('contacto');
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
        Schema::dropIfExists('invitados');
    }
};
