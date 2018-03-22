<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('chasis');
            $table->string('vin');
            $table->string('rego');
            $table->string('rego_type');
            $table->date('rego_due');
            $table->string('rego_club');
            $table->string('ins_company');
            $table->date('ins_date_due');
            $table->string('engine_oil');
            $table->string('gb_oil');
            $table->string('diff_oil');
            $table->string('brake_fluid');
            $table->string('radiator');
            $table->string('shock_oil');
            $table->string('steering');
            $table->string('one_shot_lube');
            $table->string('cold_tyre_pressure');
            $table->string('oil_filter');
            $table->string('fuel_filter');
            $table->string('front_brake');
            $table->string('rear_brake');
            $table->string('headlight');
            $table->string('taillight');
            $table->string('brakelight');
            $table->text('description');
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
        //
    }
}
