<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->text('description')->nullable();
            $table->text('thumb');
            $table->string('powers')->nullable();
            $table->string('first_appearance', 150)->nullable();
            $table->string('alias', 50)->nullable();
            $table->string('series', 50)->nullable();
            $table->string('aka')->nullable();
            $table->string('facebook')->nullable();
            $table->string('base', 100)->nullable();
            $table->string('occupation', 150)->nullable();
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
        Schema::dropIfExists('characters');
    }
}
