
{{-- @dd($posts) --}}
@extends('layouts.main')
@section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    @if ($posts->count())
        <div class="card mb-3">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <small>
                    <p> By : <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</p>
                        <p>in : <a href="/categories/{{$posts[0]->category->slug}}">{{ $posts[0]->category->name }}</a>{{ $posts[0]->created_at->diffForHumans() }}</p>
                        <p class="card-text">{{ $posts[0]->excerpt }}</p>
                </small>
             <a href="/posts/{{ $posts[0]->slug }}">Read More..</a>
            </div>
        </div>
    @else
    <p>No Post Found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post )
            <div class="col-md-4 mb-3">
                <article class="mb-5">
                    <h2>
                        <a href="/posts/{{ $post->slug }}">  {{ $post->title }}</a>    
                    </h2>
                    <p> By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</p>
                    <p>in : <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p>
                    <p>{{ $post->body }}</p>
                </article>
            </div>
            @endforeach
        </div>
    </div>
{{--    
    @foreach ($posts->skip(1) as $post )
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post->slug }}">  {{ $post->title }}</a>    
        </h2>
        <p> By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</p>
        <p>in : <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a></p>
        <p>{{ $post->body }}</p>
    </article>
    @endforeach --}}
@endsection