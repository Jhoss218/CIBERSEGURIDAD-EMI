<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('paterno')->nullable();
            $table->string('materno')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedTinyInteger('ano_nacimiento');
            $table->text('universidad')->nullable();
            $table->unsignedBigInteger('telefono')->nullable();
            $table->string('genero')->default('m');
            $table->foreignId('ciudad_id')->constrained('ciudades')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('pais_id')->constrained('paises')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('carrera_id')->nullable()->constrained('carreras')->onUpdate('cascade')->onDelete('restrict');

            $table->rememberToken();
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
}
