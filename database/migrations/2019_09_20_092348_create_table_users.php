<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('command_id');
            $table->string('name');
            $table->boolean('status')->default('0');
            $table->string('slug');
            $table->string('email');
            $table->integer('phone');
            $table->string('password');
            $table->boolean('is_admin')->default(0);
            $table->string('img');
            $table->timestamps();
            $table->softDeletes()->nullable();
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
