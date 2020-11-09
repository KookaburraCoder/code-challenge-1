<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $statuses = array('Pending', 'Paid', 'Shipped', 'Completed');
        $status = array_rand($statuses, 1);
        $min = 15.00;
        $max = 650.00;
        return [
            'OrderStatus' => $statuses[$status],
            'OrderTotal' => round(($min + lcg_value()*(abs($max - $min))), 2),
            'created_at' => date('Y-m-d', strtotime( '-'.mt_rand(0,700).' days'))
        ];
    }
}
