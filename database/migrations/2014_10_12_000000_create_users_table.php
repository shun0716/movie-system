<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id',255)->primary();
            $table->string('display_name',255);
            $table->string('mail',255);
            $table->string('password',255);
            $table->string('salt',255);
            $table->integer('stretch');
            $table->integer('user_state');
            $table->string('hash_id');
            $table->string('image_path')->default('img/mypage.png');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
