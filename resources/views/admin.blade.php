@extends('layouts.app')


@section('title',' | Admin Panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Dashboard</div>

                    <div class="panel-body">
                        You are logged in as <strong>Admin!</strong>

                        <hr>

                        Advanced to the Admin Panel for accessing  <a href="{{route('admin-dashboard')}}"> <b> Admin Dashboard </b></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
