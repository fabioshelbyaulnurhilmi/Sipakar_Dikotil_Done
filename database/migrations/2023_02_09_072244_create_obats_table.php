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
        Schema::create('obats', function (Blueprint $table) {
            // $table->id();
            $table->string('idObat', 10)->primary();
            $table->string('idPenyakit', 10);
            $table->string('namaObat', 50);
            $table->string('gambarObat', 45)->nullable();
            $table->text('cara');
            $table->string('jenis', 50);
            $table->text('khasiat');
            $table->foreign('idPenyakit')->references('idPenyakit')->on('penyakits')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('obats');
    }
};
