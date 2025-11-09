<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','slug','excerpt','body','posted_at','category_id','writer_id','views'];

    protected $dates = ['posted_at'];

    public function category(){ return $this->belongsTo(Category::class); }
    public function writer(){ return $this->belongsTo(Writer::class); }
}
