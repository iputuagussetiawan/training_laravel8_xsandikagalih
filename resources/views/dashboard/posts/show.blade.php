@extends('dashboard.layout.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2>
                     {{ $post->title }}</a>    
                </h2>

                <a class="btn btn-sm btn-outline-info" href="/dashboard/posts">Back To Posts</a>
                <a class="btn btn-sm btn-outline-warning" href="/dashboard/posts/{{ $post->slug }}/edit"><span data-feather="edit"></span></a>
            
                <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="POST">
                    @method('delete')
                    @csrf
                    <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Yakin Ingin Hapus Data Ini')"><span data-feather="trash-2"></span></button>
                </form>

                @if ($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" alt=" {{ $post->title }}">
                @else
                <img src="{{ asset('storage/post-images/default.png') }}" alt="">
                @endif

            
                <article>
                    {!! $post->body !!}
                </article>
            </article>
         
        </div>
    </div>
</div>
@endsection