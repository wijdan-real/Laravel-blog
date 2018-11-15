

@extends('layouts.app')


@section('title',' | User Panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User Dashboard</div>

                    <div class="panel-body">
                        You are logged in as <strong>User!</strong>

                        <hr>

                        Advanced to the User Panel for accessing  <a href="{{route('blog.index')}}"> <b> Blog Latest News </b></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
