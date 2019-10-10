<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMearsurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mearsurements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id');
            $table->double('length', 5, 2);
            $table->double('teera', 5, 2);
            $table->double('bazo', 5, 2);
            $table->double('Chaati', 5, 2);
            $table->double('Ghaira', 5, 2);
            $table->double('Gala', 5, 2);
            $table->double('Shilwar', 5, 2);
            $table->double('Panja', 5, 2);
            $table->boolean('front_pocket');
            $table->boolean('side_pocket');
            $table->boolean('shilwar_pocket');
            $table->string('calar_type');
            $table->string('kaf_type');
            $table->string('gheera_type');
            $table->string('Mondha');
            $table->bigInteger('front_button');
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
        Schema::dropIfExists('mearsurements');
    }
}
