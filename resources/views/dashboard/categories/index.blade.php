@extends('dashboard.layout.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
</div>
<h2>Section title</h2>
<a class="btn btn-primary mb-3" href="/dashboard/categories/create"><span data-feather="plus"></span> New Categories</a>
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Categori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="/dashboard/categories/{{ $category->slug }}"><span data-feather="eye"></span></a>
                        <a href="/dashboard/categories/{{ $category->slug }}/edit"><span data-feather="edit"></span></a>
                        <form action="/dashboard/categories/{{ $category->slug }}" class="d-inline" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Yakin Ingin Hapus Data Ini')"><span data-feather="trash-2"></span></button>
                        </form>
                      
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection