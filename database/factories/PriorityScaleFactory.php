<?php
//phpcs:disable
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PriorityScale;

class PriorityScaleFactory extends Factory
{
    protected $model = PriorityScale::class;

    public function definition()
    {
        return [
            'priority_name' => $this->faker->name(),
        ];
    }
}
