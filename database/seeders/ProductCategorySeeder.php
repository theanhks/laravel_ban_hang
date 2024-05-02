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
            ['category_id' => 1, 'category_name' => 'Đá mài, đá cắt', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 2, 'category_name' => 'Đá xếp', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 3, 'category_name' => 'Que hàn', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 4, 'category_name' => 'Dây hàn', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 5, 'category_name' => 'Phụ kiện máy hàn', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 5, 'category_name' => 'Máy hàn', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 5, 'category_name' => 'Máy cắt mài', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 5, 'category_name' => 'Cuộn PE', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 5, 'category_name' => 'Cuộn băng keo', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
