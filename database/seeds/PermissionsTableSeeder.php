<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-08-27 10:30:15',
            'updated_at' => '2019-08-27 10:30:15',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '17',
                'title'      => 'basic_c_r_m_access',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '18',
                'title'      => 'crm_status_create',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '19',
                'title'      => 'crm_status_edit',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '20',
                'title'      => 'crm_status_show',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '21',
                'title'      => 'crm_status_delete',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '22',
                'title'      => 'crm_status_access',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '23',
                'title'      => 'crm_customer_create',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '24',
                'title'      => 'crm_customer_edit',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '25',
                'title'      => 'crm_customer_show',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '26',
                'title'      => 'crm_customer_delete',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '27',
                'title'      => 'crm_customer_access',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '28',
                'title'      => 'crm_note_create',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '29',
                'title'      => 'crm_note_edit',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '30',
                'title'      => 'crm_note_show',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '31',
                'title'      => 'crm_note_delete',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '32',
                'title'      => 'crm_note_access',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '33',
                'title'      => 'crm_document_create',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '34',
                'title'      => 'crm_document_edit',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '35',
                'title'      => 'crm_document_show',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '36',
                'title'      => 'crm_document_delete',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ],
            [
                'id'         => '37',
                'title'      => 'crm_document_access',
                'created_at' => '2019-08-27 10:30:15',
                'updated_at' => '2019-08-27 10:30:15',
            ]];

        Permission::insert($permissions);
    }
}
