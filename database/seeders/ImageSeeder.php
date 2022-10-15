<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < sizeof(Project::all('id')->toArray()) + 1; $i++) {
            Image::factory(1)->create([
                'main' => true,
                'project_id' => $i,
            ]);
            Image::factory(6)->create([
                'project_id' => $i,
            ]);
        }
    }
}
