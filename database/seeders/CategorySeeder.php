<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $erkek = Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Erkek',
            'content' => 'erkek giyim',
            'cat_ust' => null,
            'status' => '1',
        ]);
        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Erkek Kazak',
            'content' => 'erkek kazak giyim',
            'cat_ust' => $erkek->id,

            'status' => '1',
        ]);
        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Erkek Pantolon',
            'content' => 'erkek Dış giyim',
            'cat_ust' => $erkek->id,

            'status' => '1',
        ]);
        $kadin = Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Kadın',
            'content' => 'Kadın giyim',
            'cat_ust' => null,

            'status' => '1',
        ]);
        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Kadın Çanta',
            'content' => 'Kadın Aksesuar',
            'cat_ust' => $kadin->id,

            'status' => '1',
        ]);
        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Kadın Elbise',
            'content' => 'Kadın Dış Giyim',
            'cat_ust' => $kadin->id,

            'status' => '1',
        ]);
        $cocuk = Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Çocuk',
            'content' => 'Çocuk giyim',
            'cat_ust' => null,

            'status' => '1',
        ]);
        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Çocuk Oyuncak',
            'content' => 'Çocuk Eğlence',
            'cat_ust' => $cocuk->id,

            'status' => '1',
        ]);
        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Çocuk mont',
            'content' => 'Çocuk Dış Giyim',
            'cat_ust' => $cocuk->id,

            'status' => '1',
        ]);
    }
}
