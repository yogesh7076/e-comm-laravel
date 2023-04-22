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
            // 'gallery' => 'https://cdn1.smartprix.com/rx-iWRxpIqmX-w1200-h1200/xiaomi-redmi-note-12.webp',
            // 'description'=>'LG mobile is best looking',
            // ],
            // [
            //     'name' => 'Oppo mobile',
            //     'price' => '20000',
            //     'category' => 'mobile',
            //     'gallery' => 'https://cdn1.smartprix.com/rx-irXffkIgw-w1200-h1200/xiaomi-redmi-note-12.webp',
            //     'description'=>'Oppo mobile is best looking',

            // ],
            // [
            //     'name' => 'iPhone13',
            //     'price' => '62,790',
            //     'category' => 'mobile',
            //     'gallery' => 'https://cdn1.smartprix.com/rx-iKOBhegT2-w1200-h1200/xiaomi-redmi-note-12.webp',
            //     'description'=>'iPhone mobile is best looking',

            // ],
            // [
            //     'name' => 'mi 10 pro mobile',
            //     'price' => '33,499',
            //     'category' => 'mobile',
            //     'gallery' => 'https://www.smartprix.com/mobiles/oneplus-nord-ce-2-lite-5g-ppd1dhnh78au',
            //     'description'=>'mi mobile is best looking',

            // ],
            [
                'name' => ' samsung S23+',
                'price' => '74,000',
                'category' => 'mobile',
                'gallery' => 'https://d2xamzlzrdbdbn.cloudfront.net/products/dd6cabec-a0f9-4b30-89fc-9a2ee48301f622111157.jpg',
                'description'=>'samsung mobile is best looking',

            ]
        );
    }
}
