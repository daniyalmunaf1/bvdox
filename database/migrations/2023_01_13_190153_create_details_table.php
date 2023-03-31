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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->integer('usdtprice');
            $table->integer('minwithdrawal');
            $table->bigInteger('companyTO');
            $table->bigInteger('totalInvestment');
            $table->bigInteger('totalWithdrawal');
            $table->integer('trcCharge');
            $table->string('wallet');
            $table->string('qrcode');
            $table->integer('wtbr');
            $table->integer('activate');
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
        Schema::dropIfExists('details');
    }
};
