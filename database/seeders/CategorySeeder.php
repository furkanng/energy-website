<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->delete();

        $defaultData =
            [
                [
                    'id' => 1,
                    'name' => 'Elektrik Motorları',
                    'image' => "elektrik-motoru.jpg",
                    'seo_link' => 'elektrik-motorlari',
                    "status" => 1
                ],
                [
                    'id' => 2,
                    'name' => 'Elektrik Malzemeleri',
                    'image' => "elektrik-malzemeleri-toptan.jpg",
                    'seo_link' => 'elektrik-malzemeleri',
                    "status" => 1
                ],
                [
                    'id' => 3,
                    'name' => 'Redüktörler',
                    'image' => "reduktor.png",
                    'seo_link' => 'reduktorler',
                    "status" => 1
                ],
                [
                    'id' => 4,
                    'name' => 'Fan ve Aspiratörler',
                    'image' => "aspirator.webp",
                    'seo_link' => 'fan-aspirator',
                    "status" => 1
                ],
                [
                    'id' => 5,
                    'name' => 'Manyetik Frenler',
                    'image' => "manyetik-Fren.png",
                    'seo_link' => 'manyetik-frenler',
                    "status" => 1
                ],
                [
                    'id' => 6,
                    'name' => 'Kaplin ve Kasnaklar',
                    'image' => "kaplinkasnak.jpg",
                    'seo_link' => 'kaplin-kasnak',
                    "status" => 1
                ],
                [
                    'id' => 7,
                    'name' => 'Pompalar',
                    'image' => "pompa.jpg",
                    'seo_link' => 'pompalar',
                    "status" => 1
                ],
                [
                    'id' => 8,
                    'name' => 'AG OG Panoları',
                    'image' => "ag-og-dagitim-panolari.jpg",
                    'seo_link' => 'ag-og-panolari',
                    "status" => 1
                ],
                [
                    'id' => 9,
                    'name' => 'Otomasyon',
                    'image' => "otomasyon.jpg",
                    'seo_link' => 'otomasyon',
                    "status" => 1
                ],
                [
                    'id' => 10,
                    'name' => 'Kablo',
                    'image' => "cable.jpg",
                    'seo_link' => 'kablo',
                    "status" => 1
                ],
                [
                    'id' => 11,
                    'name' => 'Aydınlatma',
                    'image' => "aydinlatma.jpg",
                    'seo_link' => 'aydinlatma',
                    "status" => 1
                ],
                [
                    'id' => 12,
                    'name' => 'Anahtar Priz',
                    'image' => "priz.webp",
                    'seo_link' => 'anahtar-priz',
                    "status" => 1
                ],

            ];

        Category::query()->insert($defaultData);
    }
}
