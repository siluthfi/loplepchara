<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('kanji_name', 20);
            $table->string('slug', 20);
            $table->foreignId('seiyuu_id', 20);
            $table->foreignId('unit_id', 20);
            $table->foreignId('subunit_id', 20);
            $table->string('grade', 20);
            $table->string('birthday', 30);
            $table->string('height', 10);
            $table->string('divcolor', 30);
            $table->text('desc');
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
        Schema::dropIfExists('charas');
    }
}
