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
        Schema::create('withdrawalrequests', function (Blueprint $table) {
            $table->id();
            $table->string('bank')->nullable();
            $table->string('accountname')->nullable();
            $table->string('accountnumber')->nullable();
            $table->decimal('amountUSDT')->nullable();
            $table->decimal('amountPKR')->nullable();
            $table->integer('userid');
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('withdrawalrequests');
    }
};
