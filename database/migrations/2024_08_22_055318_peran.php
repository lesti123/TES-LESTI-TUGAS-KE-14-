<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('peran', function (Blueprint $table) {
            $table->id();
            $table->integer('film_id');
            $table->integer('cast_id');
            $table->string('nama', 45);


        });

    }

    public function down(): void
    {
        Schema::dropIfExists('peran');
    }
};
