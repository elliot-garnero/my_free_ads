@extends('layouts.static-layout')

@section('content')
    <h3 class="mt-4">Posts :</h3>
    @if (count($posts) > 0)
        {{ $posts->links() }}
        @foreach ($posts as $post)
            <div class="mb-2 p-2 border border-dark">
            <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
            <h3 class="float-right">{{ $post->price }}€</h3>
            <p>{{ $post->body }}</p>
            <p>{{$post->images}} not working images</p>
            <img src="{{ $post->images }}" alt="">
            <small class="text-secondary">Written on {{ $post->created_at }}</small>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection