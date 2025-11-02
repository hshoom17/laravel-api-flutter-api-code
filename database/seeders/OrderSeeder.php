<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Food;
use App\Models\User;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get a user to create orders for
        $user = User::first();

        if (!$user) {
            // Create a test user if none exists
            $user = User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('password'),
                'phone' => '1234567890',
            ]);
        }

        // Get some foods
        $foods = Food::all();

        if ($foods->isEmpty()) {
            $this->command->warn('No foods found. Please run FoodSeeder first.');
            return;
        }

        // Create sample orders
        $orders = [
            [
                'user_id' => $user->id,
                'total_price' => 25.98,
                'notes' => 'Extra cheese on pizza',
                'status' => 'pending',
                'items' => [
                    ['food_id' => 1, 'quantity' => 2, 'price' => 12.99], // Margherita Pizza
                ],
            ],
            [
                'user_id' => $user->id,
                'total_price' => 44.96,
                'notes' => null,
                'status' => 'confirmed',
                'items' => [
                    ['food_id' => 5, 'quantity' => 2, 'price' => 9.99],  // Classic Burger
                    ['food_id' => 18, 'quantity' => 2, 'price' => 4.99], // French Fries
                    ['food_id' => 13, 'quantity' => 2, 'price' => 2.99], // Coca Cola
                ],
            ],
            [
                'user_id' => $user->id,
                'total_price' => 32.98,
                'notes' => 'No onions please',
                'status' => 'preparing',
                'items' => [
                    ['food_id' => 6, 'quantity' => 2, 'price' => 12.99], // Bacon Cheeseburger
                    ['food_id' => 19, 'quantity' => 1, 'price' => 5.99], // Onion Rings
                ],
            ],
            [
                'user_id' => $user->id,
                'total_price' => 21.97,
                'notes' => null,
                'status' => 'delivering',
                'items' => [
                    ['food_id' => 3, 'quantity' => 1, 'price' => 15.99], // BBQ Chicken Pizza
                    ['food_id' => 14, 'quantity' => 2, 'price' => 2.99], // Coca Cola
                ],
            ],
            [
                'user_id' => $user->id,
                'total_price' => 35.96,
                'notes' => 'Birthday celebration',
                'status' => 'completed',
                'items' => [
                    ['food_id' => 4, 'quantity' => 1, 'price' => 16.99], // Supreme Pizza
                    ['food_id' => 9, 'quantity' => 2, 'price' => 6.99],  // Chocolate Brownie
                    ['food_id' => 16, 'quantity' => 2, 'price' => 4.99], // Milkshake
                ],
            ],
        ];

        foreach ($orders as $orderData) {
            $items = $orderData['items'];
            unset($orderData['items']);

            $order = Order::create($orderData);

            foreach ($items as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'food_id' => $item['food_id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ]);
            }
        }
    }
}
