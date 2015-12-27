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
	    $manageUsers = Permission::create([
		    'name' => 'Manage users',
		    'description' => 'Manage users, roles, permissions and related backend data from the Administrator interface.'
	    ]);
        $accessAdministratorInterface = Permission::create([
            'name' => 'Access administrator interface',
            'description' => 'Access to the databases Administrator interface.'
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
        $admin->assignPermission($accessAdministratorInterface->id);

        if(\App::environment() == 'local')
        {
            // Register test users
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

            // Assign roles to test users
            $testAdmin->assignRole($admin->id);
            $testUser->assignRole($user->id);
            $testGuest->assignRole($guest->id);

            // Create test invitations (for the invitation registation method)
            if(config('auth.method') === 'invitation') {
                Invitation::create([
                    'email' => 'invitation1@email.com',
                    'role_id' => $admin->id,
                    'keyword' => bcrypt('invitation1')
                ]);
                Invitation::create([
                    'email' => 'invitation2@email.com',
                    'role_id' => $user->id,
                    'keyword' => bcrypt('invitation2')
                ]);
                Invitation::create([
                    'email' => 'invitation3@email.com',
                    'role_id' => $guest->id,
                    'keyword' => bcrypt('invitation3')
                ]);
            }
        }
    }
}
