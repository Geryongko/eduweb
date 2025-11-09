<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PopularController extends Controller
{
    public function index(){
        $popular = Post::orderBy('views','desc')->paginate(3);
        return view('popular', compact('popular'));
    }
}
