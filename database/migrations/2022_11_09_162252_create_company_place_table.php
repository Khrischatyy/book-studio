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
        Schema::create('company_place', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');

            $table->unsignedBigInteger('place_id');

            $table->foreign('company_id')->references('id')->on('companies')
                ->onDelete('cascade');

            $table->foreign('place_id')->references('id')->on('places')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_place');
    }
};
