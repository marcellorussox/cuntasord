<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Categorie standard per spese
        Category::create(['name' => 'Affitto', 'type' => 'expense']);
        Category::create(['name' => 'Cibo', 'type' => 'expense']);
        Category::create(['name' => 'Trasporti', 'type' => 'expense']);

        // Categorie standard per entrate
        Category::create(['name' => 'Stipendio', 'type' => 'income']);
        Category::create(['name' => 'Rimborso', 'type' => 'income']);
    }
}
