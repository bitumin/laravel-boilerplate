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
use \App\Client;
use \App\Currency;

class ProjectCalculatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permissions
        $manageCalculatorBackend = Permission::create([
            'name' => 'Manage calculator backend',
            'description' => 'Manage budget calculator related databases from the Administrator interface.'
        ]);
        $accessCalculator = Permission::create([
            'name' => 'Access budget calculator',
            'description' => 'Permission to access and use the budget calculator.',
        ]);

        // Roles
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

        // Associate permissions and roles
	    $analyst->assignPermission($accessCalculator->id);
	    $consultant->assignPermission($accessCalculator->id);
	    $manager->assignPermission($accessCalculator->id);
	    $seniorManager->assignPermission($accessCalculator->id);
        $shareholder->assignPermission($accessCalculator->id);
        $founder->assignPermission($accessCalculator->id);

	    $shareholder->assignPermission($manageCalculatorBackend->id);
        $founder->assignPermission($manageCalculatorBackend->id);

	    $accessAdminInterfaceID = Permission::where('name','Access administrator interface')->pluck('id');
	    $shareholder->assignPermission($accessAdminInterfaceID);
	    $founder->assignPermission($accessAdminInterfaceID);

        // Test users
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
	    TaskType::create(['name' => 'Analyst', 'hourly_wage' => 13.72]);
	    TaskType::create(['name' => 'Developer (junior)', 'hourly_wage' => 16.46]);
        TaskType::create(['name' => 'Developer (senior)', 'hourly_wage' => 19.21]);
        TaskType::create(['name' => 'Designer', 'hourly_wage' => 21.1]);
	    TaskType::create(['name' => 'Consultant (junior)', 'hourly_wage' => 21.95]);
	    TaskType::create(['name' => 'Consultant (senior)', 'hourly_wage' => 24.7]);
	    TaskType::create(['name' => 'Project manager', 'hourly_wage' => 27.44]);

        //Test client
        Client::create([
            'name'              => 'Test Client SA',
            'client_type_id'    => 1,
            'contact_name'      => 'Nombre de la persona de contacto',
            'email'             => 'email@client.com',
            'telephone'         => '(+34) 666 55 44 33',
            'fax'               => '(+34) 999 88 77 66',
            'notes'             => 'Comentarios, observaciones o anotaciones significativas sobre este cliente.',
            'raw_address'       => 'Pintor Joan Miro 49, Sant Andreu de la Barca, España'
        ]);

        //Currencies
        Currency::create(['name' => 'EUR', 'symbol' => '€']);
        Currency::create(['name' => 'USD', 'symbol' => '$']);

    }
}
