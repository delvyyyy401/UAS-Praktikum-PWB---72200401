<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('dosen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nip',18)->unique();
            $table->string('nama', 60);
            $table->string('gender', 6);
            $table->string('no_hp', 30);
            $table->string('email', 50);
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
        Schema::dropIfExists('dosen');
    }
}
