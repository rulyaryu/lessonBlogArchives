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
//        $this->call(TagsTableSeeder::class);
//        $this->call(CategoriesTableSeeder::class);

            foreach (array_fill(1, 300, 1) as $key => $value) {
                DB::table('category_news')->insert([
                    'news_id' => $key,
                    'category_id' => rand(30, 60)
                ]);
            }
    }
}
