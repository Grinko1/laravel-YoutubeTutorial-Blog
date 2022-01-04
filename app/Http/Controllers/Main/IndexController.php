<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
   public function __invoke()
   {

       return redirect()->route('post.index');
   }
}

  

// namespace App\Http\Controllers\Main;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\Post;

// class IndexController extends Controller
// {
//    public function __invoke()
//    {
//        $posts = Post::paginate(9);
//        $randomPost = Post::get()->random(4);
//        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
//     //    dd($likedPosts);
//        return view('main.index', compact('posts', 'randomPost', 'likedPosts'));
//    }
// } -->
