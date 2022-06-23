<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new Category;
        $cat->name = 'Nintendo Switch';
        $cat->image = 'images/switch.png';
        $cat->description = 'lorem ipsum dolor';
        $cat->save();

        $cat = new Category;
        $cat->name = 'Xbox Series X';
        $cat->image = 'images/seriesX.png';
        $cat->description = 'lorem ipsum dolor';
        $cat->save();

        $cat = new Category;
        $cat->name = 'Play Station 5';
        $cat->image = 'images/ps5.png';
        $cat->description = 'lorem ipsum dolor';
        $cat->save();
    }
}
