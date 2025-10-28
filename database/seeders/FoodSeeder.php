<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            // Pizzas
            [
                'name' => 'Margherita Pizza',
                'description' => 'Classic pizza with fresh tomato sauce, mozzarella cheese, and basil',
                'price' => 12.99,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'Pepperoni Pizza',
                'description' => 'Delicious pepperoni pizza with mozzarella cheese',
                'price' => 14.99,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'BBQ Chicken Pizza',
                'description' => 'BBQ sauce, grilled chicken, red onions, and cilantro',
                'price' => 15.99,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'Supreme Pizza',
                'description' => 'Pepperoni, sausage, peppers, onions, and mushrooms',
                'price' => 16.99,
                'image_url' => null,
                'available' => true,
            ],

            // Burgers
            [
                'name' => 'Classic Burger',
                'description' => 'Beef patty, lettuce, tomato, onion, pickles, and special sauce',
                'price' => 9.99,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'Bacon Cheeseburger',
                'description' => 'Double beef patty, bacon, cheese, lettuce, and tomato',
                'price' => 12.99,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'Chicken Burger',
                'description' => 'Grilled chicken breast, lettuce, tomato, and mayo',
                'price' => 10.99,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'Veggie Burger',
                'description' => 'Plant-based patty with avocado, sprouts, and vegan mayo',
                'price' => 11.99,
                'image_url' => null,
                'available' => true,
            ],

            // Desserts
            [
                'name' => 'Chocolate Brownie',
                'description' => 'Rich fudgy chocolate brownie with vanilla ice cream',
                'price' => 6.99,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'Tiramisu',
                'description' => 'Classic Italian dessert with coffee and mascarpone',
                'price' => 7.99,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'Cheesecake',
                'description' => 'Creamy New York style cheesecake with berry topping',
                'price' => 7.99,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'Ice Cream Sundae',
                'description' => 'Three scoops of vanilla ice cream with hot fudge and whipped cream',
                'price' => 5.99,
                'image_url' => null,
                'available' => true,
            ],

            // Drinks
            [
                'name' => 'Coca Cola',
                'description' => 'Refreshing cola drink',
                'price' => 2.99,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'Fresh Orange Juice',
                'description' => 'Freshly squeezed orange juice',
                'price' => 3.99,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'Coffee',
                'description' => 'Hot brewed coffee',
                'price' => 2.49,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'Milkshake',
                'description' => 'Vanilla, chocolate, or strawberry milkshake',
                'price' => 4.99,
                'image_url' => null,
                'available' => true,
            ],

            // Sides
            [
                'name' => 'French Fries',
                'description' => 'Crispy golden french fries',
                'price' => 4.99,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'Onion Rings',
                'description' => 'Crispy beer-battered onion rings',
                'price' => 5.99,
                'image_url' => null,
                'available' => true,
            ],
            [
                'name' => 'Caesar Salad',
                'description' => 'Fresh romaine lettuce with caesar dressing and croutons',
                'price' => 8.99,
                'image_url' => null,
                'available' => true,
            ],
        ];

        foreach ($foods as $food) {
            Food::create($food);
        }
    }
}
