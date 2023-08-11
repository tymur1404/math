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
        Schema::create('server_responses', function (Blueprint $table) {
            $table->id();
            $table->text('value');
            $table->enum('rank', ['High', 'Middle', 'Low']);
            $table->enum('status', ['Created', 'InProgress', 'Completed', 'Error']);
            $table->unsignedBigInteger('calculation_id');

            $table->foreign('calculation_id')->references('id')->on('calculations');

            /**
             * if we have several servers, then we can add the server_id field and create a table servers
             */
//            $table->unsignedBigInteger('server_id');
//            $table->foreign('server_id')->references('id')->on('servers');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_responses');
    }
};
