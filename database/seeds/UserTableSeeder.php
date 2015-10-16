<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use \Caffeinated\Shinobi\Models\Permission;
use \Caffeinated\Shinobi\Models\Role;
use \App\User;
use \App\Invitation;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permissions
        $manageUsers = Permission::create([
            'name' => 'manage_users',
            'slug' => 'manage-users',
            'description' => 'Manage users, roles and permissions. Has access to user manager in dashboard.'
        ]);
        $changeProfile = Permission::create([
            'name' => 'manage_users',
            'slug' => 'manage-users',
            'description' => 'Manage personal profile details',
        ]);

        $fullAccess = Permission::create([
            'name' => 'full_access',
            'slug' => 'full-acces',
            'description' => 'Full access'
        ]);
        $restrictedAccess = Permission::create([
            'name' => 'restricted_access',
            'slug' => 'restricted-acces',
            'description' => 'Restricted access'
        ]);

        // Roles
        $admin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'VerdeSoft admin'
        ]);
        $guest = Role::create([
            'name' => 'Guest',
            'slug' => 'guest',
            'description' => 'VerdeSoft Guest user'
        ]);

        // Assign permissions to roles
        $admin->assignPermission($fullAccess->id);
        $guest->assignPermission($restrictedAccess->id);

        // Register admin users
        $admin1 = User::create([
            'name'      => 'Mitxel Moriana Casado',
            'email'     => 'mmoriana@verdesoft.com',
            'password'  => bcrypt('.v3rD3s0fT!'),
            'confirmed' => true,
        ]);

        // Register guest user
        $guest1 = User::create([
            'name'      => 'Guest',
            'email'     => 'guest@verdesoft.com',
            'password'  => bcrypt('verdesoft'),
            'confirmed' => true,
        ]);

        // Assign roles to users
        $admin1->assignRole($admin->id);
        $guest1->assignRole($guest->id);

        // Create an invitation (for the invitation registation method)
        Invitation::create([
            'expired' => 0,
            'email' => 'invitado@email.com',
            'role_id' => $guest->id,
            'keyword' => bcrypt('randomInvitationCode')
        ]);
    }
}
