<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\song;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $songs=DB::table('songs')->get();

        $songs=\App\song::all();    //coz the song model is in app
        return view('songs.index',compact('songs'));
      //  return "songs";

    }   // for using database we have to connected from env that is for eloquent

       // using the db we have to config out databse from config
       // After connection, we have to restart the server.
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
        //
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
   public function edit($id)
    {
        //

        $song=song::find($id);
       // return $song;
        return view ('songs.songs.edit',compact('song'));
    }

   /** public function edit(Song $song)
    {
        //

        //$song=song::find($id);
        // return $song;
        return view ('songs.songs.edit',compact('song'));
    }  **/

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
