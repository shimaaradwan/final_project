<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    $posts1 = Post::where("featured",1)
    ->limit(4)->get();
     $posts2 = Post::where("published", 1)
     ->limit(1)->get();
     $posts3 = Post::where("published", 1)
     ->limit(6)->get();
     $posts4 = Post::where('views',688061)
     ->limit(1)->get();

     return view("front.layout.index", compact('posts1', 'posts2', 'posts3','posts4'));

    }
}
