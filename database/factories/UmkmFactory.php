<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class UmkmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug(),
            'nama_product' => $this->faker->sentence(mt_rand(1, 5)),
            'nama_penjual' => $this->faker->name(),
            'alamat_penjual' => $this->faker->address(),
            'contact' => $this->faker->phoneNumber(),
            'link_shopee' => 'https://shopee.co.id/',
            'link_tokopedia' => 'https://www.tokopedia.com/',
            'harga_minimum' => mt_rand(10000, 25000),
            'harga_maximum' => mt_rand(25000, 50000),
            'deskripsi' => collect($this->faker->paragraphs(mt_rand(10, 20)))->map(fn ($p) => "<p>$p</p>")->implode(''),
            'kondisi_penyimpanan' => $this->faker->sentence(mt_rand(1, 5)),
            'berat_produk' => mt_rand(1, 25),
            'expired' => $this->faker->unixTime(new DateTime('+2 weeks')),
            'umkmcategories_id' => mt_rand(1, 3),


        ];
    }
}