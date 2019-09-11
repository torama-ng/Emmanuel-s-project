<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::truncate();
       
       $adminRole = Role::where('name', 'admin')->first();
       $employerRole = Role::where('name', 'employer')->first();
       $candidateRole = Role::where('name', 'candidate')->first();


       $admin = User::create([
           'name' => 'Admin',
           'email' => 'admin@admin.com',
           'password' => bcrypt('password')
       ]);

        $employer = User::create([
            'name' => 'Employer',
            'email' => 'employer@employer.com',
            'password' => bcrypt('password')
        ]);

        $candidate = User::create([
            'name' => 'candidate',
            'email' => 'candidate@candidate.com',
            'password' => bcrypt('password')
        ]);

        $admin->roles()->attach($adminRole);
        $employer->roles()->attach($employerRole);
        $candidate->roles()->attach($candidateRole);
    }
}