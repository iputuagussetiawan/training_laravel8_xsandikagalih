@extends('dashboard.layout.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2>
                     {{ $post->title }}</a>    
                </h2>
                <a href="/dashboard/posts">Back To Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}"><span data-feather="edit"></span></a>
                <a href="/dashboard/posts/{{ $post->slug }}"><span data-feather="trash-2"></span></a>
                
                <article>
                    {!! $post->body !!}
                </article>
            </article>
         
        </div>
    </div>
</div>
@endsection