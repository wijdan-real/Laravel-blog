@extends('Layout.staticpages')



@section('title', ' | Microsoft Posts')



@section('content')


    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Microsoft Posts</h1>

        </div>

    </div>


    @foreach($posts as $post)
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <h2>{{$post->title}}</h2>
                <h4>Published:{{ date('M j,Y',strtotime($post->created_at) )}}</h4>

                <p>{{substr($post->body,0,100)}}{{strlen($post->body)>250? '...' : ""}}</p>
                <a href="{{url('blog/'.$post->slug)}}"  class="btn btn-primary">Read More</a>

                <hr>

            </div>
        </div>

    @endforeach


    <div class="row">

        <div class="col-md-12">

            <div class="text-center">



            </div>

        </div>

    </div>





@endsection