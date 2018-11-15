

@extends('Layout.adminpages')


@section('title' , ' | Edit Comment')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">


            <h1 style="margin-top: 50px;">Edit Comment</h1>

            <br>


        {{ Form::model($comment,['route'=>['comments.update',$comment->id],'method'=>'PUT']) }}

            {{Form::label('name','Name:')}}
            {{Form::text('name',null,["class"=>"form-control",'disabled'=>''])}}

            {{Form::label('email','Email:')}}
            {{Form::text('email',null,['class'=>"form-control",'disabled'=>''])}}

            {{Form::label('comment','Comment:')}}
            {{Form::textarea('comment',null,['class'=>"form-control"])}}

           <hr>

            {{Form::submit('Update Comment',['class'=>'btn btn-primary btn-block'])}}

    {!! Form::close()!!}

    </div>
      </div>

    @endsection