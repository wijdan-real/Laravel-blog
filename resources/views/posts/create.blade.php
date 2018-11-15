
@extends('Layout.adminpages')

@section('title',' | Create New Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.css') !!}
@endsection


@section ('content')


    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Create New Post</h1>
            <hr>

            {!! Form::open(array('route'=>'posts.store','data-parsley-validate'=>'','files'=>true,'method'=>'POST')) !!}
                {{csrf_field()}}
            {{method_field("POST")}}
            {{Form::label('title','Title:')}}

            {{Form::text('title',null,array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}

            {{Form::label('slug','Slug:')}}

            {{Form::text('slug',null,array('class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>'255'))}}


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


            {{Form::label('featured_image', 'Featured Image',['class' => 'control-label'])}}
            {{Form::file('featured_image')}}



            {{Form::label('body','Post Body:')}}

            {{Form::textarea('body',null,array('class'=>'form-control','required'=>''))}}

            {{Form::submit('Create Post',array('class'=>'btn btn-primary btn-block btn-lg','style'=>'margin-top:20px;'))}}

            {!! Form::close() !!}



        </div>

    </div>

    @endsection

    @section('scripts')


        {!! !Html::script('js/parsley.min.js') !!}

        {!! Html::script('js/select2.js') !!}

         <script type="text/javascript">

             $('.select2-multi').select2();

         </script>


    @endsection





