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
                'name'=> 'Poco mobile',
                'price' =>'1000',
                'description' => 'A Smart Phone- 16gb ram',
                'category' =>'Mobile',
                'gallery' =>'https://handybuy.lk/wp-content/uploads/2021/02/nfc-128.jpeg',
            ],
            [
                'name'=> 'Pixel mobile',
                'price' =>'5000',
                'description' => 'A Smart Phone- 4gb ram',
                'category' =>'Mobile',
                'gallery' =>'https://www.simplytek.lk/wp-content/uploads/2023/05/Pixel-7-Black-Simplytek-LK-1.jpg',
            ],
            [
                'name'=> 'Apple mobile',
                'price' =>'10000',
                'description' => 'A Smart Phone- 4gb ram',
                'category' =>'Mobile',
                'gallery' =>'https://appleasia.lk/wp-content/uploads/2023/03/iPhone-14-Pro-Max-Apple-Asia-Srilanka-Purple-1-1024x1024.webp',
            ],
            [
                'name'=> 'Huawei mobile',
                'price' =>'2000',
                'description' => 'A Smart Phone- 4gb ram',
                'category' =>'Mobile',
                'gallery' =>'https://www.okmobile.com.pk/wp-content/uploads/2022/12/2-10.jpg',
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
                'gallery' =>'https://i0.wp.com/doctormobile.lk/wp-content/uploads/2023/03/Nokia-C12-Light-Mint-best-price-in-Sri-Lanka.jpg?fit=600%2C600&ssl=1',
            ],
            [
                'name'=> 'Nokia mobile',
                'price' =>'200000',
                'description' => 'A Smart Phone- 4gb ram',
                'category' =>'Mobile',
                'gallery' =>'https://consumer.huawei.com/content/dam/huawei-cbg-site/common/mkt/pdp/phones/p40-pro/images/power/reverse-e.jpg',
            ],
            
        ]);
    }
}
