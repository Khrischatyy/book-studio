<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')
            ->updateOrInsert(
                [
                    'id' => 1,
                    'street' => 'Газетный переулок',
                    'latitude' => 37.609337,
                    'longitude' => 55.758972,
                    'house_number' => '1',
                    'entrance' => 1,
                    'city_id' => 1,
                    'company_id' => 1,
                    'works_since' => '10:00:00',
                    'works_till' => '18:00:00',
                ],
            );

        DB::table('addresses')
            ->updateOrInsert(
                [
                    'id' => 2,
                    'street' => 'Сербская улица',
                    'latitude' => 20.386438,
                    'company_id' => 1,
                    'longitude' => 44.8018983,
                    'house_number' => '13',
                    'entrance' => 13,
                    'city_id' => 1,
                    'works_since' => '9:00:00',
                    'works_till' => '22:00:00',
                ],
            );

        DB::table('addresses')
            ->updateOrInsert(
                [
                    'id' => 3,
                    'street' => 'Сербская улица',
                    'latitude' => 20.386438,
                    'longitude' => 44.8018983,
                    'house_number' => '13',
                    'company_id' => 2,
                    'entrance' => 13,
                    'city_id' => 3,
                    'works_since' => '8:00:00',
                    'works_till' => '22:00:00',
                ],
            );
    }
}
