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
        Schema::create('users', function (Blueprint $table) {
            // $table->id();
            $table->string('idUser', 25)->primary();
            $table->string('namaPengguna', 55);
            $table->string('jenisKelamin', 15)->nullable();
            $table->string('username', 35);
            $table->string('password', 70);
            $table->string('key');
            $table->string('alamat', 100);
            $table->enum('userRole', ['admin', 'pemilik', 'user'])->default('user');
            $table->string('gambar', 35)->nullable();
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
        Schema::dropIfExists('users');
    }
};
