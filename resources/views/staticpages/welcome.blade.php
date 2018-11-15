
@extends('Layout.staticpages')

@section('title','| Home')


  @section('content')


      <div class="row">  <!-- header row -->

          <div style=" border-radius: 5px; width: 1160px; height:800px; " class="col-md-12">

      <div style="background-color:black; " class="jumbotron" >
          <img style="margin-right: 200px; border: black"  src="{{ asset('images/cyberbullying.png') }}" width="1000px" height="500px;">

          <h1 style="color: white; text-align: center">Welcome to Techspot</h1>
          <h3 style="text-align: center; color: white" class="lead">Thansk for visiting</h3>

          <p style="color: white; border-radius: 5px; background-color: #0d6aad" class="text-center"><i>"Tecspot is the hub of latest tech giants news.Share us on"</i></p>-->

          <div style="display: inline; ">
              <ul style=" list-style-type: none; margin-left: 390px;">
                  <li style="display: inline; font-size: 20px; margin-left: 10px;"><a style="color: white" href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                  <li style="display: inline; font-size: 20px; margin-left: 10px;"><a style="color: white" href="https://twitter.com/" class="fa fa-twitter"></a></li>
                  <li style="display: inline; font-size: 20px; margin-left: 10px;"><a style="color: white" href="https://www.youtube.com/" class="fa fa-youtube"></a></li>
                  <li style="display: inline; font-size: 20px; margin-left: 10px;"><a style="color: white" href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                  <li style="display: inline; font-size: 20px; margin-left: 10px;"><a style="color: white" href="https://plus.google.com/" class="fa fa-google"></a></li>

              </ul>
          </div>



      </div>
          </div>

      </div>

<br><br><br><br><br>




    <div class="row">   <!-- first row -->

        <div class="col-md-8">

            @foreach($posts as $post)

            <div class="post">
                <h3><strong>{{$post->title}}</strong></h3>

                <p style="font-size: 18px;"><i>{{substr($post->body,0,100)}} {{strlen($post->body)>100 ?"...":""}}</i></p>
                <a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a>
            </div>

            <br>
                <p><strong>Created by:</strong>  <span style="size: 25px 18px;" class="glyphicon glyphicon-user"></span>   <b>Admin Techspot</b></p>
            <hr>
                @endforeach

        </div>

        <div style="background-color:#080808; border-radius: 10px; border: 1px solid black; margin-bottom: 20px;" class="col-md-3 col-md-offset-1">
            <br>

            <h2 style="color: white; text-align: center;margin-bottom: 20px; ">Sidebar</h2>

            <div style="padding-bottom: 5px; padding-top: 0px;" class="input-group">
            <span style="padding-bottom: 5px; padding-top: 0px;" class="input-group-btn">
           <button style="height: 34px; margin-bottom: 2px;" class="btn btn-default btn-lg" type="button"><span class="glyphicon glyphicon-search"></span></button>
          </span>
                <input type="text" class="form-control" placeholder="Search for...">
            </div><!-- /input-group -->

            <h2 style=" color: white; text-align: center;">Categories</h2>

            <ul style="display:block; text-align: center;">

            <li style=" font-size:20px;list-style-type: none; margin-right:50px;"><a href="{{url('categories/1/google')}}"><b>Google</b></a></li>
                <br>
                <li style=" font-size:20px; list-style-type: none; margin-right:50px;"><a href="{{url('categories/3/apple')}}"><b>Apple</b></a></li>
                <br>
                <li style=" font-size:20px; list-style-type: none; margin-right:50px;"><a href="{{url('categories/2/microsoft')}}"><b>Microsoft</b></a></li>
                <br>
                <li style=" font-size:20px; list-style-type: none; margin-right:50px;"><a href="{{url('categories/4/facebook')}}"><b>Facebook</b></a></li>
                <br>

            </ul>
            <br>

        </div>


    </div>   <!--first row ends here -->


  @endsection



</body>

</html>

