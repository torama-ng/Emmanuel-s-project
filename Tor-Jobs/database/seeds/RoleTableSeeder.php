<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'employer']);
        Role::create(['name'=>'candidate']);

        // User::truncate();


        // User::create(['name'=>'admin']);
        // User::create(['name'=>'author']);
        // User::create(['name'=>'user']);
        
    }
}
