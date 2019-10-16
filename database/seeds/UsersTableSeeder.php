<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Peran;

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

        $adminRole = Peran::where('name', 'admin')->first();
        $userRole = Peran::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);
        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('user')
        ]);

        $admin->perans()->attach($adminRole);
        $user->perans()->attach($userRole);
    }
}
