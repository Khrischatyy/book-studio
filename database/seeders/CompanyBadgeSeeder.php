<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyBadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_badge')
            ->updateOrInsert(
                [
                    'id' => 1,
                    'company_id' => 1,
                    'badges_id' => json_encode([
                        1 => 2,
                        2 => 3,
                    ])
                ],
            );

        DB::table('company_badge')
            ->updateOrInsert(
                [
                    'id' => 2,
                    'company_id' => 2,
                    'badges_id' => json_encode([
                        1 => 1,
                        2 => 3,
                    ])
                ],
            );

        DB::table('company_badge')
            ->updateOrInsert(
                [
                    'id' => 3,
                    'company_id' => 3,
                    'badges_id' => json_encode([
                        1 => 1,
                        2 => 3,
                        3 => 2,
                    ])
                ],
            );

        DB::table('company_badge')
            ->updateOrInsert(
                [
                    'id' => 4,
                    'company_id' => 4,
                    'badges_id' => json_encode([
                        1 => 1,
                        2 => 2,
                        3 => 3,
                    ])
                ],
            );
    }
}
