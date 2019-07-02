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
        // $this->call(UsersTableSeeder::class);

        for ($i = 0; $i < 50; $i++) {
            DB::table('projects')->insert([
                'title' => Str::random(10),
                'description' => Str::random(10),
            ]);
        }
    }
}
