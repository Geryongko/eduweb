<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(){
        $ds = Category::where('slug','data-science')->first();
        $ns = Category::where('slug','network-security')->first();
        $writers = Writer::all();

        $posts = [
            ['title'=>'Introduction to Machine Learning','category'=>$ds,'writer'=>$writers->random()],
            ['title'=>'Deep Learning Basics','category'=>$ds,'writer'=>$writers->random()],
            ['title'=>'Data Preprocessing Techniques','category'=>$ds,'writer'=>$writers->random()],
            ['title'=>'Software Security Principles','category'=>$ns,'writer'=>$writers->random()],
            ['title'=>'Network Administration Essentials','category'=>$ns,'writer'=>$writers->random()],
            ['title'=>'Popular Network Technologies','category'=>$ns,'writer'=>$writers->random()],
        ];

        foreach($posts as $p){
            Post::create([
                'title' => $p['title'],
                'slug' => Str::slug($p['title']) . '-' . rand(100,999),
                'excerpt' => substr($p['title'] . ' - ringkasan materi...', 0, 200),
                'body' => $p['title'] . "\n\nIsi materi lengkap di sini...",
                'posted_at' => now()->subDays(rand(0,30)),
                'category_id' => $p['category']->id,
                'writer_id' => $p['writer']->id,
                'views' => rand(0,200),
            ]);
        }
    }
}
