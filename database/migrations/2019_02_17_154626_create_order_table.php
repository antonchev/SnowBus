<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string("id_num");
            $table->text("trip");
            $table->text("f_Name");
            $table->text("l_Name");
            $table->string("d_phone");
            $table->text("stuf");
            $table->text("fSize");
            $table->text("foot");
            $table->text("ekip");
            $table->text("teacher");
            $table->text("about");
            $table->text("report");
            $table->boolean("pay");
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
        Schema::dropIfExists('order');
    }
}
