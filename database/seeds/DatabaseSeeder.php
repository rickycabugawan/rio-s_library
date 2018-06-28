<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'isAdmin' => 1,
        ]);

        DB::table('genres')->insert([
            ['genre' => 'Adventure',],
            ['genre' => 'Horror',],
            ['genre' => 'Romance',],
            ['genre' => 'Thriller',],
            ['genre' => 'Fantasy',],
            ['genre' => 'Sci-Fi',],
        ]);

        DB::table('library_sections')->insert([
            ['section' => 'Circulation',],
            ['section' => 'Periodical Section',],
            ['section' => 'General Reference',],
            ['section' => "Children's Section",],
            ['section' => 'Fiction',],
        ]);

    }
}
