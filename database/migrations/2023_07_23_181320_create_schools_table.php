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
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('m_number')->nullable();
            $table->string('scool_name')->nullable();
            $table->string('sector')->nullable();
            $table->string('district')->nullable();
            $table->string('num_gov')->nullable();
            $table->string('stage')->nullable();
            $table->string('authority')->nullable();
            $table->string('edu_office')->nullable();
            $table->string('gender')->nullable();
            $table->string('type_sch')->nullable();
            $table->string('type_edu')->nullable();
            $table->string('mangers_name')->nullable();
            $table->string('num_chapters')->nullable();
            $table->string('num_students')->nullable();
            $table->string('density')->nullable();
            $table->string('teachers')->nullable();
            $table->string('tec_ksa')->nullable();
            $table->string('administ')->nullable();
            $table->string('school_autonomy')->nullable();
            $table->string('year_founded')->nullable();
            $table->string('number_mang')->nullable();
            $table->string('number_agent')->nullable();
            $table->string('store_1')->nullable();
            $table->string('store_2')->nullable();
            $table->string('building_model')->nullable();
            $table->string('factor_1')->nullable();
            $table->string('factor_2')->nullable();
            $table->string('type_autonomy')->nullable();
            $table->string('basic_school')->nullable();
            $table->string('school_faraway')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('school_sys')->nullable();
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
        Schema::dropIfExists('schools');
    }
};
