<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')
            ->updateOrInsert(
                [
                    'id' => 1,
                    'from' => Carbon::createFromTime(12),
                    'to' => Carbon::createFromTime(15),
                    'company_id' => 1,
                    'user_id' => 1,
                ],
            );

        DB::table('bookings')
            ->updateOrInsert(
                [
                    'id' => 2,
                    'from' => Carbon::createFromTime(15),
                    'to' => Carbon::createFromTime(17),
                    'company_id' => 1,
                    'user_id' => 2,
                ],
            );

//        DB::table('bookings')
//            ->updateOrInsert(
//                [
//                    'id' => 3,
//                    'from' => Carbon::createFromTime(19),
//                    'to' => Carbon::createFromTime(18),
//                    'company_id' => 2,
//                    'user_id' => 2,
//                ],
//            );
    }
}
