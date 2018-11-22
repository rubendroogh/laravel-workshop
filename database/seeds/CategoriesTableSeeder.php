<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Website',
            ],
            [
                'name' => 'Webshop',
            ],
            [
                'name' => 'Maatwerk',
            ],
        ]);
    }
}
