<?php

namespace App\Http\Controllers;

//use Faker\Provider\Image;
use App\Tag;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Session;
use Image;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





    public function index()
    {
        //create a variable and store all the blog posts in it
        //$posts = Post::all();
        $posts = Post::orderBy('id','desc')->paginate(10);
        return view('posts.index')->withPosts($posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  //create function
    {

      $categories=Category::all();
      $tags = Tag::all();
      $selectedtag = Post::first()->tag_id;
      return view('posts.create')->with(compact('tags','categories','selectedtag'));


       // return view('posts.create')->withCategories($categories)->withTags($tags);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       //  dd($request);
        //First validate the data
        $this->validate($request,array(

             'title'=>'required|max:255',
             'slug'=>'required|alpha_dash|min:5|max:255|unique:posts,slug',
             'category_id'=>'required|integer',
             'body'=>'required',
            ) );

         //Secondly store to the database
           $post=new Post;

           $post->title=$request->title;
           $post->slug=$request->slug;
           $post->category_id=$request->category_id;
           $post->body=$request->body;


           //save our image

        // get current time and append the upload file extension to it,
        // then put that name to $photoName variable.
        $photoName = time().'.'.$request->featured_image->getClientOriginalExtension();

        /*
        talk the select file and move it public directory and make avatars
        folder if doesn't exsit then give it that unique name.
        */
        $request->featured_image->move(public_path('images'), $photoName);
        $post->image=$photoName;


           $post->save();

           $post->tags()->sync($request->tags,false);

        //redirect to another page
        Session::flash('success','The blog was successfully saved');
        return redirect()->route('posts.show',$post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);

        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the post from database

        $tags = Tag::all();
        $selectedtag = Post::first()->tag_id;


        $post=Post::find($id);
        $categories=Category::all();

        $cats=array();

        foreach ($categories as $category) {

            $cats[$category->id]=$category->name;
        }

        // return the view and pass the varaible to the view

        return view('posts.edit')->with(compact('post','tags','categories','selectedtag'));


        //  return view('posts.edit')->withPost($post)->withCategories($cats);
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
        //Save the Data to the Database

        $post = Post::find($id);


        if ($request->input('slug') == $post->slug) {

            $this->validate($request,array(

                'title' => 'required|max:255',
                'category_id' => 'required|integer',
                'body' => 'required'
            ));
        }

        else {

        // Validate the Data
        $this->validate($request, array(

            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id' => 'required|integer',
            'body' => 'required'));

    }

        $post= Post::find($id);

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id=$request->input('category_id');
        $post->body = $request->input('body');
        $post->save();

        //set flash data with success message

        $post->tags()->sync($request->tags,false);

        Session::flash('success',"This post was successfully updated.");

        //redirect with flash data to the posts.show

         return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->tags()->detach();

        $post->delete();
        Session::flash('success','The blog was successfully deleted.');

        return redirect()->route('posts.index');
    }
}



