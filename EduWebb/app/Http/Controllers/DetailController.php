<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DetailController extends Controller
{
    public function show($slug){
        $post = Post::where('slug',$slug)->firstOrFail();
        $post->increment('views');
        return view('detail', compact('post'));
    }
}
