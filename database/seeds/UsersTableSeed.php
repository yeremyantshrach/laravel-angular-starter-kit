<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "first_name" => "Hrach",
                "last_name" => "Yeremyants",
                "email" => "test@test.com",
                "birth_date" => "1995-01-09",
                "address" => "Lepsius",
                "postal_code" => "0035",
                "phone_number" => "37494277044",
                "password" => bcrypt("password"),
                "country_id" => 2,
                "sender_id" => null,
                "created_at" => Carbon::now()->toDayDateTimeString(),
                "updated_at" => Carbon::now()->toDayDateTimeString(),
                "deleted_at" => null,
            ],
            [
                "first_name" => "testName",
                "last_name" => "testName",
                "email" => "testName@testName.com",
                "birth_date" => "1995-01-09",
                "address" => "street",
                "postal_code" => "007",
                "phone_number" => "97294277044",
                "password" => bcrypt("test123"),
                "country_id" => 1,
                "sender_id" => null,
                "created_at" => Carbon::now()->toDayDateTimeString(),
                "updated_at" => Carbon::now()->toDayDateTimeString(),
                "deleted_at" => null,
            ],
        ];
        DB::table('users')->insert($users);

    }
}
