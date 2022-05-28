

@extends('dashboard.layout.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="row">
    <div class="col-lg-8">
        <form action="/dashboard/posts/{{$post->slug}}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{ old('title',$post->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Slug" value="{{ old('slug',$post->slug) }}" readonly>
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select id="category_id" name="category_id" class="form-select @error('category_id') is-invalid @enderror" >
                   @foreach ($categories as $category )
                    @if (old('category_id',$post->category_id)==$category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                    
                   @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
                <input id="body" name="body" type="hidden" value="{{ old('body',$post->body) }}">
                <trix-editor input="body"></trix-editor>
               
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <input type="hidden" name="oldImage" id="oldImage" value="{{ $post->image }}">
                @if ($post->image)
                <img src="{{ asset('storage/'.$post->image) }}"  alt="{{ $post->title }}" class="img-preview img-fluid img-thumbnail" style="max-width: 200px">
                @else
                    
                <img class="img-preview img-fluid img-thumbnail" style="max-width: 200px">
                @endif
                <input class="form-control  @error('image') is-invalid @enderror" type="file" name="image" id="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function () {  
        fetch('/dashboard/posts/checkSlug?title='+ title.value)
        .then (response => response.json())
        .then (data => slug.value=data.slug)
    });  

    document.addEventListener('trix-file-accept', function (e) {  
        e.preventDefault();
    });  

    function previewImage(){
        const image=document.querySelector('#image');
        const imagePreview=document.querySelector('.img-preview');

        imagePreview.style.display='block'

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function(oFREvent){
            imagePreview.src=oFREvent.target.result;
        }
    }
</script>

@endsection