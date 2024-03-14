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
        Schema::create('model_watch', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('watch_id');
            $table->unsignedBigInteger('model_id');
            $table->timestamps();

            // 外部キー制約
            $table->foreign('watch_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade');

            // user_idとfollow_idの組み合わせの重複を許さない
            $table->unique(['model_id', 'watch_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_watch');
    }
};
