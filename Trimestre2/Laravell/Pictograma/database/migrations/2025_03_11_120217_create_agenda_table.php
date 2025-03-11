<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedBigInteger('idpersona');
            $table->unsignedBigInteger('idimagen');
            $table->timestamps();
            $table->foreign('idpersona')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idimagen')->references('id')->on('imagenes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agenda');
    }
};
