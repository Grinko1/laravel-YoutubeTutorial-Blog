<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;



class StoreController extends Controller
{
   public function __invoke(Post $post)
   {
   
      auth()->user()->likedPosts()->toggle($post->id);
      // dd($post->id);
      // Comment::create($data);
  
       return redirect()->back();
   }
}
