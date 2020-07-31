<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(PermissionsSeeder::class);

        factory(User::class)->create([
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('12345678')
        ])->assignRole('super_admin');

        factory(User::class)->create([
            'name'      => 'company1',
            'email'     => 'company1@company1.com',
            'password'  => Hash::make('12345678')
        ])->assignRole('admin_company');

        factory(User::class)->create([
            'name'      => 'company2',
            'email'     => 'company2@company2.com',
            'password'  => Hash::make('12345678')
        ]);
        // $this->call(UsersTableSeeder::class);


    }
}
