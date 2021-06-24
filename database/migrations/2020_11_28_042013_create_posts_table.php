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
          $table->bigIncrements('post_id');
          $table->string('post_title');
          $table->string("company");
          $table->string("location");
          $table->double("salary");
          $table->string("schedule");
          $table->longtext("description");
          $table->longtext("requirements");
          $table->string("post_type");
          $table->bigInteger("post_user")->unsigned();
          $table->foreign("post_user")->references("id")->on("users")->onDelete("cascade");
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
        Schema::dropIfExists('posts');
    }
}
