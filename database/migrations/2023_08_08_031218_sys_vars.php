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
        Schema::create('sys_vars', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name')->nullable();
            $table->string('static_id')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('desc')->nullable();
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
};
