<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(\App\Models\Store::class, function(Faker $faker){
    return[
        'name' =>$faker->name,
        'description'=>$faker-> sentence,
        'phone' => $faker-> phoneNumber,
        'mobile_phone' => $faker->PhoneNumber,
        'slug' =>$faker-> slug,
    ];
});
