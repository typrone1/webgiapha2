<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVcHocvanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vchocvan', function (Blueprint $table) {
            $table->increments('mahocvan');
            $table->integer('mahoso')->unsigned();
            $table->foreign('mahoso')->references('mahoso')->on('vchoso');
            $table->string('tgtu');
            $table->string('tgden');
            $table->string('hoctai');
            $table->string('congviec');
            $table->string('ghichu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vchocvan');
    }
}
