<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr_image = [
            'https://lp2.hm.com/hmgoepprod?set=source[/45/da/45dabfdbf75c5f1e53c46037e1bd721f1bbd9112.jpg],origin[dam],category[],type[LOOKBOOK],res[z],hmver[1]&call=url[file:/product/main]',
            'https://lp2.hm.com/hmgoepprod?set=source[/ae/d6/aed687fbd8da394599c7e68a48d5d25741e3f54e.jpg],origin[dam],category[],type[LOOKBOOK],res[z],hmver[1]&call=url[file:/product/main]',
            'https://lp2.hm.com/hmgoepprod?set=source[/1b/61/1b6156e857d94f01e0888f33fc6f0323dc124873.jpg],origin[dam],category[],type[LOOKBOOK],res[z],hmver[1]&call=url[file:/product/main]',
            'https://lp2.hm.com/hmgoepprod?set=source[/68/3b/683b4bfe0975246d4483476eeb7d5641dc94b953.jpg],origin[dam],category[],type[LOOKBOOK],res[z],hmver[1]&call=url[file:/product/main]',
            'https://lp2.hm.com/hmgoepprod?set=source[/17/ae/17ae02c3d9b0cadbb76b8629ccb20af9fdccf8cc.jpg],origin[dam],category[],type[LOOKBOOK],res[z],hmver[1]&call=url[file:/product/main]',
            'https://lp2.hm.com/hmgoepprod?set=source[/4d/e2/4de29a6bc141bf0b9b938a825b68adf304b1b218.jpg],origin[dam],category[kids_baby_girl_clothing_jumpsuitsplaysuits],type[DESCRIPTIVESTILLLIFE],res[z],hmver[2]&call=url[file:/product/main]',
            'https://lp2.hm.com/hmgoepprod?set=source[/82/9f/829f7a667e15d1164b12891c0a84d3eb2ebe3b00.jpg],origin[dam],category[kids_baby_boy_shoes_sandalsflipflops],type[DESCRIPTIVESTILLLIFE],res[z],hmver[2]&call=url[file:/product/main]',
            'https://lp2.hm.com/hmgoepprod?set=source[/2f/c5/2fc57077e6c760bf2f5f1e40be21dd4dc635508d.jpg],origin[dam],category[],type[DESCRIPTIVESTILLLIFE],res[y],hmver[2]&call=url[file:/product/main]',
            'https://lp2.hm.com/hmgoepprod?set=source[/da/90/da9057ff360452e184afa14d2e4224a2fab28381.jpg],origin[dam],category[men_socks_multipacks],type[DESCRIPTIVESTILLLIFE],res[y],hmver[2]&call=url[file:/product/main]',
            'https://lp2.hm.com/hmgoepprod?set=source[/97/08/970872970a743acc1f447e2fb18ffbd688a35268.jpg],origin[dam],category[],type[DESCRIPTIVESTILLLIFE],res[y],hmver[2]&call=url[file:/product/main]',
            'https://lp2.hm.com/hmgoepprod?set=source[/b0/b6/b0b6188e460aec97d92985e6fc2e3029a3014b6e.jpg],origin[dam],category[],type[DESCRIPTIVESTILLLIFE],res[y],hmver[2]&call=url[file:/product/main]',
        ];

        $category_ids = DB::table('categories')->pluck('id');

        for ($i = 0; $i < 50; $i++) {
            DB::table('products')->insert([
                'name' => 'Product ' . ($i + 1),
                'image' => $arr_image[array_rand($arr_image)],
                'description' => 'This is a description for Product ' . ($i + 1),
                'price' => mt_rand(10000, 200000),
                'quantity' => mt_rand(0, 100),
                'sold' => mt_rand(0, 50),
                'category_id' => $category_ids->random(),
                'hidden' => mt_rand(0, 1),
            ]);
        }
    }
}
