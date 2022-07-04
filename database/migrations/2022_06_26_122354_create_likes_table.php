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
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('desc');
            $table->timestamps();

            $table->softDeletes();

            $table->unsignedBigInteger('whoLikes_id')->nullable();
            $table->index('whoLikes_id', 'likes_whoLikes_idx');
            $table->foreign('whoLikes_id', 'likes_whoLikes_fk')->on('who_likes')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
};
