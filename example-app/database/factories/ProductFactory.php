<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(\App\Models\Product::class, function(Faker $faker){
    return[
        'name' =>$faker->name,
        'description'=>$faker-> sentence,
        'body' => $faker-> paragraph(5, true),
        'price' => $faker->randomFloat(2, 10),
        'slug' =>$faker-> slug,
    ];
});
