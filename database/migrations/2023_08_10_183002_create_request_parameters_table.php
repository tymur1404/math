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
        Schema::create('request_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->float('value');
            $table->unsignedBigInteger('calculation_id');

            $table->foreign('calculation_id')->references('id')->on('calculations');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_parameters');
    }
};
