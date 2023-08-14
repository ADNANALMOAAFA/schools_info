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
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name_mang')->nullable();
            $table->string('sex')->nullable();
            $table->string('dirct')->nullable();
            $table->string('pyr')->nullable();
            $table->string('l')->nullable();
            $table->string('w')->nullable();
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
        Schema::dropIfExists('offices');
    }
};
