<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Chocolate Pudding',
            'description' => 'A sweet and creamy chocolate pudding made with high-quality cocoa.',
            'price' => 2000,
            'ingredients' => 'Milk, sugar, cocoa powder, cornstarch, vanilla extract',
            'imagePath' => 'images/Chocolate_Pudding.png',
        ]);

        Product::create([
            'name' => 'Chocolate Donut',
            'description' => 'A soft and fluffy donut coated with rich chocolate glaze.',
            'price' => 15000,
            'ingredients' => 'Flour, sugar, eggs, butter, milk, cocoa powder, yeast, salt',
            'imagePath' => 'images/Donut.png',
        ]);


        Product::create([
            'name' => 'Eclair Chocolate',
            'description' => 'A classic French pastry filled with rich chocolate cream and topped with chocolate icing.',
            'price' => 8000,
            'ingredients' => 'Flour, sugar, eggs, butter, milk, chocolate, cream, yeast, salt',
            'imagePath' => 'images/Eclair.png',
        ]);

        Product::create([
            'name' => 'Garlic Bread',
            'description' => 'A crispy bread topped with garlic butter and herbs, perfect as a side dish.',
            'price' => 10000,
            'ingredients' => 'Flour, garlic, butter, parsley, yeast, salt',
            'imagePath' => 'images/Garlic_Bread.png',
        ]);
        Product::create([
            'name' => 'Sausage Bread',
            'description' => 'A savory bread filled with juicy sausage and topped with cheese.',
            'price' => 10000,
            'ingredients' => 'Flour, sausage, cheese, eggs, milk, butter, yeast, salt',
            'imagePath' => 'images/Sausage_Bread.png',
        ]);
        Product::create([
            'name' => 'Sausage Brood',
            'description' => 'A savory bread filled with juicy sausage and topped with cheese.',
            'price' => 10000,
            'ingredients' => 'Flour, sausage, cheese, eggs, milk, butter, yeast, salt',
            'imagePath' => 'images/Sausage_Brood.png',
        ]);
        Product::create([
            'name' => 'Black Cream Cheese Cake',
            'description' => 'A rich and creamy cheesecake with a chocolate crust and a smooth cream cheese filling.',
            'price' => 10000,
            'ingredients' => 'Flour, cream cheese, sugar, eggs, butter, cocoa powder, vanilla extract',
            'imagePath' => 'images/Cake_ketan_hitam_cream_cheese.png',
        ]);
        Product::create([
            'name' => 'Chocolate Banana Bread',
            'description' => 'A moist and flavorful banana bread with chunks of chocolate throughout.',
            'price' => 7000,
            'ingredients' => 'Flour, bananas, sugar, eggs, butter, chocolate chips, baking soda, salt',
            'imagePath' => 'images/Chocolate_Banana_Bread.png',
        ]);
        Product::create([
            'name' => 'Chocolate Choux',
            'description' => 'A light and airy pastry filled with rich chocolate cream and topped with chocolate glaze.',
            'price' => 10000,
            'ingredients' => 'Flour, butter, chocolate, sugar, eggs, milk, yeast, salt',
            'imagePath' => 'images/Chocolate_Choux.png',
        ]);
        Product::create([
            'name' => 'Shredded Beef Bread',
            'description' => 'A savory bread filled with tender shredded beef.',
            'price' => 10000,
            'ingredients' => 'Flour, shredded beef, garlic, eggs, milk, butter, yeast, salt',
            'imagePath' => 'images/Shredded_Beef_Bread.png',
        ]);
    }
}
