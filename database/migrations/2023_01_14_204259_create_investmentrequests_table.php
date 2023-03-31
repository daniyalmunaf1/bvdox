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
        Schema::create('investmentrequests', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount')->nullable();
            $table->decimal('tamount')->nullable();
            $table->string('ss')->nullable();
            $table->string('tid')->nullable();
            $table->integer('userid');
            $table->string('name');
            $table->string('email');
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
        Schema::dropIfExists('investmentrequests');
    }
};
