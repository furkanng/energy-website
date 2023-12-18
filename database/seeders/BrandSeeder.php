<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("brands")->delete();

        $defaultData =
            [
                [
                    'id' => 1,
                    'image' => "omron-logo.jpg",
                    'seo_link' => 'omron-logo',
                    "status" => 1
                ],
                [
                    'id' => 2,
                    'image' => "ack-logo.jpg",
                    'seo_link' => 'ack-logo',
                    "status" => 1
                ],
                [
                    'id' => 3,
                    'image' => "banner-logo.jpg",
                    'seo_link' => 'banner-logo',
                    "status" => 1
                ],
                [
                    'id' => 4,
                    'image' => "cetinkaya-pano-logo.jpg",
                    'seo_link' => 'cetinkaya-pano-logo',
                    "status" => 1
                ],
                [
                    'id' => 5,
                    'image' => "momentum-logo.jpg",
                    'seo_link' => 'momentum-logo',
                    "status" => 1
                ],
                [
                    'id' => 6,
                    'image' => "emas-logo.jpg",
                    'seo_link' => 'emas-logo',
                    "status" => 1
                ],

            ];

        Brand::query()->insert($defaultData);
    }
}
