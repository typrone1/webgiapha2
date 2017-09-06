<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVcHosoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vchoso', function (Blueprint $table) {
            $table->increments('mahoso');
            $table->integer('mahosovc')->unsigned();
            $table->foreign('mahosovc')->references('mahoso')->on('hoso');
            $table->string('hoten');
            $table->boolean('gioitinh');
            $table->string('hotenbo');
            $table->string('hotenme');
            $table->integer('conthu')->nullable();

            $table->date('ngaysinh')->nullable();
            $table->string('quequan');
            $table->string('dantoc')->default('Kinh');
            $table->string('tongiao')->nullable();
            $table->string('quoctich')->default('Việt Nam');
            $table->string('email')->nullable();
            $table->string('sdt')->nullable();
            $table->string('hocvan')->nullable();
            $table->string('nghenghiep')->nullable();
            $table->boolean('damat')->default(false);;
            $table->date('ngaymat')->nullable();
            $table->string('noiantang')->nullable();
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
        Schema::dropIfExists('vchoso');
    }
}
