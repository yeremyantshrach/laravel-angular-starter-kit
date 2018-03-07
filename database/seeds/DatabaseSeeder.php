<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RolesSeed::class);
         $this->call(PermissionsSeed::class);
         $this->call(RolePermissionsSeeder::class);
         $this->call(CurrencySeeder::class);
         $this->call(CountrySeeder::class);
         $this->call(UsersTableSeed::class);
         $this->call(UsersRoleSeeder::class);
    }
}
