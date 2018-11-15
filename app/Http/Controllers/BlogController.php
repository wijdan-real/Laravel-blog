<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{

  /* public function __construct()
    {
        $this->middleware('auth:web',['except'=>'getIndex']);
    } */


    public function getIndex() {

     $posts=Post::paginate(4);

     return view('blog.index')->withPosts($posts);

    }

    public function getSingle($slug) {

        //fetch from the Database based on slug

        $post=Post::where('slug','=',$slug)->first();

        //return view and pass in the psot

        return view('blog.single')->withPost($post);

    }

}



