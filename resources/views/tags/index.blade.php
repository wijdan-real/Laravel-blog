


@extends('Layout.adminpages')

@section('title',' | All Tags')



@section('content')


    <div class="row">

        <div class="col-md-9">

            <h1>Tags</h1>

            <table class="table">

                <thead>

                <tr>
                    <th>#</th>
                    <th>Name</th>

                </tr>

                </thead>

                <tbody>


                @foreach($tags as $tag)

                    <tr>

                        <th>{{$tag->id}}</th>
                        <td><a href="{{route('tags.show',$tag->id)}}">{{$tag->name}}</a></td>

                    </tr>

                @endforeach

                </tbody>

            </table>

        </div>  <!-- end of col-md -8 -->


        <div class="col-md-3">

            <div class="well">

                {!! Form::open(['route'=>'tags.store','method'=>'POST']) !!}

                <h2>New Tag</h2>

                {{Form::label('name','Name:')}}

                {{Form::text('name',null,['class'=>'form-control'])}}

                <br>
                {{Form::submit('Create new Tag',['class'=>'btn btn-primary btn-block'])}}

                {!! Form::close() !!}

                <br>

                {!! Form::open(['route'=>['tags.destroy',$tag->id],'method'=>'DELETE']) !!}

                <h2>Delete Tag</h2>

                {{Form::label('name','Name:')}}

                {{Form::text('name',null,['class'=>'form-control'])}}

                <br>

                {{Form::submit('Delete Tag',['class'=>'btn btn-danger btn-block'])}}


                {!! Form::close() !!}

            </div>
        </div>

    </div>  <!-- class row >

    @endsection