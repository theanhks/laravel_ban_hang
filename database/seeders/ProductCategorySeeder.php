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
                'is_show' => 1,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Đá xếp', 
                'is_show' => 1,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Que hàn', 
                'is_show' => 1,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Dây hàn', 
                'is_show' => 1,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Phụ kiện máy hàn', 
                'is_show' => 1,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Máy hàn', 
                'is_show' => 1,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Máy cắt mài', 
                'is_show' => 1,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Cuộn PE', 
                'is_show' => 1,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Cuộn băng keo', 
                'is_show' => 1,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
        ]);
    }
}
