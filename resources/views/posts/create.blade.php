@extends('layouts.app')

@section('content')
<body>
<div class="container">       
        <div class="row">
                <div class="col-md-4">
                        @include('inc.socialmedia')
                </div>
                <div class="col-md-7">
                        <h1>Create Post</h1><!--see below: whenever submit a file, need to have an enctype attribute in form-->
                        <p>You can write a new post here.</p>
                        <p>Upload a picture if you want.</p>      
                                {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                                {{Form::label('title', 'Title')}}<!--label required in postscontroll-->
                                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                        </div><!--here is a text field displayed-->
                        <div class="form-group">
                                {{Form::label('body', 'Body')}}
                                {{Form::textarea('body', '', ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Text'])}}
                        </div>
                        <div class="form-group">
                                {{Form::file('cover_image', ['class' => 'btn btn-secondary', 'title' => 'search for images'])}}<!--laravel collective package-->
                        </div>
                        <div>
                                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}<!--submit button displayed-->
                                {!! Form::close() !!}
                        </div>  
                </div>
                <div class="col-md-1">      
                </div>
        </div>
</div>
</body>
@endsection