<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->text('f_name');
            $table->text('l_name');
            $table->text('email');
            $table->text('mobile_no');
            $table->text('gender');
            $table->text('timezone');
            $table->text('city_residence');
            $table->date('pre_date');
            $table->time('pre_time');
            $table->integer('counsellor_id');
            $table->integer('services');
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
        Schema::dropIfExists('bookings');
    }
}
