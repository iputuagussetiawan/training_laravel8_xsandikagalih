
{{-- @dd($posts) --}}
@extends('layouts.main')
@section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    @foreach ($posts as $post )
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post->slug }}">  {{ $post->title }}</a>    
        </h2>
        <p> By : <a href="/authors/{{ $post->author->username }}"> {{ $post->author->name }}</a></p>
        <p>in : <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a></p>
        <p>{{ $post->body }}</p>
    </article>
    @endforeach
@endsection