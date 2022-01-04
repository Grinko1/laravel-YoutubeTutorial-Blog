<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
   public function __invoke(Post $post)
   {

      
      $date = Carbon::parse($post->created_at);
      $relatedPosts = Post::where('category_id', $post->category_id)
      ->where('id' , '!=', $post->id)
      ->get()
      ->take(3);
      // dd($relatedPosts);
       return view('post.show', compact('post', 'date', 'relatedPosts'));
   }
}
