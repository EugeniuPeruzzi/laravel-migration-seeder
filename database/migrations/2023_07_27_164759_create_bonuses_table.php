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
        Schema::create('bonuses', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',10);
            $table->string('start_station',50);
            $table->string('end_station',50);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->smallInteger('ticket_code');
            $table->tinyInteger('number_vagons');
            $table->boolean('in_time');
            $table->boolean('canceled');
            $table->date('date');
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
        Schema::dropIfExists('bonus');
    }
};
