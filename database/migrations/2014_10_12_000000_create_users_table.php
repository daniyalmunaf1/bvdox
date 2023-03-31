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
            $table->increments('id');
            $table->string('name');
            $table->string('number');
            $table->string('country')->nullable();
            $table->decimal('investment')->nullable();
            $table->decimal('ltinvestment')->nullable();
            $table->decimal('ltearnings')->nullable();
            $table->decimal('teamprofitbonus')->nullable();
            $table->decimal('teaminvestment')->nullable();
            $table->decimal('ltwithdrawal')->nullable();
            $table->decimal('profit')->nullable();
            $table->decimal('rewardincome')->nullable();
            $table->decimal('referralearnings')->nullable();
            $table->bigInteger('referrals')->nullable();
            $table->bigInteger('totalreferrals')->nullable();
            $table->integer('notification')->nullable();
            $table->integer('numberofwithdrawals')->nullable();
            $table->integer('now')->nullable();
            $table->integer('lud')->nullable();
            $table->string('package')->nullable();
            $table->string('email')->unique();
            $table->string('ref_email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->dateTime('lastprofit')->nullable();
            $table->integer('nOfDeposit')->nullable();
            $table->integer('ownership')->nullable();
            // $table->dateTime('lastuseradded');
            // $table->integer('deactivate');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
