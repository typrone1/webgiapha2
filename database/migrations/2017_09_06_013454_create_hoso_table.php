<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHosoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoso', function (Blueprint $table) {
            $table->increments('mahoso');
            $table->integer('mahotoc')->unsigned();
            $table->foreign('mahotoc')->references('mahotoc')->on('hotoc');
            $table->integer('mahsbo')->nullable();
            $table->integer('mahsme')->nullable();
            $table->string('hoten');
            $table->date('ngaysinh')->nullable();
            $table->boolean('gioitinh');
            $table->integer('doithu');
            $table->integer('conthu');
            $table->string('quequan');
            $table->string('dantoc')->default('Kinh');
            $table->string('tongiao')->nullable();
            $table->string('quoctich')->default('Việt Nam');
            $table->string('email')->nullable();
            $table->string('sdt')->nullable();
            $table->string('hocvan')->nullable();
            $table->string('nghenghiep')->nullable();
            $table->boolean('damat')->default(false);
            $table->string('noimat')->nullable();
            $table->date('ngaymat')->nullable();
            $table->string('nguoiky');
            $table->string('diachi');
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
        Schema::dropIfExists('hoso');
    }
}
