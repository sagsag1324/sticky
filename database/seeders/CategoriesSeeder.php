<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'bars',
            'Food',
            'Tattoo Studio',
            'Cars',
            'Furniture',
            'Technology',
            'Cultivation',
            'Extreme',
            'Tourism',
            'Attractions',
            'Girls Related',
            'Girls Hear',
        ];
        foreach ($categories as $category) {
            Categorie::insert([
                'title' => $category,
            ]);
        }
    }
}
