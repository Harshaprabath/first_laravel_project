<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;




class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=> 'Huawei mobile',
                'price' =>'2000',
                'description' => 'A Smart Phone- 4gb ram',
                'category' =>'Mobile',
                'gallery' =>'https://samsungsrilanka.lk/pub/media/catalog/product/s/m/sm-s901_galaxys22_front_phantomwhite.jpg',
            ],
            [
                'name'=> 'Oppo mobile',
                'price' =>'20000',
                'description' => 'A Smart Phone- 8gb ram',
                'category' =>'Mobile',
                'gallery' =>'https://www.mytrendyphone.eu/images2/Saii-Brushed-TPU-Case-for-Google-Pixel-3-XL-Black-17092018-01-p.jpg',
            ],
            [
                'name'=> 'Samsung mobile',
                'price' =>'250000',
                'description' => 'A Smart Phone- 16gb ram',
                'category' =>'Mobile',
                'gallery' =>'https://samsungsrilanka.lk/pub/media/catalog/product/s/m/sm-s901_galaxys22_front_phantomwhite.jpg',
            ],
            [
                'name'=> 'Nokia mobile',
                'price' =>'200000',
                'description' => 'A Smart Phone- 4gb ram',
                'category' =>'Mobile',
                'gallery' =>'https://www.mytrendyphone.eu/images2/Saii-Brushed-TPU-Case-for-Google-Pixel-3-XL-Black-17092018-01-p.jpg',
            ],
            
        ]);
    }
}
