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
        Schema::create('g_p_s_entries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("user");
            $table->double("latitude")->nullable();
            $table->double("longitude")->nullable();
            $table->integer("satellite_count")->nullable();
            $table->string("description")->nullable();
            $table->double("altitude")->nullable();
            $table->double("accuracy")->nullable();
            $table->double("direction")->nullable();
            $table->string("provider")->nullable();
            $table->double("speed")->nullable();
            $table->integer("timestamp")->nullable();
            $table->string("timeoffset")->nullable();
            $table->string("time")->nullable();
            $table->string("date")->nullable();
            $table->integer("starttimestamp")->nullable();
            $table->integer("battery_level")->nullable();
            $table->boolean("is_charging")->nullable();
            $table->string("android_id")->nullable();
            $table->string("build_serial")->nullable();
            $table->string("filename")->nullable();
            $table->string("profile")->nullable();
            $table->string("horizontal_dilution")->nullable();
            $table->string("vertical_dilution")->nullable();
            $table->string("positional_dilution")->nullable();
            $table->double("distance")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g_p_s_entries');
    }
};
