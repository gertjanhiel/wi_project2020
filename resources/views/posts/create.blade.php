@extends('main')

@section('title', '| Create Post')

<link rel="stylesheet" type="text/css" href="{{ URL::asset('../css/post_create.css') }}">
<script type="text/javascript" src="{{ URL::asset('../js/post_create.js') }}"></script>

@section('content')

<div class="row">
    <div class="col-md-12">
        <br>
        <h1>Create new post</h1>
        <hr>
        {!! Form::open(['route' => 'posts.store']) !!}

        {{ Form::label('title', 'Title:', ['class' => 'col-form-label']) }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}

        {{ Form::label('body', "Post Body", ['class' => 'col-form-label']) }}
        {{ Form::textarea('body', null, ['class' => 'form-control']) }}



        {{ Form::label('tag', "Tags:", ['class' => 'col-form-label']) }}
        {{ Form::text('tag', null, ['class' => 'form-control']) }}

    </div>


    <div class="col-md-5">
        <label for="image" class="col-form-label">Upload an image: </label>
        <input id="postImg" type="file" class="form-control" name="postImg">
        <br>
        <img src="#" id="createPostImg" class="createPostImg" />
    </div>
</div>

<div class="class_row">
    
</div>

<div>
    <b-input-group prepend="$" append=".00">
        <b-form-input></b-form-input>
    </b-input-group>

    <b-input-group prepend="0" append="100" class="mt-3">
        <b-form-input type="range" min="0" max="100"></b-form-input>
    </b-input-group>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#createPostImg').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#postImg").change(function () {
        readURL(this);
    });
</script>

@endsection