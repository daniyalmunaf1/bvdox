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
        Schema::create('ptoo_p_accs', function (Blueprint $table) {
            $table->id();
            $table->string('accountname');
            $table->string('accountnumber');
            $table->string('bank');
            $table->string('easypaisa');
            $table->string('banktransfer');
            $table->string('jazzcash');
            $table->string('upaisa');
            $table->decimal('amountpkr');
            $table->decimal('usdt');
            $table->decimal('min');
            $table->decimal('max');
            $table->integer('stars');
            $table->string('status')->nullable();
            $table->integer('userid')->nullable();
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
        Schema::dropIfExists('ptoo_p_accs');
    }
};
