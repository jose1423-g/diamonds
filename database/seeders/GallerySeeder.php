<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $rows = [
            ['img_gallery' => 'gallery_1.webp', 'name_img' => null, 'status' => 1],
            ['img_gallery' => 'gallery_3.webp', 'name_img' => null, 'status' => 1],
            ['img_gallery' => 'gallery_4.webp', 'name_img' => null, 'status' => 1],
            ['img_gallery' => 'gallery_2.webp', 'name_img' => null, 'status' => 1],
            ['img_gallery' => 'gallery_5.webp', 'name_img' => null, 'status' => 1],
            ['img_gallery' => 'gallery_6.webp', 'name_img' => null, 'status' => 1],
        ];

        foreach ($rows as $row) {
            DB::table('gallery')->insert($row);
        }
    }
}
