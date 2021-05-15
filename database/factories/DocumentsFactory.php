<?php

namespace Database\Factories;

use App\Models\Documents;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentsFactory extends Factory {
    protected $model = Documents::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->realText(20),
            'description'=>$this->faker->realText(250),
            'status'=>Documents::IS_NEW
        ];
    }
}
