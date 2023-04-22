<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Hash;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(
            // [
            // 'name' => 'LG mobile',
            // 'price' => '10000',
            // 'category' => 'mobile',
            // 'gallery' => 'https://www.smartprix.com/mobiles/oneplus-nord-ce-2-lite-5g-ppd1dhnh78au',
            // 'description'=>'LG mobile is best looking',
            // ],
            [
                'name' => 'Oppo mobile',
                'price' => '20000',
                'category' => 'mobile',
                'gallery' => 'https://www.smartprix.com/mobiles/xiaomi-redmi-note-12-ppd1wlmjnc58',
                'description'=>'Oppo mobile is best looking',

            ],
            [
                'name' => 'iPhone13',
                'price' => '62,790',
                'category' => 'mobile',
                'gallery' => 'https://www.vijaysales.com/apple-iphone-13-128-gb-storage-starlight/17462?msclkid=50e9649f03e21fe1f88500dc6444ba6f&utm_source=bing&utm_medium=cpc&utm_campaign=Bing%20Standard%20Shopping%20PLA%20ROI&utm_term=4588674342840759&utm_content=All%20Products%20-%20Delhi%20NCR',
                'description'=>'iPhone mobile is best looking',

            ],
            [
                'name' => 'mi 10 pro mobile',
                'price' => '33,499',
                'category' => 'mobile',
                'gallery' => 'https://www.smartprix.com/mobiles/oneplus-nord-ce-2-lite-5g-ppd1dhnh78au',
                'description'=>'mi mobile is best looking',

            ],
            [
                'name' => ' samsung S23+',
                'price' => '74,000',
                'category' => 'mobile',
                'gallery' => 'https://www.samsung.com/in/smartphones/galaxy-s23/buy/?modelCode=SM-S911BZEB&cid=in_pd_search_bing_f1h23-dm_sales_tat-f1h23-q1-2023_shopping_01apr2023-na_1ur-451042l-keyword-cpc_na-82532458792252-518656993-1320515120454935-pla-4586131723715163-default-e--o--SM-S911BZEBINS&msclkid=62b2f20dea391a2dc514964e82bb8ddf',
                'description'=>'samsung mobile is best looking',

            ]
        );
    }
}
