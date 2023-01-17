<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additionals', function (Blueprint $table) {
            $table->id();
            $table->integer('main_additional_id');
            $table->integer('sub_category_id');
            $table->string('name');
            $table->integer('price');
            $table->string('size_measurement')->nullable();
            $table->string('photo_one')->nullable();
            $table->string('photo_two')->nullable();
            $table->string('photo_three')->nullable();
            $table->string('photo_four')->nullable();
            $table->string('photo_five')->nullable();
            $table->string('photo_six')->nullable();
            $table->string('photo_seven')->nullable();
            $table->string('photo_eight')->nullable();
            $table->string('photo_nine')->nullable();
            $table->string('photo_ten')->nullable();
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
        Schema::dropIfExists('additionals');
    }
}
