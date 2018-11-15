 @extends('Layout.staticpages')

@section('title',' | Edit Blog Post')

 @section('stylesheet')

     {!! Html::style('css/select2.min.css') !!}

 @endsection


@section('content')


    <div class="row">
  {!! Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT']) !!}
        <div class="col-md-8">

            {{Form::label('title','Title:')}}
            {{Form::text('title',null,["class"=>"form-control input-md"])}}

            {{Form::label('slug','Slug:')}}
            {{Form::text('slug',null,['class'=>"form-control input-md"])}}

            {{Form::label('category','Category:')}}

            <select class="form-control" name="category_id">

                @foreach($categories as $category)

                    <option value="{{$category->id}}" >{{$category->name}}</option>

                @endforeach
            </select>


            <label for="sel2">Select the right tags for your post:</label>
            <select multiple class="form-control" id="sel2" name="tags[]">

                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach

            </select>


            {{Form::label('body','Body:',["class"=>"form-spacing-top"])}}
            {{Form::textarea('body',null,["class"=>"form-control"])}}

        </div>

        <div class="col-md-4">

            <div class="well">

                <dl class="dl-horizontal">

                    <dt>Created at:</dt>
                    <dd>{{ date('M j, Y h:ia',strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">

                    <dt>Updated at:</dt>
                    <dd>{{ date('M j, Y h:ia',strtotime($post->updated_at)) }}</dd>
                </dl>

                <hr>

                <div class="row">  <!-- inner row starts here -->

                    <div class="col-sm-6">

                        {!! Html::linkRoute('posts.show','Cancel',array($post->id), array('class'=>'btn btn-danger btn-block')) !!}</div>
                    <!--   <a href="#" onclick="parent" class="btn btn-primary btn-block">Edit</a></div> -->

                    <div class="col-sm-6">

                      {{Form::submit('Save Changes',['class'=>'btn btn-primary btn-block'])}}
                </div>            <!-- inner row termiantes here -->

            </div>


        </div>
    </div>
       {!! Form::close()!!}
    </div>

@endsection

 @section('scripts')

     {!! !Html::script('js/select2.min.js') !!}

 @endsection