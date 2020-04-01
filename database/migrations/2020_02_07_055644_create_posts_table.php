<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->integer('id',20);
            
            $table->timestamp('post_date');
            $table->text('post_content');
            $table->text('post_title');
            $table->string('post_status',20)->nullable();
            $table->string('post_name',200);
            $table->string('post_type');
            $table->text('post_category')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('post_author');
            //$table->binary('image');
         

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
