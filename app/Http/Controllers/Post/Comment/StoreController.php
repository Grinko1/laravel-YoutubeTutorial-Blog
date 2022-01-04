<?php

namespace App\Http\Controllers\Post\Comment;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Comment;


class StoreController extends Controller
{
   public function __invoke(Post $post, StoreRequest $request)
   {
   
      $data = $request->validated();
      $data['user_id'] = auth()->user()->id;
      $data['post_id'] = $post->id;
      // dd($data);
      Comment::create($data);
  
       return redirect()->route('post.show', $post->id);
   }
}
