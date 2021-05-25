<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     **/
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->increments('id');
            $table->date('race_date');
            $table->string('winner', 100)->nullable()->default('text');
            $table->string('second_runner', 100)->nullable()->default('text');
            $table->string('third_runner', 100)->nullable()->default('text');
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
        Schema::dropIfExists('races');
    }
}
