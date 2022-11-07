<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WisataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'no_struk' => bcrypt($this->faker->sentence(mt_rand(1, 4))),
            'kuantitas' => mt_rand(1, 10),
            'jumlah_harga' => '5000',
            'jumlah_harga' => 'tiket masuk',
            'status_pembayaran' => true,
            'user_id' => mt_rand(1, 4),
        ];
    }
}