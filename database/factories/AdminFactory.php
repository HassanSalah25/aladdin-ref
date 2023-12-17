<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $datas = State::all();
        foreach ($datas as $data) {
             $data->state_image = asset('storage/state/'.$data->state_image.'.jpg');
      
        }
        return [];
    }



}
