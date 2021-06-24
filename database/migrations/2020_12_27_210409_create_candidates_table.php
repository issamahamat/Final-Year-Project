<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('userid')->unsigned();
            $table->bigInteger('postid')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->bigInteger('phone');
            $table->string('resume');
            $table->string('website');
            $table->string('state');
            $table->string('city');
            $table->string('zip');
            $table->string('address');
            $table->foreign("userid")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("postid")->references("post_id")->on("posts")->onDelete("cascade");
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
        Schema::dropIfExists('candidates');
    }
}
