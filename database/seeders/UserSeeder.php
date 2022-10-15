<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Ghaith El-Hamwi',
            'email' => 'ghaithhamwi123@outlook.com',
            'role_id' => '2'
        ]);

        User::factory()->create([
            'name' => 'Nazer Sarayji',
            'email' => 'vigelnaz@gmail.com',
            'role_id' => '1'
        ]);

        User::factory()->create([
            'name' => 'Mashael Farajalla',
            'email' => 'mashael.qwer@gmail.com',
            'role_id' => '1'
        ]);
    }
}
