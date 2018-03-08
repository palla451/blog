<?php

use Illuminate\Database\Seeder;

class CateogriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(\App\Category::class,3)->create();
    }
}
