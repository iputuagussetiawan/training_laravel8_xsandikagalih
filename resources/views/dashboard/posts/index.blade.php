@extends('dashboard.layout.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>
</div>
<h2>Section title</h2>
<a class="btn btn-primary mb-3" href="/dashboard/posts/create"><span data-feather="plus"></span> New Post</a>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Categori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}"><span data-feather="eye"></span></a>
                        <a href="/dashboard/posts/{{ $post->slug }}"><span data-feather="edit"></span></a>
                        <a href="/dashboard/posts/{{ $post->slug }}"><span data-feather="trash-2"></span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection