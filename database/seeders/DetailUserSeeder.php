<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Seeder;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detailUser = [
            [
                'user_id' => 1,
                'photo' => 'tanteku.jpg',
                'role' => 'Website Developer',
                'contact_number' => '',
                'bioghrapy' => '',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'user_id' => 2,
                'photo' => 'tanteku.jpg',
                'role' => 'Mobile Developer',
                'contact_number' => '',
                'bioghrapy' => '',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
        ];
        DetailUser::insert($detailUser);
    }
}
