<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class IndexController extends Controller
{
   public function __invoke(Category $category)
   {
      $posts = $category->posts;
       return view('category.post.index', compact('posts'));
   }
}
