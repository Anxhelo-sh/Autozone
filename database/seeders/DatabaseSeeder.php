<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role\Role;
use App\Models\User\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);

        $users = User::all();

        foreach ($users as  $user){
            // Create an admin with an admin role
            $role = Role::query()->where('name', 'admin')->first();
            $user->roles()->attach($role);
        }
    }
}
