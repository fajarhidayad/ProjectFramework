<?php

use Illuminate\Database\Seeder;
use App\Peran;

class PeransTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peran::truncate();

        Peran::create(['name' => 'admin']);
        Peran::create(['name' => 'user']);
    }
}
