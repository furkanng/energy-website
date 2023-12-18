<?php

namespace Database\Seeders;

use App\Models\Catalog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("catalog")->delete();

        $defaultData =
            [
                [
                    'id' => 1,
                    'image' => "cetinkaya-pano-logo.jpg",
                    'pdf' => 'proforma1.pdf',
                    "status" => 1
                ],
                [
                    'id' => 2,
                    'image' => "momentum-logo.jpg",
                    'pdf' => 'proforma2.pdf',
                    "status" => 1
                ],
                [
                    'id' => 3,
                    'image' => "birikim-logo.jpg",
                    'pdf' => 'proforma3.pdf',
                    "status" => 1
                ],
                [
                    'id' => 4,
                    'image' => "safak-logo.jpg",
                    'pdf' => 'proforma4.pdf',
                    "status" => 1
                ],
                [
                    'id' => 5,
                    'image' => "unit-logo.jpg",
                    'pdf' => 'proforma5.pdf',
                    "status" => 1
                ],
                [
                    'id' => 6,
                    'image' => "banner-logo.jpg",
                    'pdf' => 'proforma6.pdf',
                    "status" => 1
                ],

            ];

        Catalog::query()->insert($defaultData);
    }
}
