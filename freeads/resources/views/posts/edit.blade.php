@extends('layouts.app')

@section('content')
    <h3 class="mt-4">Edit post</h3>
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}            
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Your text here ...']) }}            
        </div>

        {{-- <div class="form-group">
            {{ Form::label('images', 'Image') }}
            {{ Form::file('images', ['class' => 'form-control-file']) }}
        </div> --}}
        <div class="form-group">
            {{ Form::label('images', 'Image') }}
            {{ Form::text('images', '',['class' => 'form-control']) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('price', 'Price') }}
            {{ Form::number('price', $post->price, ['class' => 'form-control', 'min' => '0', 'onkeydown' => "return event.keyCode !== 69"]) }}            
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection