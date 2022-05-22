
{{-- @dd($posts) --}}
{{-- 
@dd($post) --}}
@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article>
                <h2>
                     {{ $post->title }}</a>    
                </h2>
                <p> By : <a href="/blogs?author={{ $post->author->username }}"> {{ $post->author->name }}</a></p>
                <p>in : <a href="/blogs?category={{$post->category->slug}}">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
                
                <article>
                    {!! $post->body !!}
                </article>
            </article>
            <a href="/blogs">Back To Posts</a>
        </div>
    </div>
</div>
@endsection