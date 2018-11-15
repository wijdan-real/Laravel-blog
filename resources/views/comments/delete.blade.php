
@extends('Layout.adminpages')



@section('title' ,' | DELETE COMMENT')


@section('content')

    <div class="row">

        <div class="col-md-8 col-md-offset-2"><

            <h1>ARE YOU SURE YOU EANT TO DELETE THIS COMMENT?</h1>

            <P>
                <strong>Name:</strong>{{$comment->name}}<br>
                <strong>Email:</strong>{{$comment->email}}<br>
                <strong>Comment:</strong>{{$comment->comment}}
            </P>

             {{Form::open(['route'=>['comments.destroy',$comment->id],'method'=>'DELETE'])}}
            {{Form::submit('DELETE COMMENT',['class'=>'btn btn-lg btn-danger btn-block'])}}

             {{Form::close()}}
            </div>
    </div>



    @endsection