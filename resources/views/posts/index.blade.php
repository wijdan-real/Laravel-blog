@extends('Layout.adminpages')


@section('title', ' | All Posts')


    @section('content')


        <div class="row">

            <div class="col-md-10">
                <h1>All Posts</h1>
            </div>

            <div class="col-md-2">
                 <a style="margin-top: 10px;" href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create new Post</a>
            </div>
             <hr>

            <div class="col-md-12">
                <hr>
            </div>

        </div>  <!-- end of row -->


        <div class="row">  <!-- second row starts -->

            <div class="col-md-12">

                <table class="table">

                    <thead>

                    <th>Postid</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>

                    </thead>

                    <tbody>

                     @foreach($posts as $post)

                             <td>{{$post->id}}</td>
                             <td>{{$post->title}}</td>
                             <td>{{substr($post->body,0,50)}}  {{strlen($post->body)>50? "..." : ""  }}</td>
                             <td>{{date('M j, Y',strtotime($post->created_at)) }}</td>
                             <td><a href="{{ route('posts.show',$post->id)}}" class="btn btn-default">View</a>
                                      <a href="{{route('posts.edit',$post->id)}}" class="btn btn-default">Edit</a></td>

                         </tr>


                       @endforeach

                    </tbody>
                </table>


                <div class="text-center">

                    {!!$posts->links()!!}

                </div>




            </div>  <!-- col-md-12 ends here -->
        </div>   <!-- second row ends here -->


        @endsection