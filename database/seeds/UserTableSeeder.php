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
        $admin->assignPermission($fullAcces->id);
        $guest->assignPermission($restrictedAccess->id);

        // Register admin users
        $admin1 = \App\User::create([
            'name'      => 'Nombre',
            'email'     => 'nombre@email',
            'password'  => bcrypt('password'),
        ]);
        $admin2 = \App\User::create([
            'name'      => 'Nombre',
            'email'     => 'nombre@email',
            'password'  => bcrypt('password'),
        ]);
        $admin3 = \App\User::create([
            'name'      => 'Nombre',
            'email'     => 'nombre@email',
            'password'  => bcrypt('password'),
        ]);

        // Register guest user
        $guest = \App\User::create([
            'name'      => 'Nombre',
            'email'     => 'nombre@email',
            'password'  => bcrypt('password'),
        ]);

        // Assign roles to users
        $admin1->assignRole($admin->id);
        $admin2->assignRole($admin->id);
        $admin3->assignRole($admin->id);
        $guest->assignRole($guest->id);

    }
}