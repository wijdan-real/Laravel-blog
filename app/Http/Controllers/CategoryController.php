<?php

namespace App\Http\Controllers;

//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Session;

use App\Category;
use App\Post;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     * /
     *
     *  public function __construct() {

    $this->middleware('auth');
    }

   */

    public function index()
    {
        //display a view of all categories

        $categories=Category::all();

        return view('categories.index')->withCategories($categories);

        //it will also have a form to create categories
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //display a view of our categories
         // with a form to create a new category


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Save a new category and then redirect to the index

        $this->validate($request,array(

            'name'=>'required|max:255'   ));

             $category=new Category;

             $category->name=$request->name;
             $category->save();


             Session::flash('success','New Category has been created');
             return  redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function getgoogleposts($category_id)

    {
       /** $category="google";
        $posts=Post::get()->where('category','=',$category);

        $dat = App\Term::with('posts')->where('name', $category)->get();
        return view('categories.google')->withPosts($posts); **/

        $category = Category::findOrFail($category_id);

        if($category){
            $posts = Post::where('Category_id',$category_id)->get();

            return view('categories.google', compact('posts'));
        }

        return view('errors.404');
    }


    public function getappleposts($category_id){

        $category = Category::findOrFail($category_id);

        if($category){
            $posts = Post::where('Category_id',$category_id)->get();

            return view('categories.apple', compact('posts'));
        }

        return view('errors.404');


    }


    public function getmicrosoftposts($category_id){

        $category = Category::findOrFail($category_id);

        if($category){
            $posts = Post::where('Category_id',$category_id)->get();

            return view('categories.microsoft', compact('posts'));
        }

        return view('errors.404');


    }


    public function getfacebookposts($category_id){


        $category = Category::findOrFail($category_id);

        if($category){
            $posts = Post::where('Category_id',$category_id)->get();

            return view('categories.facebook', compact('posts'));
        }

        return view('errors.404');


    }



    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
