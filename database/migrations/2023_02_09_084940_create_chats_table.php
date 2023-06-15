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
        Schema::create('chats', function (Blueprint $table) {
            $table->string('idChat', 15)->primary();
            $table->text('isi')->nullable();
            $table->dateTime('tanggal');
            $table->string('sender_id', 25);
            $table->string('receiver_id', 25);
            $table->string('gambar', 100)->nullable();
            $table->string('is_admin', 10)->default('salah');
            $table->foreign('sender_id')->references('idUser')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('receiver_id')->references('idUser')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('chats');
    }
};
