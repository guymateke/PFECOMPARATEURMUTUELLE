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
        Schema::create('offre_mutuelles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description')->nullable;
            $table->string('hospitalisation')->nullable;
            $table->string('dentaire')->nullable;
            $table->string('frais_medicaux')->nullable;
            $table->string('optique')->nullable;
            $table->float('prix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offre_mutuelles');
    }
};
