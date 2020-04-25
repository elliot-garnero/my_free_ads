@extends('layouts.app')

@section('content')
    <h3 class="mt-4">Search post :</h3>
    {!! Form::open(['action' => 'PostController@searchResult', 'method' => 'GET']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Search') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Search']) }}            
        </div>
        <div class="form-group d-table">
            {{ Form::label('priceMin', 'Min Price') }}
            {{ Form::number('priceMin', '', ['class' => 'form-control', 'min' => '0', 'onkeydown' => "return event.keyCode !== 69"]) }}  
            {{ Form::label('priceMax', 'Max Price') }}
            {{ Form::number('priceMax', '', ['class' => 'form-control', 'min' => '0', 'onkeydown' => "return event.keyCode !== 69"]) }}            
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection