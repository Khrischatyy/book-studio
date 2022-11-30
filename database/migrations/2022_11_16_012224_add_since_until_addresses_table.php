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
        Schema::table('addresses', function (Blueprint $table) {
            $table->unsignedBigInteger('city_id')->after('entrance');
            $table->foreign('city_id')->references('id')->on('cities')
                ->onDelete('cascade');

//TODO choose needed format and delete this fucking piece of shit

            $table->time('works_sinceTime');
            $table->date('works_tillDate');
            $table->timestamp('works_till1TimeStamp');
            $table->dateTime('works_till2DateTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign('addresses_city_id_foreign');
            $table->dropColumn('city_id');

            $table->dropColumn('works_sinceTime');
            $table->dropColumn('works_tillDate');
            $table->dropColumn('works_till1TimeStamp');
            $table->dropColumn('works_till2DateTime');
        });
    }
};
