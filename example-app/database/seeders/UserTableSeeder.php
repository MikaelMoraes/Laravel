<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       factory(\App\Models\User::class, 40)->create()->each(function($user){
        $user->store()->save(factory(\App\Models\Store::class)->make());
       });
    }
}
