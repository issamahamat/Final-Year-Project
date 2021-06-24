<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigInteger("userid")->unsigned();
            $table->string('name');
            $table->string('email');
            $table->bigInteger('phone');
            $table->string('profession');
            $table->string('skillone');
            $table->string('skilltwo');
            $table->string('skillthree');
            $table->string('skillfour');
            $table->string('resume');
            $table->string('website');
            $table->string('protfolio');
            $table->string('languageone');
            $table->string('languagetwo');
            $table->string('languagethree');
            $table->string('nationality');
            $table->string('residence');
            $table->string('state');
            $table->string('city');
            $table->string('zip');
            $table->string('address');
            $table->longtext('aboutme');
            $table->mediumtext('image');
            $table->foreign("userid")->references("id")->on("users")->onDelete("cascade");
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
        Schema::dropIfExists('profiles');
    }
}
