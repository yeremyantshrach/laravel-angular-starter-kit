<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersRole = [
            [
                'role_id' => 1,
                'user_id' => 1,
                'user_type' => \App\Models\User::class
            ],
            [
                'role_id' => 2,
                'user_id' => 2,
                'user_type' => \App\Models\User::class
            ]
        ];

        DB::table('user_has_roles')->insert($usersRole);
    }
}
