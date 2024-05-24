<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Quần jeans', 'description' => 'Quần jeans nam nữ đẹp'],
            ['name' => 'Áo thun', 'description' => 'Áo thun nam nữ mát mẻ'],
            ['name' => 'Áo sơ mi', 'description' => 'Áo sơ mi nam nữ thời trang'],
            ['name' => 'Quần short', 'description' => 'Quần short nam nữ thoải mái'],
            ['name' => 'Áo khoác', 'description' => 'Áo khoác nam nữ ấm áp'],
            ['name' => 'Đồ ngủ', 'description' => 'Đồ ngủ nam nữ thoải mái, thoáng khí'],
            ['name' => 'Đồ thể thao', 'description' => 'Đồ thể thao nam nữ thoải mái, thoáng khí'],
            ['name' => 'Đồ bơi', 'description' => 'Đồ bơi nam nữ thoải mái, thoáng khí'],
            ['name' => 'Phụ kiện', 'description' => 'Phụ kiện thời trang nam nữ'],
        ]);
    }
}
