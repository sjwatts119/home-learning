<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TextsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('texts')->insert([
            'title' => 'This is the Public Title',
            'text' => '<h1>This is some Public Code</h1>',
            'private' => false,
            'expires' => false,
        ]);

        DB::table('texts')->insert([
            'title' => 'This is the Private Title',
            'text' => '<h1>This is some Private Code</h1>',
            'private' => true,
            'expires' => false,
        ]);
    }
}
