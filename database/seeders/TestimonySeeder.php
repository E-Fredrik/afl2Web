<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimony;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimony::create([
            'name' => 'Elifele Fredrik',
            'content' => 'The cakes here are very delicious, and the prices are affordable',
        ]);

        Testimony::create([
            'name' => 'Stevanus Ivan Santoso',
            'content' => 'Affordable Pricing!',
        ]);

        Testimony::create([
            'name' => 'Nicholas Gerwin Mawardji',
            'content' => 'The owners are very nice!',
        ]);
        
        Testimony::create([
            "name" => "Kenneth Jonathan Halim",
            "content" => "Wenak Pol!"
        ]);

        Testimony::create([
            "name" => "Keane Juan Suryanto",
            "content" => "Mantap Jiwa!"
        ]);

        Testimony::create([
            "name" => "Bryan Carlie Lukito Setiawan",
            "content" => "Recomended!"
        ]);
    }
}
