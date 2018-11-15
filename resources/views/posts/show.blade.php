
@extends('Layout.adminpages')


@section('title', ' | View Post')


@section('content')


    <div class="row">

        <div class="col-md-8">


        <h1>{{ $post->title }}</h1>

         <p class="lead"> {{$post->body}} </p>

            <div class="tags">

                <h5>Tags</h5>
                @foreach($post->tags as $tag)

                   <span class="label label-default">{{$tag->name}}</span>
                    @endforeach
            </div>

            <div id="backend-comments" data-style="margin-top: 50px;">

            <h3>Comments <small>{{$post->comments()->count()}}</small> </h3>

                <table class="table">

                    <thead>
                    <tr>

                        <th>Name</th>
                        <th>Email</th>
                        <th>Comment</th>
                        <th width="70px"></th>

                    </tr>
                    </thead>

                    <tbody>

                     @foreach($post->comments as $comment)
                       <tr>

                           <td>{{$comment->name}}</td>
                           <td>{{$comment->email}}</td>
                           <td>{{$comment->comment}}</td>
                           <td>
                               <a href="{{ route('comments.edit',$comment->id) }}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                               <a href="{{route('comments.delete',$comment->id)}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> </a>
                           </td>
                       </tr>
                         @endforeach
                    </tbody>
                </table>

            </div>
         </div>

        <div class="col-md-4">

            <div class="well">


                <dl class="dl-horizontal">

                    <label>Post URL:</label>
                    <p><a href="{{ route('blog.single',$post->slug)}}">{{route('blog.single',$post->slug)}}</a></p>
                </dl>


                <dl class="dl-horizontal">

                    <label>Category:</label>
                    <p>{{$post->category->name}}</p>

                </dl>



                <dl class="dl-horizontal">

                    <label>Created at:</label>
                    <p>{{ date('M j, Y h:ia',strtotime($post->created_at)) }}</p>
                </dl>

                <dl class="dl-horizontal">

                    <label>Updated at:</label>
                    <p>{{ date('M j, Y h:ia',strtotime($post->updated_at)) }}</p>
                </dl>

                <hr>

                <div class="row">  <!-- inner row starts here -->

                    <div class="col-sm-6">

                        {!! Html::linkRoute('posts.edit','Edit',array($post->id), array('class'=>'btn btn-primary btn-block')) !!}</div>
                     <!--   <a href="#" onclick="parent" class="btn btn-primary btn-block">Edit</a></div> -->

                    <div class="col-sm-6">

                        {!! Form::open(['route'=>['posts.destroy',$post->id], 'method'=>'DELETE']) !!}

                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-block ']) !!}

                        {!! Form::close() !!}
                    </div>
                      <!--  <a href="#" onclick="parent" class="btn btn-danger btn-block">Delete</a></div> -->
                </div>            <!--  inner row termiantes here -->


                <hr>
                <div class="row">
                    <div class="col-md-12">

                        {!! Html::linkRoute('posts.index','Show all Posts',array($post->id), array('class'=>'btn btn-success btn-block')) !!}</div>

                    </div>
                </div>

        </div>
                </div>


    </div>
    @endsection