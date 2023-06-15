<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gejalas', function (Blueprint $table) {
            // $table->id();
            $table->string('idGejala', 10)->primary();
            $table->string('namaGejala', 255);
            $table->string('gambarGejala', 45)->nullable();
            $table->string('gambarGejala2', 45)->nullable();
            $table->string('gambarGejala3', 45)->nullable();
            $table->string('key');
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
        Schema::dropIfExists('gejalas');
    }
};
