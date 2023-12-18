<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("slider")->delete();

        $defaultData =
            [
                [
                    'id' => 1,
                    'title' => 'Enerji Yaşamdır',
                    'image' => "slider1.jpg",
                    'url' => config("app.url") . "/storage/slider/slider1.jpg",
                    "status" => 1
                ],
                [
                    'id' => 2,
                    'title' => 'Enerji Hayattır',
                    'image' => "slider2.jpg",
                    'url' => config("app.url") . "/storage/slider/slider2.jpg",
                    "status" => 1
                ],
            ];

        Slider::query()->insert($defaultData);
    }
}
