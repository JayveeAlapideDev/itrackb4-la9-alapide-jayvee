<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([

             'name' => 'Choco',
             'price' => 40,
             'stock' => 50,
             'brand' => 'CHOCO', 
             'package' => 'pack',

             'name' => 'mentos',
             'price' => 10,
             'stock' => 10,
             'brand' => 'MINT', 
             'package' => 'stick',

             'name' => 'Drinks',
              'price' => 10, 
              'stock' => 20,
               'brand' => 'CHOCO', 
               'package' => 'plastic',
               
               'name' => 'Tops',
                'price' => 10,
                 'stock' => 50, 
                 'brand' => 'dishwashing',
                 'package' => 'sachet'
        ]);
    }
}
