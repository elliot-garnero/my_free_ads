@extends('layouts.app')

@section('content')
    <a href="/posts/search" class="btn btn-dark mt-4">Go back</a>
    <h3 class="mt-4">Your results for "{{$request["title"]}}" :</h3>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="border-bottom border-dark pb-3">
                <div class="d-flex justify-content-between mt-4">
                    <h3><a class="text-danger" href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <h3>{{ $post->price }}€</h3>
                </div>
                <hr>
                <div class="mb-4">
                    {{ $post->body }}
                </div>
                <img src="{{ $post->images }}" alt="issou" height="40%" width="40%"><br>
            </div>
        @endforeach
    @else
        <p>No post found</p>
    @endif
@endsection