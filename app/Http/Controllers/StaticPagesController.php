<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class StaticPagesController extends Controller
{

  public function getIndex(){


      $posts= Post::orderby('created_at','desc')->limit(4)->get();
      return view('staticpages.welcome')->withPosts($posts);
  }


  public function getAbout() {

      $fullname="Wijdan Tariq";
      $email="wijdan.work.1@gmail.com";

      return view('.staticpages.about')->with("fullname",$fullname)->with("email",$email);   // Multipe data passing

     // return view('staticpages.about')->withFullName($fullname)->withEmail($email) ;

      /* Data Passing by Array

        $data=[];
      $data['email']=$email;
      $data['fullname']=$fullname;

     */

  }

  public function getContact() {

      return view('staticpages.contact');
  }



}
