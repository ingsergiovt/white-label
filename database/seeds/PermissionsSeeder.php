<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $array_super_admin = [];

        array_push($array_super_admin, Permission::create(['name' => 'create_companies']));
        array_push($array_super_admin, Permission::create(['name' => 'edit_companies']));
        array_push($array_super_admin, Permission::create(['name' => 'show_companies']));
        array_push($array_super_admin, Permission::create(['name' => 'delete_companies']));

        $admin_super_admin_role = Role::find(1);
        $admin_super_admin_role->syncPermissions($array_super_admin);





        $array_company = [];

        array_push($array_company, Permission::create(['name' => 'create_clients']));
        array_push($array_company, Permission::create(['name' => 'edit_clients']));
        array_push($array_company, Permission::create(['name' => 'show_clients']));
        array_push($array_company, Permission::create(['name' => 'delete_clients']));

        $admin_company_role = Role::find(2);
        $admin_company_role->syncPermissions($array_company);




    }
}
