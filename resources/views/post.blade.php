
{{-- @dd($posts) --}}
{{-- 
@dd($post) --}}
@extends('layouts.main')
@section('container')
    <article>
        <h2>
             {{ $post->title }}</a>    
            
        </h2>
        <p> By : <a href="/authors/{{ $post->author->username }}"> {{ $post->author->name }}</a></p>
        <p>in : <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/blogs">Back To Posts</a>
@endsection