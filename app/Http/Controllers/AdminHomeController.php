<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

use App\Http\Controllers\Controller;


class AdminHomeController extends Controller
{
    public function index() {

    $users_count = User::where("type","user")
    ->count();
    $posts_count = Post::count();
    return view("admin.pages.home.index" ,compact("users_count", "posts_count"));
}
}
