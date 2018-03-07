<?php

use App\Enum\Permissions;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => Permissions::CREATE_PAGES,
            'guard_name' => config('auth.defaults.guard'),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('permissions')->insert([
            'name' => Permissions::EDIT_PAGES,
            'guard_name' => config('auth.defaults.guard'),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('permissions')->insert([
            'name' => Permissions::DELETE_PAGES,
            'guard_name' => Permissions::DELETE_PAGES,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
