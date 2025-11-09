<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    public function index(){
        $writers = Writer::all();
        return view('writers', compact('writers'));
    }

    public function show($id){
        $writer = Writer::findOrFail($id);
        $posts = $writer->posts()->orderBy('posted_at','desc')->get();
        return view('writer_posts', compact('writer','posts'));
    }
}
