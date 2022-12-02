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
                    'slug' => 'section',
                    'founding_date' => 2020,
                    'rating' => 9.7,
                ],
            );

        DB::table('companies')
            ->updateOrInsert(
                [
                    'id' => 2,
                    'name' => 'Studio near',
                    'slug' => 'section-near',
                    'founding_date' => 2020,
                    'rating' => 9.7,
                ],
            );

        DB::table('companies')
            ->updateOrInsert(
                [
                    'id' => 3,
                    'name' => 'Shit company',
                    'slug' => 'shit-company',
                    'founding_date' => 2020,
                    'rating' => 5.7,
                ],
            );


        DB::table('companies')
            ->updateOrInsert(
                [
                    'id' => 4,
                    'name' => 'Good company',
                    'slug' => 'good.company',
                    'founding_date' => 2020,
                    'rating' => 8.7,
                ],
            );
    }
}
