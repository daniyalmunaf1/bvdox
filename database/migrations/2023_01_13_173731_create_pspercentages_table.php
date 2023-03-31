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
        Schema::create('pspercentages', function (Blueprint $table) {
            $table->id();
            $table->float('lvl1');
            $table->float('lvl2');
            $table->float('lvl3');
            $table->float('lvl4');
            $table->float('lvl5');
            $table->float('lvl6');
            $table->float('lvl7');
            $table->float('lvl8');
            $table->float('lvl9');
            $table->float('lvl10');
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
        Schema::dropIfExists('pspercentages');
    }
};
