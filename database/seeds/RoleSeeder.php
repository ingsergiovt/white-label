<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([

            'name' => 'super_admin'
        ]);

        Role::create([

            'name' => 'admin_company'
        ]);

        Role::create([

            'name' => 'client'
        ]);
    }
}
