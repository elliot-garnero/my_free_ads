@extends('layouts.static-layout')

@section('content')
    <a href="/posts" class="btn btn-dark mt-4">Go back</a>
    <div class="d-flex justify-content-between mt-4">
        <h3>{{ $post->title }}</h3>
        <h3 class="">{{ $post->price }}€</h3>
    </div>
    <hr>
    <div>
        {{ $post->body }}
    </div>
    <hr>
    <img src="{{ $post->images }}" alt="">images not working
    <hr>
    <small>Wrtitten on {{ $post->created_at }}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
    {!!Form::open([
        'action' => ['PostController@destroy', $post->id],
        'method' => 'POST',
        'class' => 'float-right'
    ])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger text-dark'])}}
    {!!Form::close()!!}
@endsection