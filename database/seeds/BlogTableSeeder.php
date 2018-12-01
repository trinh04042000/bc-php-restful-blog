<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Blog::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            Blog::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
            ]);
        }
    }

}
