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
        Schema::create('admins', function (Blueprint $table) {
            $table->integer('IdAdmin')->autoIncrement()->primary();
            $table->string('nama',100);
            $table->string('alamat',100);
            $table->string('telepon',13);
            $table->string('username',100);
            $table->string('password',250);
            $table->enum('akses',['admin','petugas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
