<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name" => "udin",
                "email" =>"udin@bwa.com",
                "password" => Hash::make("password"),
                "remember_token"=>null,
                "created_at" => date('Y-m-d h:i:s'),
                "updated_at" => date('Y-m-d h:i:s'),
            ],
            [
                "name" => "dina",
                "email" =>"dina@bwa.com",
                "password" => Hash::make("password"),
                "remember_token"=>null,
                "created_at" => date('Y-m-d h:i:s'),
                "updated_at" => date('Y-m-d h:i:s'),
            ],
        ];
        User::insert($users);
    }
}
