<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use \App\Permission;
use \App\Role;
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
        // Example permissions
        $debugging = Permission::create([
            'name' => 'Debugging',
            'description' => 'Acces to developer views and controllers.'
        ]);
        $manageUsers = Permission::create([
            'name' => 'Manage users',
            'description' => 'Manage users, roles and permissions. Has access to users manager view in dashboard.'
        ]);
        $manageProfile = Permission::create([
            'name' => 'Manage profile',
            'description' => 'Manage personal profile details. Access profile manager view in dashboard.',
        ]);
        $manageSettings = Permission::create([
            'name' => 'Manage settings',
            'description' => 'Manage settings. Access settings manager view in dashboard.',
        ]);

        // Exmaple roles
        $admin = Role::create([
            'name' => 'Administrator',
            'description' => 'Administrator'
        ]);
        $user = Role::create([
            'name' => 'User',
            'description' => 'User'
        ]);
        $guest = Role::create([
            'name' => 'Guest',
            'description' => 'Guest'
        ]);

        // Example assign permissions to roles
        $admin->assignPermission($manageUsers->id);
        $admin->assignPermission($manageProfile->id);
        $admin->assignPermission($manageSettings->id);
        $admin->assignPermission($debugging->id);
        $user->assignPermission($manageProfile->id);
        $user->assignPermission($manageSettings->id);

        if(\App::environment() == 'local')
        {
            // Register admin users
            $testAdmin = User::create([
                'name'      => 'Test Administrator',
                'email'     => 'admin@email.com',
                'password'  => bcrypt('admin'),
                'confirmed' => true,
            ]);
            $testUser = User::create([
                'name'      => 'Test User',
                'email'     => 'user@email.com',
                'password'  => bcrypt('user'),
                'confirmed' => true,
            ]);
            $testGuest = User::create([
                'name'      => 'Test Guest',
                'email'     => 'guest@email.com',
                'password'  => bcrypt('guest'),
                'confirmed' => true,
            ]);

            // Assign roles to users
            $testAdmin->assignRole($admin->id);
            $testUser->assignRole($user->id);
            $testGuest->assignRole($guest->id);

            // Create test invitations (for the invitation registation method)
            if(config('auth.method')=='invitation') {
                Invitation::create([
                    'email' => 'guest1@email.com',
                    'role_id' => $admin->id,
                    'keyword' => bcrypt('guest1')
                ]);
                Invitation::create([
                    'email' => 'guest2@email.com',
                    'role_id' => $user->id,
                    'keyword' => bcrypt('guest2')
                ]);
                Invitation::create([
                    'email' => 'guest3@email.com',
                    'role_id' => $guest->id,
                    'keyword' => bcrypt('guest3')
                ]);
            }
        }
    }
}
