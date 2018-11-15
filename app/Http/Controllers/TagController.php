<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;
use Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   /* public function __construct()
    {
        $this->middleware('auth:admin');
    } */


    public function index()
    {
        // diaplay a view of all tags


      //  $tags=Tag::all();
       // return view('tags.index')->with('$tags');
       //return $tags;
       //return compact('tags');
        //return view('tags.index',compact('tags'));

       // $posts=$tag->posts;
        //retrun('posts.index',compact('posts'));

        $tags =Tag::all();
        $selectedtag = Post::first()->tag_id;

        return view('tags.index', compact('tags', 'selectedtag'));
      //  return view('tags.index',compact('tags'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //First validate the data
        $this->validate($request,array(

            'name'=>'required|max:255',
        ));

        //Secondly store to the database
        $tag=new Tag;

        $tag->name=$request->name;

        $tag->save();

        //redirect to another page
        Session::flash('success','The tag was successfully saved');
        return redirect()->route('tags.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag=Tag::find($id);
        return view('tags.show')->withTag($tag);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag=Tag::find($id);

        return view('tags.edit')->withTag($tag);
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

        $tag=Tag::find($id);

        $this->validate($request,['name'=>'required|max:255']);

        $tag->name=$request->name;
        $tag->save();

        Session::flash('success','The tag was successfully updated');
        return redirect()->route('tags.show',$tag->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {

        $tag=Tag::find($id);
        $tag->posts()->detach();
        $tag->delete();

       Session::flash('success','The tag was deleted successfully');

        return redirect()->route('tags.index');

    }
}
