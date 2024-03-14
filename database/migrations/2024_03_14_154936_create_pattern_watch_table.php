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
        Schema::create('pattern_watch', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('watch_id');
            $table->unsignedBigInteger('pattern_id');
            $table->timestamps();

            // 外部キー制約
            $table->foreign('watch_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('pattern_id')->references('id')->on('patterns')->onDelete('cascade');

            // user_idとfollow_idの組み合わせの重複を許さない
            $table->unique(['pattern_id', 'watch_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pattern_watch');
    }
};
