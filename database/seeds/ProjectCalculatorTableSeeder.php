<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use \App\Permission;
use \App\Role;
use \App\User;
use \App\Invitation;
use \App\ProjectType;
use \App\ClientType;
use \App\TaskType;
use \App\ProjectSource;
use \App\ProjectCommission;

class ProjectCalculatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        $manageUsers = Permission::create([
            'name' => 'Manage users',
            'description' => 'Manage users, roles, permissions and related backend data. Required to access the backend administrator interface.'
        ]);
        $manageCalculatorBackend = Permission::create([
            'name' => 'Manage calculator backend',
            'description' => 'Manage users, roles, permissions and other backend data. Required to access the backend administrator interface.'
        ]);
        $accessCalculator = Permission::create([
            'name' => 'Access project calculator',
            'description' => 'View and use the project calculator.',
        ]);
        $manageProfile = Permission::create([
            'name' => 'Manage profile',
            'description' => 'Manage personal profile details. Access profile manager view.',
        ]);
        $manageSettings = Permission::create([
            'name' => 'Manage settings',
            'description' => 'Manage settings. Access settings manager view.',
        ]);

        //Roles
        $analyst = Role::create([
            'name' => 'Analyst',
            'description' => 'Analyst'
        ]);
        $consultant = Role::create([
            'name' => 'Consultant',
            'description' => 'Consultant'
        ]);
        $manager = Role::create([
            'name' => 'Manager',
            'description' => 'Manager'
        ]);
        $seniorManager = Role::create([
            'name' => 'Senior manager',
            'description' => 'Senior manager'
        ]);
        $shareholder = Role::create([
            'name' => 'Shareholder',
            'description' => 'Shareholder'
        ]);
        $founder = Role::create([
            'name' => 'Founder',
            'description' => 'Founder'
        ]);

        //Associate permissions and roles
        $analyst->assignPermission($manageProfile->id);
        $analyst->assignPermission($manageSettings->id);

        $consultant->assignPermission($manageProfile->id);
        $consultant->assignPermission($manageSettings->id);

        $manager->assignPermission($manageProfile->id);
        $manager->assignPermission($manageSettings->id);

        $seniorManager->assignPermission($manageProfile->id);
        $seniorManager->assignPermission($manageSettings->id);

        $shareholder->assignPermission($manageProfile->id);
        $shareholder->assignPermission($manageSettings->id);
        $shareholder->assignPermission($accessCalculator->id);
        $shareholder->assignPermission($manageCalculatorBackend->id);

        $founder->assignPermission($manageProfile->id);
        $founder->assignPermission($manageSettings->id);
        $founder->assignPermission($accessCalculator->id);
        $founder->assignPermission($manageCalculatorBackend->id);
        $founder->assignPermission($manageUsers->id);

        //Users (password field is hashed automatically via model mutator)
        $testAnalyst = User::create([
            'name'      => 'Test analyst',
            'email'     => 'analyst@email.com',
            'password'  => bcrypt('analyst'),
            'confirmed' => true,
        ]);
        $testConsultant = User::create([
            'name'      => 'Test consultant',
            'email'     => 'consultant@email.com',
            'password'  => bcrypt('consultant'),
            'confirmed' => true,
        ]);
        $testManager = User::create([
            'name'      => 'Test manager',
            'email'     => 'manager@email.com',
            'password'  => bcrypt('manager'),
            'confirmed' => true,
        ]);
        $testSeniorManager = User::create([
            'name'      => 'Test senior manager',
            'email'     => 'seniormanager@email.com',
            'password'  => bcrypt('seniormanager'),
            'confirmed' => true,
        ]);
        $testShareholder = User::create([
            'name'      => 'Test shareholder',
            'email'     => 'shareholder@email.com',
            'password'  => bcrypt('shareholder'),
            'confirmed' => true,
        ]);
        $testFounder = User::create([
            'name'      => 'Test founder',
            'email'     => 'founder@email.com',
            'password'  => bcrypt('founder'),
            'confirmed' => true,
        ]);

        //Assign roles to users
        $testAnalyst->assignRole($analyst->id);
        $testConsultant->assignRole($consultant->id);
        $testManager->assignRole($manager->id);
        $testSeniorManager->assignRole($seniorManager->id);
        $testShareholder->assignRole($shareholder->id);
        $testFounder->assignRole($founder->id);
        
        //Project types
        $pico = ProjectType::create(['name' => 'pico', 'budget_from' => 0, 'budget_to' => 999.99,]);
        $kilo = ProjectType::create(['name' => 'kilo', 'budget_from' => 1000, 'budget_to' => 4999.99,]);
        $tera = ProjectType::create(['name' => 'tera', 'budget_from' => 5000, 'budget_to' => 9999.99,]);
        $yotta = ProjectType::create(['name' => 'yotta', 'budget_from' => 10000, 'budget_to' => 999999.99,]);

        //Project sources
        $external = ProjectSource::create(['name' => 'External']);
        $employee = ProjectSource::create(['name' => 'Employee']);
        $shareholder = ProjectSource::create(['name' => 'Shareholder']);

        //Project commissions
        ProjectCommission::create(['project_source_id' => $external->id, 'project_type_id' => $pico->id, 'commission' => 10]);
        ProjectCommission::create(['project_source_id' => $external->id, 'project_type_id' => $kilo->id, 'commission' => 10]);
        ProjectCommission::create(['project_source_id' => $external->id, 'project_type_id' => $tera->id, 'commission' => 10]);
        ProjectCommission::create(['project_source_id' => $external->id, 'project_type_id' => $yotta->id, 'commission' => 10]);
        ProjectCommission::create(['project_source_id' => $employee->id, 'project_type_id' => $pico->id, 'commission' => 10]);
        ProjectCommission::create(['project_source_id' => $employee->id, 'project_type_id' => $kilo->id, 'commission' => 12.5]);
        ProjectCommission::create(['project_source_id' => $employee->id, 'project_type_id' => $tera->id, 'commission' => 15]);
        ProjectCommission::create(['project_source_id' => $employee->id, 'project_type_id' => $yotta->id, 'commission' => 20]);
        ProjectCommission::create(['project_source_id' => $shareholder->id, 'project_type_id' => $pico->id, 'commission' => 10]);
        ProjectCommission::create(['project_source_id' => $shareholder->id, 'project_type_id' => $kilo->id, 'commission' => 15]);
        ProjectCommission::create(['project_source_id' => $shareholder->id, 'project_type_id' => $tera->id, 'commission' => 20]);
        ProjectCommission::create(['project_source_id' => $shareholder->id, 'project_type_id' => $yotta->id, 'commission' => 30]);

        //Client types
        ClientType::create(['name' => 'S', 'description' => '1+ employees', 'profit_margin' => 10]);
        ClientType::create(['name' => 'M', 'description' => '10+ employees', 'profit_margin' => 30]);
        ClientType::create(['name' => 'L', 'description' => '50+ employees', 'profit_margin' => 32.5]);
        ClientType::create(['name' => 'XL', 'description' => '100+ employees', 'profit_margin' => 35]);

        //Task types
        TaskType::create(['name' => 'Beta tester', 'hourly_wage' => 9]);
        TaskType::create(['name' => 'Consultant (senior)', 'hourly_wage' => 24.7]);
        TaskType::create(['name' => 'Project manager', 'hourly_wage' => 27.44]);
        TaskType::create(['name' => 'Developer (senior)', 'hourly_wage' => 19.21]);
        TaskType::create(['name' => 'Designer', 'hourly_wage' => 21.1]);
        TaskType::create(['name' => 'Analyst', 'hourly_wage' => 13.72]);
        TaskType::create(['name' => 'Developer (junior)', 'hourly_wage' => 16.46]);
        TaskType::create(['name' => 'Consultant (junior)', 'hourly_wage' => 21.95]);
    }
}
