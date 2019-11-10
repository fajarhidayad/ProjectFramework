<?php

use Illuminate\Database\Seeder;
use App\Tags;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();

        Tags::create(['nama' => 'Lucu']);
        Tags::create(['nama' => 'Shitpost']);
        Tags::create(['nama' => 'Parodi']);
        Tags::create(['nama' => 'Twitter']);
        Tags::create(['nama' => 'Screenshot']);
    }
}
