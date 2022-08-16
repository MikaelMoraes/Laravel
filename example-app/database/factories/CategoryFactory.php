<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(\App\Models\Category::class, function(Faker $faker){
    return[
        'name' =>$faker->name,
        'description'=>$faker-> sentence,
        'slug' =>$faker-> slug,
    ];
});
