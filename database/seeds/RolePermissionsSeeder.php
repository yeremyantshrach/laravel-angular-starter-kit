<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Enum\Permissions;
use App\Enum\Roles;
use Illuminate\Support\Facades\DB;

class RolePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_has_permissions')->insert([
            'permission_id' => Permissions::PERMISSION_IDS[Permissions::CREATE_PAGES],
            'role_id' => Roles::ROLE_IDS[Roles::ADMIN]
        ]);

        DB::table('role_has_permissions')->insert([
            'permission_id' => Permissions::PERMISSION_IDS[Permissions::EDIT_PAGES],
            'role_id' => Roles::ROLE_IDS[Roles::ADMIN]
        ]);

        DB::table('role_has_permissions')->insert([
            'permission_id' => Permissions::PERMISSION_IDS[Permissions::DELETE_PAGES],
            'role_id' => Roles::ROLE_IDS[Roles::ADMIN]
        ]);
    }
}
