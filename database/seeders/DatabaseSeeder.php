<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /* 
            Give Start Date in mm/dd/yyyy format
        */

        Employee::create([
            'name' => 'Yashraj Singh',
            'joinDate' => '12/10/2001',
            'leaveDate' => '10/09/2002',
            'status' => 0
        ]);

        Employee::create([
            'name' => 'Rishi Raj',
            'joinDate' => '12/01/2020',
            'leaveDate' => '',
            'status' => 1
        ]);

        Employee::create([
            'name' => 'Siddharth Singh',
            'joinDate' => '08/19/2010',
            'leaveDate' => '',
            'status' => 1
        ]);
    }
}
