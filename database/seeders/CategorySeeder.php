<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create root categories (parent categories)
        $menCategory = Category::create([
            'name' => 'Men',
            'gender' => 'Male',
            'description' => 'Clothing and accessories for men',
            'parent_id' => null,
        ]);

        $womenCategory = Category::create([
            'name' => 'Women',
            'gender' => 'Female',
            'description' => 'Clothing and accessories for women',
            'parent_id' => null,
        ]);

        // Create subcategories (child categories)
        $menShirts = Category::create([
            'name' => 'Shirts',
            'gender' => 'Male',
            'description' => 'Men\'s shirts',
            'parent_id' => $menCategory->id, // Set parent category
        ]);

        $womenShirts = Category::create([
            'name' => 'Shirts',
            'gender' => 'Female',
            'description' => 'Women\'s shirts',
            'parent_id' => $womenCategory->id, // Set parent category
        ]);

        // Add more categories as needed
        Category::create([
            'name' => 'T-Shirts',
            'gender' => 'Male',
            'description' => 'Men\'s T-Shirts',
            'parent_id' => $menShirts->id, // Subcategory under Men > Shirts
        ]);

        Category::create([
            'name' => 'Dresses',
            'gender' => 'Female',
            'description' => 'Women\'s Dresses',
            'parent_id' => $womenCategory->id, // Direct child of Women category
        ]);
    }
}
