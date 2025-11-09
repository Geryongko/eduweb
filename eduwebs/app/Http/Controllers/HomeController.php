<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $latest = Post::orderBy('posted_at','desc')->take(3)->get();
        return view('home', compact('latest'));
    }
}
