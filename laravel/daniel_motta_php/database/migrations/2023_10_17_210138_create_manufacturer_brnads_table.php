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
        Schema::create('manufacturer_brands', function (Blueprint $table) {
            $table->id('id_brands');
            $table->string('code_manufacturer')->unique();
            $table->string('name_manufacturer');
            $table->unsignedBigInteger('id_country');

            $table->foreign('id_country')->references('id_country')->on('countries');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manufacturer_brnads');
    }
};
