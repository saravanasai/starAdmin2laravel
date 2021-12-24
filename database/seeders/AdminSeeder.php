<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Random;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"Saravana Sai",
            "email"=>"saravanasai002@gmail.com",
            "password"=>Hash::make('1412'),
            "phone_number"=>"7708454539",
            "is_admin"=>1,
            "remember_token"=>Random::generate(30)
        ]);
    }
}
