
{{-- @dd($posts) --}}
@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Blogs Post</h1>
    @foreach ($posts as $post )
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post->slug }}">  {{ $post->title }}</a>    
        </h2>
        <p> By : <a href="#"> {{ $post->user->name }}</a></p>
        <p>in : <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a></p>
        <h3>{{ $post->author }}</h3>
        <h3>{{ $post->author }}</h3>
        <p>{{ $post->body }}</p>
    </article>
    @endforeach
@endsection