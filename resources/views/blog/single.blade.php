

@extends('Layout.staticpages')


@section('title', ' |  {{$post->title}}' )

<link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css"
      xmlns="http://www.w3.org/1999/html">

      <link rel="stylesheet" href="/css/style.css">

@section('content')


    <div class="row">

        <div class="col-lg-8 col-md-offset-1">


            <img  src="{{ asset('images/' . $post->image) }}" width="1000px" height="600px">

            <strong><h1>{{$post->title}}</h1></strong>

            <br>

             <p style="font-size: 18px; border-radius: 10px;"><i>{{$post->body}}</i></p>

            <div class="tags">

                <h3>Tags</h3>
                @foreach($post->tags as $tag)

                    <span style="font-size: 12px;  margin-top: 12px;" class="label label-default">{{$tag->name}}</span>
                @endforeach
            </div>

            <hr>

            <p><strong>Posted In:</strong>  <strong>{{$post->category->name}}</strong> </p>

            <p><strong>Created by:</strong> <span style="size: 25px 18px;" class="glyphicon glyphicon-user"></span>  <b>Admin Techspot</b></p>



        </div>
    </div>


    <!-- row for comments -->


    <div class="row">


        <div class="col-md-8 col-md-offset-2">

            <h3 class="comment-title"><span class="glyphicon glyphicon-comment"></span><strong>{{$post->comments()->count()}}  </strong><b>Comments</b></h3>
            <hr>

            @foreach($post->comments as $comment)

                <div class="comment">

                    <div class="author-info">

                        <img id="author-img"  src="{{"https://www.gravatar.com/avatar/" ,md5(strtolower(trim($comment->email))),"?s=50&d=mm"}}">

                        <div class="author-name">

                            <h3>{{$comment->name}}</h3>
                            <p class="author-time">{{ $comment->created_at}}</p>
                        </div>
                    </div>
               <!--     'F nS, Y -g:iA', strtotime -->

                    <div class="comment-content">
                        {{$comment->comment}}

                    </div>

                    </div>

                @endforeach


        </div>

    </div>


    <div class="alert alert-info" role="alert">
        <a style="font-size: 16px;" href="#" class="alert-link">You have to sigin inorder to submit your comment</a>
    </div>


    <!-- comment row ends here -->



    <div class="row">  <!-- another row-->
        <div id="comment-form">

           {{Form::open(['route'=>['comments.store',$post->id],'method'=>'POST'])}}

                <div class="row">

                    <div class="col-md-6">
                        {{Form::label('name',"Name:")}}
                        {{Form::text('name',null,['class'=>'form-control'])}}
                    </div>

                    <div class="col-md-6">
                        {{Form::label('email',"Email:")}}
                        {{Form::text('email',null,['class'=>'form-control'])}}
                    </div>

                    <div class="col-md-12">
                        {{Form::label('comment',"Comment:")}}
                        {{Form::textarea('comment',null,['class'=>'form-control','rows'=>'5'])}}
                        <hr>
                        {{Form::submit('Add Comment',['class'=>'btn btn-primary btn-block'])}}

                    </div>
                </div>

                      {{Form::close()}}
        </div>
    </div>




    @endsection