<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tip');
            $table->integer('size');
            $table->integer('type');
            $table->date('manufacture_date');
            $table->boolean('display');
            $table->boolean('charge');
            $table->boolean('oxygen');
            $table->boolean('cardiogram');
            $table->boolean('doubletap');
            $table->boolean('detection');
            $table->boolean('skin_temperature');
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
        Schema::dropIfExists('watches');
    }
};
