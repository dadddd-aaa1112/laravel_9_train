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
        Schema::create('likes_tag_likes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('likes_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('likes_id', 'likes_tag_likes_idx');
            $table->index('tag_id', 'likes_tag_tag_idx');

            $table->foreign('likes_id', 'likes_tag_like_fk')->on('likes')->references('id');
            $table->foreign('tag_id', 'likes_tag_tag_fk')->on('tag_likes')->references('id');

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
        Schema::dropIfExists('likes_tag_likes');
    }
};
