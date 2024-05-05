<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'category_name' => 'Đá mài, đá cắt',
                'image' => NULL, 
                'is_show' => 1,
                'position' => 0,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Đá xếp',
                'image' => NULL, 
                'is_show' => 1,
                'position' => NULL,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Que hàn',
                'image' => NULL, 
                'is_show' => 1,
                'position' => NULL,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Dây hàn',
                'image' => NULL, 
                'is_show' => 1,
                'position' => NULL,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Phụ kiện máy hàn',
                'image' => NULL, 
                'is_show' => 1,
                'position' => NULL,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Máy hàn',
                'image' => NULL, 
                'is_show' => 1,
                'position' => NULL,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Máy cắt mài',
                'image' => NULL, 
                'is_show' => 1,
                'position' => NULL,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Cuộn PE',
                'image' => NULL, 
                'is_show' => 1,
                'position' => NULL,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Cuộn băng keo',
                'image' => NULL, 
                'is_show' => 1,
                'position' => NULL,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Que hàn và dây hàn',
                'image' => '', 
                'is_show' => 1,
                'position' => 1,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Máy hàn cắt và phụ kiện',
                'image' => '', 
                'is_show' => 1,
                'position' => 2,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Máy dụng cụ makita và bosch',
                'image' => '', 
                'is_show' => 1,
                'position' => 3,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Dụng cụ cầm tay',
                'image' => '', 
                'is_show' => 1,
                'position' => 4,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Axit tẩy rửa mối hàn',
                'image' => '', 
                'is_show' => 1,
                'position' => 6,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Màng PE và băng keo',
                'image' => '', 
                'is_show' => 1,
                'position' => 7,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
        ]);
    }
}
