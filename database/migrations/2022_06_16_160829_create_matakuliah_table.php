<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('kode',18)->unique();
            $table->string('namaMk', 60);
            $table->string('sks', 3);
            $table->string('harga', 3);
            $table->string('namaDosen', 60);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('matakuliah');
    }
}
