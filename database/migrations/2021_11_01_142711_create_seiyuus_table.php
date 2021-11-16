<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeiyuusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seiyuus', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('kanji_name', 30);
            $table->string('nickname', 20);
            $table->string('birthday', 30);
            $table->string('height', 15);
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
        Schema::dropIfExists('seiyuus');
    }
}
