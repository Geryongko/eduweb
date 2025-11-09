<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(){
        $cats = [
            ['name'=>'Data Science','slug'=>'data-science'],
            ['name'=>'Network Security','slug'=>'network-security'],
            ['name'=>'Interactive Multimedia','slug'=>'interactive-multimedia'],
            ['name'=>'Software Engineering','slug'=>'software-engineering'],
        ];
        foreach($cats as $c) Category::create($c);
    }
}
