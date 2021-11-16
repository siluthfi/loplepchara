<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('written_by', 20);
            $table->string('composer', 20);
            $table->foreignId('to_unit', 20)->nullable();
            $table->foreignId('to_subunit', 30)->nullable();
            // $table->foreign('sing_by')->references('unit')->on('aqours');
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
        Schema::dropIfExists('songs');
    }
}
