<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $nimLastDigit = config('student.nim_last_digit', 1);
        $isOdd = $nimLastDigit % 2 == 1;
        $categories = $isOdd ? Category::whereIn('name', ['Data Science','Network Security'])->get()
                             : Category::whereIn('name', ['Interactive Multimedia','Software Engineering'])->get();
        return view('category', compact('categories'));
    }

    public function show($slug){
        $category = Category::where('slug',$slug)->firstOrFail();
        $posts = $category->posts()->orderBy('posted_at','desc')->get();
        return view('category_detail', compact('category','posts'));
    }
}
