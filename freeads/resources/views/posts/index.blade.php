@extends('layouts.app')

@section('content')
    <h3 class="mt-4">Posts :</h3>
    @if (count($posts) > 0)
        {{ $posts->links() }}
        @foreach ($posts as $post)
            <div class="card border-dark mb-3 p-2">
                <div class="d-flex justify-content-between mt-2">
                    <h3><a class="text-danger" href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <h3>{{ $post->price }} €</h3>
                </div>
                <p>{{ $post->body }}</p>
                <img src="{{ $post->images }}" alt="issou" height="30%" width="30%">
                <small class="text-secondary">Written on {{ $post->created_at }}</small>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection