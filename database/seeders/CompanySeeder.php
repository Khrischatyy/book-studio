<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')
            ->updateOrInsert(
                [
                    'id' => 1,
                    'name' => 'Section',
                    'founding_date' => 2020,
                    'rating' => 9.7,
                    'city_id' => 2,
                ],
            );

        DB::table('companies')
            ->updateOrInsert(
                [
                    'id' => 2,
                    'name' => 'Studio near',
                    'founding_date' => 2020,
                    'rating' => 9.7,
                    'city_id' => 1,
                ],
            );
    }
}
