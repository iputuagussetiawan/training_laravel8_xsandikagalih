
{{-- @dd($posts) --}}
{{-- 
@dd($post) --}}
@extends('layouts.main')
@section('container')
    <article>
        <h2>
             {{ $post['title'] }}</a>    
        </h2>
        <h3>{{ $post['author'] }}</h3>
        <p> {{ $post['body'] }}</p>
    </article>
    <a href="/blogs">Back To Posts</a>
@endsection