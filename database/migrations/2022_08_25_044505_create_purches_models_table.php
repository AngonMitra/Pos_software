<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purches_models', function (Blueprint $table) {
            $table->increments("id");
            $table->date("date");
            $table->integer("br_id");
            $table->string("company");
            $table->integer("invoice");
            $table->string("pmodel");
            $table->integer("dis");
            $table->float("disamount");
            $table->float("tamount");
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
        Schema::dropIfExists('purches_models');
    }
}
