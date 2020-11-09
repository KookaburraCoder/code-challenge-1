<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\CustomerStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $codes = array("AC", "RE");
        $code = array_rand($codes, 1);
        return [
            'CustomerStatusId' => ($status = CustomerStatus::create([
                'Code' => $codes[$code],
                'Name' => ($codes[$code] == 'AC' ? 'Active' : 'Removed'),
            ]))->CustomerStatusId,
            'Name' => $this->faker->name,
        ];
    }
}
