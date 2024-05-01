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
            ['category_id' => 1, 'category_name' => 'Bo Mạch Máy Laser', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 2, 'category_name' => 'Bo Mạch Máy Hàn', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 3, 'category_name' => 'Quạt', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 4, 'category_name' => 'Công Tắc', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 5, 'category_name' => 'Linh Kiện Dán', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
