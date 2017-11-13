<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\user;

class RoleAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'guest']);
        $user = User::where('id',1)->firstOrFail();
        $user->assignRole('admin');
    }
}
