<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mascota', function (Blueprint $table) {
            $table->id();


            $table->string('nombre');
            $table->string('raza');
            $table->string('color');
            $table->foreignId('persona_id')->constrained('personas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mascota');
    }
};
