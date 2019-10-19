<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('employee_id');
            $table->bigInteger('suitqty')->nullable();
            $table->bigInteger('shirtqty')->nullable();
            $table->bigInteger('pantqty')->nullable();
            $table->double('suitprice',5,2)->nullable();
            $table->double('shirtprice',5,2)->nullable();
            $table->double('pentprice',5,2)->nullable();
            $table->double('totalprice',5,2)->nullable();
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
        Schema::dropIfExists('work_histories');
    }
}
