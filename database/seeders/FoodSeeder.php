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
            // Pizzas (2 items)
            [
                'name' => 'Margherita Pizza',
                'description' => 'Classic pizza with fresh tomato sauce, mozzarella cheese, and basil',
                'price' => 12.99,
                'image_url' => 'https://images.unsplash.com/photo-1574071318508-1cdbab80d002?w=400&h=400&fit=crop',
                'available' => true,
            ],
            [
                'name' => 'Pepperoni Pizza',
                'description' => 'Delicious pepperoni pizza with mozzarella cheese',
                'price' => 14.99,
                'image_url' => 'https://images.unsplash.com/photo-1628840042765-356cda07504e?w=400&h=400&fit=crop',
                'available' => true,
            ],

            // Burgers (1 item)
            [
                'name' => 'Classic Burger',
                'description' => 'Beef patty, lettuce, tomato, onion, pickles, and special sauce',
                'price' => 9.99,
                'image_url' => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=400&h=400&fit=crop',
                'available' => true,
            ],

            // Desserts (2 items)
            [
                'name' => 'Chocolate Brownie',
                'description' => 'Rich fudgy chocolate brownie with vanilla ice cream',
                'price' => 6.99,
                'image_url' => 'https://images.unsplash.com/photo-1606313564200-e75d5e30476c?w=400&h=400&fit=crop',
                'available' => true,
            ],
            [
                'name' => 'Tiramisu',
                'description' => 'Classic Italian dessert with coffee and mascarpone',
                'price' => 7.99,
                'image_url' => 'https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?w=400&h=400&fit=crop',
                'available' => true,
            ],

            // Drinks (2 items)
            [
                'name' => 'Coca Cola',
                'description' => 'Refreshing cola drink',
                'price' => 2.99,
                'image_url' => 'https://images.unsplash.com/photo-1554866585-cd94860890b7?w=400&h=400&fit=crop',
                'available' => true,
            ],
            [
                'name' => 'Coffee',
                'description' => 'Hot brewed coffee',
                'price' => 2.49,
                'image_url' => 'https://images.unsplash.com/photo-1517487881594-2787fef5ebf7?w=400&h=400&fit=crop',
                'available' => true,
            ],

            // Sides (2 items)
            [
                'name' => 'French Fries',
                'description' => 'Crispy golden french fries',
                'price' => 4.99,
                'image_url' => 'https://images.unsplash.com/photo-1573080496219-bb080dd4f877?w=400&h=400&fit=crop',
                'available' => true,
            ],
            [
                'name' => 'Caesar Salad',
                'description' => 'Fresh romaine lettuce with caesar dressing and croutons',
                'price' => 8.99,
                'image_url' => 'https://images.unsplash.com/photo-1546793665-c74683f339c1?w=400&h=400&fit=crop',
                'available' => true,
            ],
        ];

        foreach ($foods as $food) {
            Food::create($food);
        }
    }
}
