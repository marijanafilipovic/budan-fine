<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
        public function index()
        {
           // $posts = Posts::all();
            $posts = Post::paginate(1);
            return view('posts.index', [
                'posts' => $posts,
            ]);
         //   return view('posts.index', compact('datablog'))
         //       ->with('i', (request()->input('page, 1')-1)*5);

        }
       // public function single($id){
         //   $post = Post::find($id);
           // return view('posts.single')->with('post', $post);
       // }

}
