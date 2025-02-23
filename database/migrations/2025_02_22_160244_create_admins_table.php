<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('id_admin'); // Primary Key Auto Increment
            $table->string('nama_admin', 150);
            $table->string('alamat', 255);
            $table->string('username', 100)->unique();
            $table->string('password', 255);
        });
    }

    public function down() {
        Schema::dropIfExists('admins');
    }
};
