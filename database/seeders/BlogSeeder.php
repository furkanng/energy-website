<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("blogs")->delete();

        $defaultData =
            [
                [
                    'id' => 1,
                    'title' => 'Elektrik Motoru İçin İlk Durak!',
                    'image' => "elektrik-malzemeleri-toptan.jpg",
                    'content' => "Elektrik Motorları GAMAK EMTAŞ VOLT FEMSAN ve diğer markalar, tüm yedek parçaları ile stoklarımızda ENERJİ VERİMLİLİĞİ, YÜKSEK KALİTE, UYGUN FİYAT DİYORUZ... TANIŞMAK İÇİN SİZİ OFİSİMİZE BEKLİYORUZ.
Elektrik Motorları GAMAK EMTAŞ VOLT FEMSAN ve diğer markalar, tüm yedek parçaları ile stoklarımızda ENERJİ VERİMLİLİĞİ, YÜKSEK KALİTE, UYGUN FİYAT DİYORUZ... TANIŞMAK İÇİN SİZİ OFİSİMİZE BEKLİYORUZ.",
                    'seo_link' => 'elektrik-motorlari-blog',
                    "status" => 1
                ],
                [
                    'id' => 2,
                    'title' => 'Redüktörler İçin Tek Noktadan Komple Çözüm',
                    'image' => "elektrik-motoru.jpg",
                    'content' => "Redüktörler İçin Tek Noktadan Komple Çözüm REDÜKTÖRLER ELEKTRİK MOTORLU REDÜKTÖRLER YEDEK PARÇALAR Motorlu yada motorsuz redüktör alacaksanız İDDİALIYIZ!
Redüktörler İçin Tek Noktadan Komple Çözüm REDÜKTÖRLER ELEKTRİK MOTORLU REDÜKTÖRLER YEDEK PARÇALAR Motorlu yada motorsuz redüktör alacaksanız İDDİALIYIZ!",
                    'seo_link' => 'reduktor-bloglari',
                    "status" => 1
                ],
                [
                    'id' => 3,
                    'title' => 'Okuyucularınızın ilgisini çekecek içerikler ',
                    'image' => "kaplinkasnak.jpg",
                    'content' => "Blog yazısı örnekleri üzerine belirli konuları ele aldığımız bu yazıyı sonuna kadar okuyacak mısınız? Umarım okursunuz. Fakat istatistiklere göre web kullanıcıları genelde yazılı içeriklerin tamamını okumuyor. Bu konuda, beni haksız çıkarmanızı umuyorum.",
                    'seo_link' => 'blog-deneme-yazisi',
                    "status" => 1
                ],
            ];

        Blog::query()->insert($defaultData);
    }
}
