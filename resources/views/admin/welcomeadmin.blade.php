

@extends('Layout.dynamicpages')


@section('title', ' | Admin Dashboard')


@section('stylesheets')

    {!! Html::style('public/css/admin-style.css') !!}


@endsection

<link rel="stylesheet" href="/css/admin-style.css">

{!! Charts::assets() !!}


@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                 <br><br><br>

                 <img  style="margin-left:430px;" src="/admin1.png" class="center-block img-circle" width="120px" height="auto">

                <p style="margin-left:270px; "  id="adminwelcometext" class= "text-center well-primary">Welcome to the Admin DashBoard</p>


            </div>
        </div>

        <div class="row">

            <div style="margin-top: 50px; margin-left: 175px;" class="col-md-7">

                <div class="center-block">

          {!! $chart->render()!!}

        </div>
        </div>

    </div>






    @endsection

