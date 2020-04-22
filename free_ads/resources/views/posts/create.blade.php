@extends('layouts.static-layout')

@section('content')
    <h3 class="mt-4">Create post :</h3>
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}            
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Description ...']) }}            
        </div>
        <div class="form-group">
            {{ Form::label('images', 'Image') }}
            {{ Form::file('images', ['class' => 'form-control-file']) }}
        </div>
        <div class="form-group">
            {{ Form::label('price', 'Price') }}
            {{ Form::number('price', '', ['class' => 'form-control', 'min' => '0', 'onkeydown' => "return event.keyCode !== 69"]) }}            
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection