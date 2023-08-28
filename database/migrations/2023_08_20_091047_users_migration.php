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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mail');
            $table->string('password');
            $table->string('tgChatId');
            $table->string('token');
            $table->boolean('isVerified');
            $table->unsignedBigInteger('usersRoleId');
            $table->foreign('usersRoleId')->references('id')->on('usersRole');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
