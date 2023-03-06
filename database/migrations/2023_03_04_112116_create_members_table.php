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
        Schema::create('members', function (Blueprint $table) {
            $table->id('member_id');
            $table->string('name');
            $table->string('email');
            $table->string('contact', 11);
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('group_id')->on('group');
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
        Schema::dropIfExists('members');
    }
};
// Hello Folks!!!!

// Codobux is urgently hiring for PHP Developer #laraveldeveloper

// #Experience : 1+years
// #Workfromoffice
// #Location : Quark Atrium, Phase 8b, Mohali, Punjab.

// Interested ones can share their #CV at tanvi@codobux.com

// #References are much appreciated.

// #applynow #immediatejoiner #developer #php #phpdeveloper #laraveldeveloper #framework #mohali #wfo #tricityjobs
