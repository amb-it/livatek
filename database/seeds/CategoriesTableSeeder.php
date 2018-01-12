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
                'title' => 'cars',
                'parent_id' => null
            ],
            [
                'title' => 'motorcycles',
                'parent_id' => null
            ],
            [
                'title' => 'trucks','parent_id' => null
            ],
            [
                'title' => 'Volkswagen Passat',
                'parent_id' => 1
            ],
            [
                'title' => 'Honda Civic',
                'parent_id' => 1
            ],
            [
                'title' => 'Mitsubishi Lancer',
                'parent_id' => 1
            ],
            [
                'title' => 'Harley Davidson',
                'parent_id' => 2
            ],
            [
                'title' => 'Ducati Superbike',
                'parent_id' => 2
            ],
            [
                'title' => 'Kawasaki ZX1000',
                'parent_id' => 2
            ],
            [
                'title' => 'Volvo NH12',
                'parent_id' => 3
            ],
            [
                'title' => 'Kenworth T909',
                'parent_id' => 3
            ],
            [
                'title' => 'Freightliner 122',
                'parent_id' => 3
            ]

        ]);
    }
}
