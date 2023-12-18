<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("sub_categories")->delete();

        $defaultData =
            [
                [
                    'id' => 1,
                    'category_id' => 1,
                    'name' => 'Gamak Motor',
                    'image' => "gamaklogo.jpg",
                    'content' => "Ray Klemensler
                     Endüstriyel Röleler
                     Pano Aksesuarları
                     Plotter ve Aksesuarlar
                     Etiketleme Çözümleri
                     Termal Yazıcı ve Çözümleri
                     Evomax Ürünleri
                     Yüksük ve Pabuçlar Yazılım ve Sürücüler",
                    'seo_link' => 'gamak-motorlari',
                    "status" => 1
                ],
                [
                    'id' => 2,
                    'category_id' => 1,
                    'name' => 'ELK Motor',
                    'image' => "elk-motor-logo.jpg",
                    'content' => "Ray Klemensler
                     Endüstriyel Röleler
                     Pano Aksesuarları
                     Plotter ve Aksesuarlar
                     Etiketleme Çözümleri
                     Termal Yazıcı ve Çözümleri
                     Evomax Ürünleri
                     Yüksük ve Pabuçlar Yazılım ve Sürücüler",
                    'seo_link' => 'elk-motorlari',
                    "status" => 1
                ],
                [
                    'id' => 3,
                    'category_id' => 1,
                    'name' => 'Omega',
                    'image' => "omega-logo.jpg",
                    'content' => "Ray Klemensler
                     Endüstriyel Röleler
                     Pano Aksesuarları
                     Plotter ve Aksesuarlar
                     Etiketleme Çözümleri
                     Termal Yazıcı ve Çözümleri
                     Evomax Ürünleri
                     Yüksük ve Pabuçlar Yazılım ve Sürücüler",
                    'seo_link' => 'omega',
                    "status" => 1
                ],
                [
                    'id' => 4,
                    'category_id' => 1,
                    'name' => 'Volt',
                    'image' => "voltlogo.jpg",
                    'content' => "Ray Klemensler
                     Endüstriyel Röleler
                     Pano Aksesuarları
                     Plotter ve Aksesuarlar
                     Etiketleme Çözümleri
                     Termal Yazıcı ve Çözümleri
                     Evomax Ürünleri
                     Yüksük ve Pabuçlar Yazılım ve Sürücüler",
                    'seo_link' => 'volt',
                    "status" => 1
                ],
                [
                    'id' => 5,
                    'category_id' => 2,
                    'name' => 'Molvex',
                    'image' => "molwexLogo.jpg",
                    'content' => "Ray Klemensler
                     Endüstriyel Röleler
                     Pano Aksesuarları
                     Plotter ve Aksesuarlar
                     Etiketleme Çözümleri
                     Termal Yazıcı ve Çözümleri
                     Evomax Ürünleri
                     Yüksük ve Pabuçlar Yazılım ve Sürücüler",
                    'seo_link' => 'molvex',
                    "status" => 1
                ],
                [
                    'id' => 6,
                    'category_id' => 2,
                    'name' => 'Siemens',
                    'image' => "siemensLogo.jpg",
                    'content' => "Ray Klemensler
                     Endüstriyel Röleler
                     Pano Aksesuarları
                     Plotter ve Aksesuarlar
                     Etiketleme Çözümleri
                     Termal Yazıcı ve Çözümleri
                     Evomax Ürünleri
                     Yüksük ve Pabuçlar Yazılım ve Sürücüler",
                    'seo_link' => 'siemens',
                    "status" => 1
                ],
                [
                    'id' => 7,
                    'category_id' => 2,
                    'name' => 'Schneider',
                    'image' => "schneiderLogo.jpg",
                    'content' => "Ray Klemensler
                     Endüstriyel Röleler
                     Pano Aksesuarları
                     Plotter ve Aksesuarlar
                     Etiketleme Çözümleri
                     Termal Yazıcı ve Çözümleri
                     Evomax Ürünleri
                     Yüksük ve Pabuçlar Yazılım ve Sürücüler",
                    'seo_link' => 'schneider',
                    "status" => 1
                ],
                [
                    'id' => 8,
                    'category_id' => 2,
                    'name' => 'Emas',
                    'image' => "emasLogo.jpg",
                    'content' => "Ray Klemensler
                     Endüstriyel Röleler
                     Pano Aksesuarları
                     Plotter ve Aksesuarlar
                     Etiketleme Çözümleri
                     Termal Yazıcı ve Çözümleri
                     Evomax Ürünleri
                     Yüksük ve Pabuçlar Yazılım ve Sürücüler",
                    'seo_link' => 'emas',
                    "status" => 1
                ],


            ];

        SubCategory::query()->insert($defaultData);
    }
}
