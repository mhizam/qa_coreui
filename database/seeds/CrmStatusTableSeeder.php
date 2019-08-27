<?php

use App\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [[
            'id'         => '1',
            'name'       => 'Lead',
            'created_at' => '2019-08-27 10:30:15',
            'updated_at' => '2019-08-27 10:30:15',
        ],
            [
                'id'         => '2',
                'name'       => 'Customer',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '3',
                'name'       => 'Partner',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ]];

        CrmStatus::insert($crmStatuses);
    }
}
