<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')
            ->updateOrInsert(
                [
                    'id' => 1,
                    'name' => 'Belgrade',
                    'country_id' => 1,
                ],
            );

        DB::table('cities')
            ->updateOrInsert(
                [
                    'id' => 2,
                    'name' => 'Moscow',
                    'country_id' => 2,
                ],
            );


        DB::table('cities')
            ->updateOrInsert(
                [
                    'id' => 3,
                    'name' => 'Novi Sad',
                    'country_id' => 1,
                ],
            );
    }
}
