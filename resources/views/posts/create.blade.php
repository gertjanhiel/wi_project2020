@extends('main')

@section('title', '| Create Post')

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
    </div>

    <div class="col-md-8">
        {{ Form::label('tag', "Tags:", ['class' => 'col-form-label']) }}
        {{ Form::text('tag', null, ['class' => 'form-control']) }}
    </div>
    <div class="col-md-4">
        <!-- <div class="col-md-12 col-md-offset-6"> -->
        <label for="image" class="col-form-label">Upload an image: </label>
        <input id="postImg" type="file" class="form-control" name="postImg">
        <br>
        <img src="#" id="createPostImg" width="350"/>
        <!-- </div> -->
    </div>

    {{ Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;']) }}
    {!! Form::close() !!}    
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
