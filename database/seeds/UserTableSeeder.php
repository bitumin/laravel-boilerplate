<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
        $fullAccess = \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'full_access',
            'slug' => 'full-acces',
            'description' => 'Full access'
        ]);
        $restrictedAccess = \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'restricted_access',
            'slug' => 'restricted-acces',
            'description' => 'Restricted access'
        ]);

        // Roles
        $admin = \Caffeinated\Shinobi\Models\Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'VerdeSoft admin'
        ]);
        $guest = \Caffeinated\Shinobi\Models\Role::create([
            'name' => 'Guest',
            'slug' => 'guest',
            'description' => 'VerdeSoft Guest user'
        ]);

        // Assign permissions to roles
        $admin->assignPermission($fullAccess->id);
        $guest->assignPermission($restrictedAccess->id);

        // Register admin users
        $admin1 = \App\User::create([
            'name'      => 'Mitxel Moriana Casado',
            'email'     => 'mmoriana@verdesoft.com',
            'password'  => bcrypt('.v3rD3s0fT!'),
        ]);

        // Register guest user
        $guest1 = \App\User::create([
            'name'      => 'Guest',
            'email'     => 'guest@verdesoft.com',
            'password'  => bcrypt('verdesoft'),
        ]);

        // Assign roles to users
        $admin1->assignRole($admin->id);
        $guest1->assignRole($guest->id);

        // Create an invitation (for the invitation registation method)
        \App\Invitation::create([
            'expired' => 0,
            'email' => 'invitado@email.com',
            'role_id' => $guest->id,
            'keyword' => bcrypt('randomInvitationCode')
        ]);

    }
}
