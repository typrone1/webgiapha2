<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongviecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congviec', function (Blueprint $table) {
            $table->increments('manghenghiep');
            $table->integer('mahoso')->unsigned();
            $table->foreign('mahoso')->references('mahoso')->on('hoso');
            $table->string('tgtu');
            $table->string('tgden');
            $table->string('chucvu');
            $table->string('noicongtac');
            $table->string('ghichu')->nullable();
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
        Schema::dropIfExists('congviec');
    }
}
