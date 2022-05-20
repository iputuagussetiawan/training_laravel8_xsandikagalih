
{{-- @dd($posts) --}}
@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post Category </h1>

    @foreach ($categories as $category )
    <ul>
        <li>
            <a href="/categories/{{ $category->slug }}">  {{ $category->name }}</a>    
        </li>
    </ul>
    @endforeach
@endsection