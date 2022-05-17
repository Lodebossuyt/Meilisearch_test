<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::all();
        $users = User::all();

        foreach($users as $user) {
            if ($user->id == 1) {
                $user->roles()->attach($roles);
            }else{
                $user->roles()->attach($roles->random(rand(1,count($roles)))->pluck('id')->toArray()
                );
            }
        }
    }
}
