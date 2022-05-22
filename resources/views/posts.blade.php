
{{-- @dd($posts) --}}
@extends('layouts.main')
@section('container')
    <h1 class="mb-5 text-center">{{ $title }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="/blogs">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search" id="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
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
                        <p>  {!! $post->body !!}</p>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    @else
    <p>No Post Found</p>
    @endif
@endsection