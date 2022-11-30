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
                    'latitude' => 38.92,
                    'longitude' => 20.45,
                    'house_number' => '1',
                    'entrance' => 1,
                    'city_id' => 1,
                    'company_id' => 1,
                    'works_sinceTime' => '13:30:00',
                    'works_tillDate' => '1998-08-02',
                    'works_till1TimeStamp' => '2022-09-12 18:00:00',
                    'works_till2DateTime' => '2022-09-12 18:00:00',
                ],
            );

        DB::table('addresses')
            ->updateOrInsert(
                [
                    'id' => 2,
                    'street' => 'Сербская улица',
                    'latitude' => 44.78,
                    'company_id' => 1,
                    'longitude' => 32.78,
                    'house_number' => '13',
                    'entrance' => 13,
                    'city_id' => 1,
                    'works_sinceTime' => '13:30:00',
                    'works_tillDate' => '1998-08-02',
                    'works_till1TimeStamp' => '2022-09-12 18:00:00',
                    'works_till2DateTime' => '2022-09-12 18:00:00',
                ],
            );

        DB::table('addresses')
            ->updateOrInsert(
                [
                    'id' => 3,
                    'street' => 'Сербская улица',
                    'latitude' => 42.83,
                    'longitude' => 32.20,
                    'house_number' => '13',
                    'company_id' => 2,
                    'entrance' => 13,
                    'city_id' => 3,
                    'works_sinceTime' => '13:30:00',
                    'works_tillDate' => '1998-08-02',
                    'works_till1TimeStamp' => '2022-09-12 18:00:00',
                    'works_till2DateTime' => '2022-09-12 18:00:00',
                ],
            );
    }
}
