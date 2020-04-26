@extends('layouts.app')

@section('content')
    <h3 class="mt-4">Search post :</h3>
    {!! Form::open(['action' => 'PostController@searchResult', 'method' => 'GET', 'class' => 'row d-flex justify-content-center']) !!}
        <div class="form-group col-md-6">
            <div>
                {{ Form::label('title', 'Search') }}
                {{ Form::text('title', '', ['class' => 'form-control']) }}            
            </div>
            <div class="d-flex justify-content-center">
                <div class="m-3 text-center">
                    {{ Form::label('priceMin', 'Min Price') }}
                    {{ Form::number('priceMin', '', ['class' => 'form-control', 'min' => '0', 'onkeydown' => "return event.keyCode !== 69"]) }}  
                </div>
                <div class="m-3 text-center">
                    {{ Form::label('priceMax', 'Max Price') }}
                    {{ Form::number('priceMax', '', ['class' => 'form-control', 'min' => '0', 'onkeydown' => "return event.keyCode !== 69"]) }}            
                </div>
            </div>
            <div class="text-center">
                {{Form::submit('Submit', ['class' => 'btn btn-dark'])}}
            </div>
        </div>
    {!! Form::close() !!}
@endsection