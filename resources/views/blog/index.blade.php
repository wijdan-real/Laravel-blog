

@extends('Layout.staticpages')

@section('title',' | Blog')

@section('content')

<div class="row">

    <div class="col-md-8 col-md-offset-2">

    <h1>Blog Archives</h1>
        <br>
        <br>

    </div>

</div>


   @foreach($posts as $post)
    <div class="row">

        <div  class="col-md-8 col-md-offset-2">


            <h2><strong>{{$post->title}}</strong></h2>
            <h4>Published:{{ date('M j,Y',strtotime($post->created_at) )}}</h4>

            <p style="font-size: 18px;"><i>{{substr($post->body,0,100)}}{{strlen($post->body)>250? '...' : ""}}</i></p>
            <a href="{{url('blog/'.$post->slug)}}"  class="btn btn-primary">Read More</a>

            <hr>

        </div>
    </div>

       <br>

    @endforeach


    <div class="row">

        <div class="col-md-12">

            <div class="text-center">

               {!! $posts->links() !!}


            </div>

        </div>

    </div>


@endsection