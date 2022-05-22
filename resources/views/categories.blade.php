
{{-- @dd($posts) --}}
@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post Category </h1>

  
    {{-- <ul>
        <li>
            <a href="/categories/{{ $category->slug }}">  {{ $category->name }}</a>    
        </li>
    </ul> --}}

    <div class="container">
        <div class="row">
            @foreach ($categories as $category )
            <div class="col-md-4">
                <a href="/categories/{{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="img/windows-3f04FMm_Jqk-unsplash.jpg" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay">
                        <h5 class="card-title">  {{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
   
@endsection